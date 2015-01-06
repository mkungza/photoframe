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
					<h1>กรอบรูป</h1>
				<?php 
							$id = $_REQUEST['show_id'];
							$sql = "select frame_name,frame_size,frame_color,frame_price,shop_name,frame_pic from frametype f left join photoshop p on p.shop_id=f.shop_id where frame_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form action="frame.php">
						<table>
							<tr>	
								<td>ชื่อกรอบ  </td> <td><span>: <?php echo $result['frame_name']?></span></td>
							</tr>
							<tr>	
								<td>สีกรอบ </td> <td><span>: <?php echo $result['frame_color']?></span></td>
							</tr>
							<tr>
								<td>ขนาดกรอบ  </td> <td><span>: <?php echo $result['frame_size']?></span></td>
							</tr>
							<tr>
								<td>ราคากรอบ  </td> <td><span>: <?php echo $result['frame_price']?></span></td>
							</tr>
							<tr>
								<td>ของร้าน  </td> <td><span>: <?php echo $result['shop_name']?></span></td>
							</tr>
							<tr>
								<td></td><td><?php echo '<img src="data:image/png;base64,'.base64_encode($result['frame_pic']).'" alt="photo" style="width:35%">';?><td/>
							</tr>
							<tr>
								<td><input type="submit" value="ย้อนกลับ"></td>
							</tr>
						</table>
					</form>
				<?php
					mysql_close();
				?>
				</div>
		</div>
	</div>
</body>

</html>