<?php include("../config/condb.php");?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<head>
	<script src="script/jquery-1.11.1.min.js"></script> 
	<script src="script/jquery-ui-1.11.1/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="script/jquery-ui-1.11.1/jquery-ui.css">
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker({
		  showOn: "button",
		  buttonImage: "image/calendar.gif",
		  buttonImageOnly: true,
		  buttonText: "Select date"
		});
	  });
  </script>
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
					<h1>ร้านรูป</h1>
				<?php 
							$id = $_REQUEST['show_id'];
							$sql = "select * from photoshop where shop_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form action="shop.php">
						<table>
							<tr>	
								<td>ชื่อร้าน  </td> <td><span>: <?php echo $result['shop_name']?></span></td>
							</tr>
							<tr>	
								<td>อีเมล์ร้าน </td> <td><span>: <?php echo $result['shop_email']?></span></td>
							</tr>
							<tr>
								<td>ที่อยู่ร้าน  </td> <td><span>: <?php echo $result['shop_address']?></span></td>
							</tr>
							<tr>
								<td>เบอร์โทรศัพท์ร้าน  </td> <td><span>: <?php echo $result['shop_tel']?></span></td>
							</tr>
							<tr>
								<td>โลโก้ร้าน  </td><td><?php echo '<img src="data:image/png;base64,'.base64_encode($result['shop_logo']).'" alt="photo" style="width:35%">';?><td/>
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