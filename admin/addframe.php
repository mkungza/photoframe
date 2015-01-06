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
					<h1>เพิ่มกรอบรูป</h1>
					<form method="POST" action="addframescript.php" enctype="multipart/form-data">
						<table style="margin-top:5%">
								<tr><td>ชื่อกรอบ </td> <td> : <input type="text" name="name" size="25" ></td></tr>
								<tr><td>สีกรอบ </td> <td> : <input type="text" name="color" size="25" ></td></tr>
								<tr><td>ขนาดกรอบ </td> <td> : <input type="text" name="size" size="25" ></td></tr>
								<tr><td>ราคากรอบ </td> <td> : <input type="text" name="price" size="25" ></td></tr>
								<tr><td>อัพโหลดรูป </td> <td> : <input type="file" name="image"></td></tr>
								<tr><td>ของร้าน </td> <td> : 
									<?php
										$sql = "select shop_id,shop_name from photoshop";
										$qry = mysql_query($sql,$con);
										$nrow = mysql_num_rows($qry);
										if($nrow != 0)
										{
											?>
											<select name="shop_id">
											<?php
											while($result = mysql_fetch_array($qry))
											{
												echo "<option value='".$result['shop_id']."'>".$result['shop_name']."</option>";
											}
											?>
											</select>
										<?php
										}
										else
										{
											echo "<input type=\"text\" name=\"store\" size=\"25\" value=\"ไม่มีร้าน\" >";
										}
									?>
									
								</td></tr>
								<tr><td><input type="submit" value="ยืนยัน"><input type="reset" value="ยกเลิก" onclick="window.history.back()"></td></tr>
						</table>
						<input name="edit_id" type="hidden" id="edit_id" value="<?php echo $_REQUEST['edit_id']?>">
					</form>
				</div>
		</div>
	</div>
</body>

</html>