<?php include("../config/condb.php");?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
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
					<h1>แก้ไขร้านรูป</h1>
				<?php 
							$id = $_REQUEST['edit_id'];
							$sql = "select * from photoshop where shop_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form method="POST" action="editshopscript.php">
						<table>
								<tr><td>ชื่อร้าน </td> <td> : <input type="text" name="name" size="25" value="<?php echo $result['shop_name']?>"></td></tr>
								<tr><td>อีเมล์ร้าน </td> <td> : <input type="text" name="email" size="25" value="<?php echo $result['shop_email']?>"></td></tr>
								<tr><td>ที่อยู่ร้าน </td> <td> : <input type="text" name="address" size="60" value="<?php echo $result['shop_address']?>"></td></tr>
								<tr><td>เบอร์โทรศัพท์ร้าน </td> <td> : <input type="text" name="tel" size="25" value="<?php echo $result['shop_tel']?>"></td></tr>
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
</body>

</html>