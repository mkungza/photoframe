<?php

session_start();
include("connection.php");
?>

<html>
<head>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>
<style type="text/css"> 
body { 
background-image: url(http://www.dhammada.net/wp-content/uploads/2011/04/camera.jpg) ; 
background-attachment:fixed; 
background-position:center center;
background-repeat: no-repeat;
margin-top: 0px;
background-size: 100%;
} 
</style>
	<meta charset="UTF-8">
	<title>Istylebyme</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js" ></script>
	<script language = "javascript">
	
		function checkLogin1(){
		<?php if(!isset($_SESSION['username'])) {?>
			window.location = "login.php";
			alert("Please login");
		<?php } 
		
				else { ?>
			window.location ="index.php";
		
		<?php } ?>
		}
	</script>
</head>


	<?php include("header.php"); ?>
	
	<Table width = "40%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE  style = "padding-top:40px; padding-left:40px; padding-bottom:20px" >
		<TR><TD><img src = "images/login.png"></TD></TR>
		</TABLE>
		</TD>
	</TR>
	<TR>
	<TD align = "center">
		<form action = "checkuser.php" method = "post" name = "form1">
		<table align = "center" cellspacing = "0px" cellpadding = "10px">
			<TR>
				<TD>ชื่อผู้ใช้:</TD> 
				<TD><input type="text" name="txtUsername" id="txtUsername"></TD>
			</TR>
			<TR>
				<TD>รหัสผ่าน:</TD> <TD><input type="password" name="txtPassword" id="txtPassword"></TD> 
			</TR>
			<TR>
				<TD colspan = "2" align = "right"><input type="image" src ="images/loginbtn.png" alt = "Submit"> &nbsp&nbsp </TD> 
			</TR>
			<TR>
				<TD colspan = "2"><center><a href="register.php">สมัครสมาชิก</a> | <a href="aboutme.php">เกี่ยวกับเรา</a></center></TD>
			</TR>
		</table>
		</form>
		
	</TD>
	</TR>
	
	</Table>
	
	</BR>
	
	<?php include("footer.php"); ?>
	
</body>
</html>