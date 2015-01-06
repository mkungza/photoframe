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
					<h1>เพิ่มผู้ใช้งาน</h1>
					<form method="POST" action="addcustomerscript.php">
						<table style="margin-top:5%">
								<tr><td>ชื่อผู้ใช้ </td> <td> : <input type="text" name="name" size="25" ></td></tr>
								<tr><td>นามสกุลผู้ใช้ </td> <td> : <input type="text" name="lastname" size="25" ></td></tr>
								<tr><td>อีเมล์ผู้ใช้ </td> <td> : <input type="text" name="email" size="25" ></td></tr>
								<tr><td>ที่อยู่ผู้ใช้ </td> <td> : <input type="text" name="address" size="60" ></td></tr>
								<tr><td>เบอร์โทรศัพท์ </td> <td> : <input type="text" name="tel" size="25" ></td></tr>
								<tr><td>USERNAME </td> <td> : <input type="text" name="username" size="25" ></td></tr>
								<tr><td>PASSWORD </td> <td> : <input type="password" name="password" size="25" ></td></tr>
								<tr><td><input type="submit" value="ยืนยัน"><input type="reset" value="ยกเลิก" onclick="window.history.back()"></td></tr>
						</table>
						<input name="edit_id" type="hidden" id="edit_id" value="<?php echo $_REQUEST['edit_id']?>">
					</form>
				</div>
		</div>
	</div>
</body>

</html>