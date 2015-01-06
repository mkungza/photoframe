<?php
session_start();
include("connection.php");
$cusid = $_SESSION['userid'];
$formid = isset($_SESSION['formid']) ? $_SESSION['formid'] : "";
if ($formid != $_POST['formid']) {
	echo "E00001!! SESSION ERROR RETRY AGAINT.";
} else {
	unset($_SESSION['formid']);
	if ($_POST) {
		$order_fullname = mysql_real_escape_string($_POST['order_fullname']);
		$order_address = mysql_real_escape_string($_POST['order_address']);
		$order_phone = mysql_real_escape_string($_POST['order_phone']);
		$order_ems = mysql_real_escape_string($_POST['order_ems']);

		$meSql = "INSERT INTO transaction (tran_create, tran_fullname, tran_address, tran_phone, tran_status, tran_ems, cus_id) VALUES (NOW(),'{$order_fullname}','{$order_address}','{$order_phone}', 'กำลังสั่งทำ','{$order_ems}','{$cusid}') ";
		$meQeury = mysql_query($meSql);
		if ($meQeury) {
			$transaction_id = mysql_insert_id();
			for ($i = 0; $i < count($_POST['qty']); $i++) {
				$transaction_detail_quantity = mysql_real_escape_string($_POST['qty'][$i]);
				$transaction_detail_price = mysql_real_escape_string($_POST['frame_price'][$i]);
				$frame_id = mysql_real_escape_string($_POST['frame_id'][$i]);
				$lineSql = "INSERT INTO transaction_details (transaction_detail_quantity, transaction_detail_price, frame_id, transaction_id) ";
				$lineSql .= "VALUES (";
				$lineSql .= "'{$transaction_detail_quantity}',";
				$lineSql .= "'{$transaction_detail_price}',";
				$lineSql .= "'{$frame_id}',";
				$lineSql .= "'{$transaction_id}'";
				$lineSql .= ") ";
				mysql_query($lineSql);
			}
			$sql2 = "select * from transaction t,transaction_details td where t.tran_id = td.transaction_id and t.cus_id = '$cusid' and t.tran_id = '$transaction_id'";
			$result2 = mysql_query($sql2);
			if($show2 = mysql_fetch_array($result2)) {
				$tranid = $show2['tran_id'];
			}
			$to = "";
			$subject = "รายการสั่งทำกรอบรูป";
			$body = "ถ้ายืนยันการสั่งทำ โปรกรุณากดลิ้งต่อไปนี้ http://localhost/photoframe/updatestatus.php?td=$tranid&s=confirm";
			$flgSend = mail($to,$subject,$body);
			if($flgSend) {
				echo "Sendding email..";
			?>
				<script>
					alert("การสั่งซื้อสำเร็จ กำลังสั่ง email ไปยังร้านกรอบรูป..");
				</script>
			<?php
			}
			mysql_close();
			unset($_SESSION['cart']);
			unset($_SESSION['qty']);
			header('location:index.php?a=order');
		}else{
			mysql_close();
			header('location:index.php?a=orderfail');
		}
		
	}
}
?>