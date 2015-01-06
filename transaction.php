<?php
session_start();
include("connection.php");
$frameid = "";
$shopid = "";
$cusid = "";

if(isset($_REQUEST['frameid'])) {
	$frameid = $_REQUEST['frameid'];
}
if(isset($_REQUEST['shopid'])) {
	$shopid = $_REQUEST['shopid'];
}
if(isset($_REQUEST['cusid'])) {
	$cusid = $_REQUEST['cusid'];
}
$date = date("Y/m/d");
	$sql = "SELECT * from transaction where cus_id = '$cusid' and shop_id = '$shopid' and frame_id = '$frameid' and tran_status NOT LIKE 'สำเร็จ' ";
	$result = mysql_query($sql);
	if($show = mysql_fetch_array($result)){
	?>
		<script>
			alert("รายการนี้อยู่ระหว่างดำเนินการ โปรดกรุณารอรายการเสร็จสิ้นถึงทำการสั่งใหม่อีกครั้ง");
			window.location = "catalog.php";
		</script>
	<?php
	}
	else {
		$tranid = "";
		$strSQL = "INSERT INTO transaction (tran_status,tran_create,cus_id,shop_id,frame_id) 
						VALUES ('กำลังสั่งทำ','$date','$cusid','$shopid','$frameid')";
		$objQuery = mysql_query($strSQL);
		
		$sql2 = "SELECT * from transaction where cus_id = '$cusid' and shop_id = '$shopid' and frame_id = '$frameid'";
		$result2 = mysql_query($sql2);
		if($show2 = mysql_fetch_array($result2)) {
			$tranid = $show2['tran_id'];
		}
		$to = "godji.soul@gmail.com";
		$subject = "รายการสั่งทำกรอบรูป";
		$body = "ถ้ายืนยันการสั่งทำ โปรกรุณากดลิ้งต่อไปนี้ http://localhost/photoframe/updatestatus.php?td=$tranid&s=confirm";
		$flgSend = mail($to,$subject,$body);
		if($flgSend) {
			echo "Sendding email..";
		?>
			<script>
				alert("การสั่งซื้อสำเร็จ กำลังสั่ง email ไปยังร้านกรอบรูป..");
				window.location = "index.php";
			</script>
		<?php
		}
		else {
			echo "NOT SEND!";
		}
	}
	mysql_close();
?>