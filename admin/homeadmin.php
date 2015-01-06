<?php
session_start();
if($_SESSION["id"]!="admin")
{
	?>
	<script language = "javascript">
		alert("Access Denied");
		window.location.href = "login.html";
	</script>
	<?php
}
else
{
}?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="50"/>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script src="script/jquery-1.11.1.min.js" ></script>
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
			<img src="image/home.jpg" style="width:100%;height:100%;">
		</div>
	</div>
</body>

</html>

