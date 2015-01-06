<?php
	session_start();
	include("connection.php");
	$user = $_SESSION['username'];
	$sql = "SELECT * FROM customer WHERE cus_username = '$user'";
	$result = mysql_query($sql);
	$profile = mysql_fetch_array($result);
	$name = $profile['cus_name'];
	$lastname = $profile['cus_lastname'];
	$tel = $profile['cus_tel'];
	$address = $profile['cus_address'];
	$email = $profile['cus_email'];
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Istylebyme</title>
	<script language = "javascript">
	
		function checkLogin1(){
		<?php if(!isset($_SESSION['username'])) {?>
			window.location = "login.php";
			alert("Please login");
		<?php } 
		
				else { ?>
			window.location ="edit_password.php";
		
		<?php } ?>
		}
	</script>
</head>
<body bgcolor = "black">

	<?php include("header.php"); ?>
	
<Table Table width = "45%"  bgcolor = "#FFFFFF" align = "center" cellspacing = "0px" cellpadding = "0px" >
		<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			<TR><TD width="125px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="4px" color="white"><b>เปลี่ยนรหัสผ่าน</b></font></TD>
				<TD width="10px" style="background-color:white;"></TD>
				<TD width="440px" style="background-color:white;"></TD>
			</TR>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
	<TD>
	<form method="post" action="save_password.php"><br>
								<table align = "center" border="0" style=" width: 400px" cellpadding ="10px">
									<tr>
										<td>
											รหัสผ่านเก่า :
										</td>
										<td>
											<div class="req">
												<input name="txtOldPassword" type="password" id="txtOldPassword" size="20">
												**
											
										</td>
									</tr>
									<tr>
										<td>
											 รหัสผ่านใหม่ :
										</td>
										<td>
											<input name="txtNewPassword" type="password" id="txtNewPassword">
										</td>
									</tr>
									<tr>
										<td>
											ยืนยันรหัสผ่านใหม่ :
										</td>
										<td>
											<input name="txtConNewPassword" type="password" id="txtConNewPassword">
										</td>
									</tr>
										<td align = "center" colspan = "2"><br>
											<input type="hidden" name="user" value="<?=$user?>">
											<input type="reset" name="Reset" value="Reset">&nbsp&nbsp&nbsp&nbsp
											<input type="submit" name="Submit" value="Save">
										</td>
									</tr>
								</table><br>
	</TD>
	</TR>
	</Table>
	
	</BR>
	
	<?php include("footer.php"); ?>
	
</body>
</html>


<?php
	mysql_close($connect);
?>