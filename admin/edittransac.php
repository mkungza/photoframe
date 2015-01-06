<?php include("../config/condb.php");?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<head>
	<script src="script/jquery-1.11.1.min.js"></script> 
	<script src="script/jquery-ui-1.11.1/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="script/jquery-ui-1.11.1/jquery-ui.css">
	
</head>
<body>
	<div class="overall">
		<!--Banner-->
		<div class="banner"></div>
		
		<!--Menu-->
		<?php include("menu.php")?>
		
		<!--contain-->
		<div class="container">
			<!--QUERY DATA-->
				<div style="margin-left:25px;">
				<?php
							$id = $_REQUEST['edit_id'];
							$sql = "SELECT * from transaction
							where tran_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form method="POST" action="edittransacscript.php" >
						<table style="margin-top:5%;">
								<tr><td>เลขที่รายการสั่งซื้อ </td> <td> : <span><?php echo $result['tran_id']?></span></td></tr>
								<tr><td>ชื่อผู้ทำรายการ </td> <td> : <span><?php echo $result['tran_fullname']?></span></td></tr>
								<tr><td>ที่อยู่ </td> <td> : <span><?php echo $result['tran_address']?></span></td></tr>
								<tr><td>เบอร์โทรศัพท์ </td> <td> : <span><?php echo $result['tran_phone']?></span></td></tr>
								<tr><td>วันที่ทำรายการ </td> <td> : <span><?php echo $result['tran_create']?></span></td></tr>
								<tr><td>สถานะ </td> <td> : 
									<select name="status" id="stat">
										<option value="กำลังทำรายการ">กำลังทำรายการ</option>
										<option value="กำลังจัดส่ง">กำลังจัดส่ง</option>
										<option value="เสร็จสมบูรณ์">เสร็จสมบูรณ์</option>
									</select>
								</td></tr>
								<tr><td><input type="submit" value="ยืนยัน"><input type="reset" value="ยกเลิก" onclick="window.history.back()"></td></tr>
						</table>
						<input name="edit_id" type="hidden" id="edit_id" value="<?php echo $_REQUEST['edit_id']?>">
					</form>
				<?php
					mysql_close();
				?>
				</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#shop').val(<?php echo $result['shop_id']?>);
		});
	</script>
</body>

</html>