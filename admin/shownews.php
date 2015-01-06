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
					<h1>ข่าวสาร</h1>
				<?php 
							$id = $_REQUEST['show_id'];
							$sql = "select * from news where news_id = '$id'";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
							$result = mysql_fetch_array($qry);
							$i=0;
				?>
					<form action="news.php">
						<table>
							<tr>	
							<td>หัวข้อข่าว </td> <td><span>: <?=$result['news_header']?></span></td>
							</tr>
							<tr>	
							<td>วันที่</td> <td><span>: <?=$result['news_date']?></span></td>
							</tr>
							<tr>
							<td>เนื้อหาข่าว</td> <td><span>: <?=$result['news_content']?></span></td><br>
							</tr>
							<tr>
								<td></td><td><?php echo '<img src="data:image/png;base64,'.base64_encode($result['news_pic']).'" alt="photo" style="width:35%">';?><td/>
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