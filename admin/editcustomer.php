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
					<h1>แก้ไขผู้ใช้งาน</h1>
				<?php 
							$id = $_REQUEST['edit_id'];
							$sql = "select * from customer where cus_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form method="POST" action="editcustomerscript.php" enctype="multipart/form-data">
						<table>
								<tr><td>ชื่อผู้ใช้ </td> <td> : <input type="text" name="name" size="25" value="<?php echo $result['cus_name']?>"></td></tr>
								<tr><td>นามสกุลผู้ใช้ </td> <td> : <input type="text" name="lastname" size="25" value="<?php echo $result['cus_lastname']?>"></td></tr>
								<tr><td>อีเมล์ผู้ใช้ </td> <td> : <input type="text" name="email" size="25" value="<?php echo $result['cus_email']?>"></td></tr>
								<tr><td>ที่อยู่ผู้ใช้ </td> <td> : <input type="text" name="address" size="60" value="<?php echo $result['cus_address']?>"></td></tr>
								<tr><td>เบอร์โทรศัพท์ </td> <td> : <input type="text" name="tel" size="25" value="<?php echo $result['cus_tel']?>"></td></tr>
								<tr><td>USERNAME </td> <td> : <input type="text" name="username" size="25" value="<?php echo $result['cus_username']?>"></td></tr>
								<tr><td>PASSWORD </td> <td> : <input type="password" name="password" size="25" value="<?php echo $result['cus_password']?>"></td></tr>
								<tr>	
									<td>อัพโหลดรูป </td> <td> : <input type="file" name="imageg"></td>
								</tr>
								<tr>
									<td></td><td><?php echo '<img src="data:image/png;base64,'.base64_encode($result['cus_image']).'" alt="photo" style="width:35%">';?><td/>
								</tr>
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