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
					<h1>เพิ่มข่าวสาร</h1>
					<form method="POST" action="addnewsscript.php" enctype="multipart/form-data">
						<table>
							<tr>	
							<td>หัวข้อข่าว : </td> <td><input type="text" name="nameNews" size="50"></td>
							</tr>
							<tr><td>วันที่ :</td>
								<td><input type="text" id="datepicker" name="date">
								</td>
							</tr>
							<tr>
							<td>เนื้อหาข่าว : </td> <td><textarea style="resize:none;" rows="10" cols="50" name="contentNews" ></textarea></td><br>
							</tr>
							<tr>	
								<td>อัพโหลดรูป </td> <td> : <input type="file" name="image"></td>
							</tr>
							<tr>
								<td><span></span></td> <td><input type="submit" value="ยืนยัน"><input type="reset" value="ยกเลิก" onclick="window.location='news.php'"></td>
							</tr>
						</table>
					</form>
				</div>
		</div>
	</div>
</body>

</html>