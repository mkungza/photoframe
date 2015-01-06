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
					<h1>แก้ไขกรอบรูป</h1>
				<?php
							$id = $_REQUEST['edit_id'];
							$sql = "select frame_name,frame_size,frame_color,frame_price,frame_pic,frame_picname,f.shop_id,p.shop_name from frametype f left join photoshop p on p.shop_id=f.shop_id where frame_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form method="POST" action="editframescript.php" enctype="multipart/form-data">
						<table style="margin-top:5%">
								<tr><td>ชื่อกรอบ </td> <td> : <input type="text" name="name" size="25" value="<?php echo $result['frame_name']?>"></td></tr>
								<tr><td>สีกรอบ </td> <td> : <input type="text" name="color" size="25" value="<?php echo $result['frame_color']?>"></td></tr>
								<tr><td>ขนาดกรอบ </td> <td> : <input type="text" name="size" size="25" value="<?php echo $result['frame_size']?>"></td></tr>
								<tr><td>ราคากรอบ </td> <td> : <input type="text" name="price" size="25" value="<?php echo $result['frame_price']?>"></td></tr>
								<tr><td>อัพโหลดรูป </td> <td> : <input type="file" name="image" /></td></tr>
								<tr><td>ของร้าน </td> <td> : 
									<?php
										$sqlshop = "select shop_id,shop_name from photoshop";
										$qryshop = mysql_query($sqlshop,$con);
										$nrow = mysql_num_rows($qryshop);
										if($nrow != 0)
										{
											?>
											<select name="shop_id" id="shop">
											<?php
											while($resultshop = mysql_fetch_array($qryshop))
											{
												
												echo "<option value='".$resultshop['shop_id']."'>".$resultshop['shop_name']."</option>";
												
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
								<tr><td>รูป</td><td>:<?php echo '<img src="data:image/png;base64,'.base64_encode($result['frame_pic']).'" alt="'.$result['frame_picname'].'" style="width:35%">';?></td></tr>
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