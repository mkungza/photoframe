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
<script>
</script>
<html>
<head>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>

	<meta charset="UTF-8">
	<title>Istylebyme</title>
	<script language = "javascript">
	
		function checkLogin1(){
		<?php if(!isset($_SESSION['username'])) {?>
			window.location = "login.php";
			alert("Please login");
		<?php } 
		
				else { ?>
			window.location ="photobuy.php";
		
		<?php } ?>
		}
	</script>
</head>


	<?php include("header.php"); ?>
	
<Table Table width = "45%"  bgcolor = "#FFFFFF" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			<TR><TD width="155px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="4px" color="#777777"><b>แก้ไขข้อมูลส่วนตัว</b></font></TD>
				<TD width="10px" style="background-color:white;"></TD>
				<TD width="400px" style="background-color:white;"></TD>
			</TR>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
	<TD>
	<form method="post" action="save_profile.php" name = "form1" enctype="multipart/form-data"><br>
								<table align = "center" border="0" style=" width: 500px" cellpadding = "10px">
									<tr>
										<td style="width:150px">
											รหัสผ่าน : 
										</td>
										<td>
											
												<input name="txtOldPassword" type="password" id="txtOldPassword" size="20">
												**
											
										</td>
									</tr>
									<tr>
										<td>
											ชื่อ :
										</td>
										<td>
											<input name="txtName" type="text" id="txtName" size="20" value=" <?php echo $name?> ">
										</td>
									</tr>
									<tr>
										<td>
											นามสกุล :
										</td>
										<td>
											<input name="txtLastname" type="text" id="txtLastname" size="20" value=" <?php echo $lastname?> ">
										</td>
									</tr>
									<tr>
										<td>
											Tel :
										</td>
										<td>
											<input name="txtTel" type="tel" id="txtTel" size="10" maxlength="10" value="<?php echo $tel?>">
										</td>
									</tr>
									<tr>
										<td>
											ที่อยู่ :
										</td>
										<td>
											<textarea name="txtAddress" cols="30" rows="4" style = "resize:none"><?php echo $address?></textarea>
										</td>
									</tr>
									<tr>
										<td>
											E-mail :
										</td>
										<td>
											<input name="txtEmail" type="email" id="txtEmail" value="<?php echo $email ?>" >
										</td>
									</tr>
									<tr>
										<td>รูปประจำตัวผู้ใช้ :</td><td><?php echo '<img src="data:image/png;base64,'.base64_encode($profile['cus_image']).'" alt="photo" style="width:35%">';?><td/>
									</tr>
									
									<tr>	
										<td>อัพโหลดรูปผู้ใช้ใหม่ :</td> <td>  <input type="file" name="imageg"></td>
									</tr>
									
									<tr>
										<td align = "center" colspan = "2"><br>
											<input type="hidden" name="user" value="<?php $user ?>">
											<input type="reset" name="Reset" value="Reset">&nbsp&nbsp&nbsp&nbsp
											<input type="submit" name="Submit" value="Save">
										</td>
									</tr>
								</table><br>
							</form>
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