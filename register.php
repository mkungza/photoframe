<?php

session_start();

?>

<HTML>
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
	
	function check_register()
	{
		//var accept = document.form1.accept.options[document.form1.accept.selectedIndex].value;
		$(".hilight").removeClass("hilight");
		$isValid = 1;
		$isFalse = 1;
		if(($("#username").val()).trim() == "") //if(forms.textfile1.value == ""
		{
			$("#username").addClass("hilight");
			$isValid = 0;
		}
		if((document.getElementById("password").value).trim() == "") 
		{
			$("#password").addClass("hilight");
			$isValid = 0;
		}
		if((document.getElementById("conpassword").value).trim() == "") 
		{
			$("#conpassword").addClass("hilight");
			$isValid = 0;
		}
		if($("#conpassword").val() != $("#password").val()) 
		{
			$("#conpassword").addClass("hilight");
			$isFalse = -1;
		}
		
		function validateEmail(email) 
		{ 
			var re = /\S+@\S+\.\S+/;
			return re.test(email);
		}
		if($("#txtEmail").val()) 
		{
			if(!validateEmail($("#txtEmail").val())) 
			{
				$("#txtEmail").addClass("hilight");
				$isValid = -1;
			}
		}
		
		if($isValid == 0) 
		{
			alert("Please input ** information ");
			return;
		}
		else if($isValid == -1) 
		{
			alert("Check valid email address");
			return;
		}
		else if($isFalse == -1)
		{
			alert("Password is not match!");
			return;
		}
		/*if($('#accept:checked').val() != "accept") 
		{
			alert("Please check accept for register");
			return;
		}*/
		
		document.form1.submit();
	}
	
	
	function numbersOnly(evt)
	{
		var k; 
		if (window.event) k = window.event.keyCode; // IE 
		else if (evt) k = evt.which; // Firefox 
		
		if (k>=48 && k<=57) 
		{ 
			return true; 
		}
		else
		{
			if(k == 8 || k == 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	
	function click()
		{
			//$("#more").toggle();
			$("#rule").slideToggle();
		}
		
	$(window).ready(function() 
	{ 
		$("#rule").hide();
	});
</script>
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
	
	<Table Table width = "55%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD><TABLE style = "padding-top:40px; padding-center:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			<center><TR><TD width="140px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="5px" color="#777777"><b>สมัครสมาชิก</center></b></font></TD>
				<TD width="10px" style="background-color:white;"></TD>
				<TD width="550px" style="background-color:white;"></TD>
			</TR>
		</TABLE></TD>
	</TR>
	<TR> 
		<TD>
			<form name = "form1" method="post" action="save_register.php" enctype="multipart/form-data"><br>
								<table align = "center" style=" width: 400px" cellpadding = "0px">
									<tr>
										<td>
											ชื่อผู้ใช้ : </br></br>
										</td>
										<td>	
												<input name="username" type="text" id="username" size="20">
												** </br></br>
										</td>
									</tr>
									<tr>
										<td>
											รหัสผ่าน : </br></br>
										</td>
										<td>
											
												<input name="password" type="password" id="password">
												**</br></br>
											
										</td>
									</tr>
									<tr>
										<td>
											ยืนยันรหัสผ่าน : </br></br>
										</td>
										<td>
											
												<input name="conpassword" type="password" id="conpassword">
												** </br></br>
											
										</td>
									</tr>
									<tr>
										<td>
											ชื่อ : </br></br>
										</td>
										<td>
											<input name="txtName" type="text" id="txtName" size="20"> </br></br>
										</td>
									</tr>
									<tr>        
										<td>
											นามสกุล : </br></br>
										</td>
										<td>
											<input name="txtLastname" type="text" id="txtLastname" size="20"> </br></br>
										</td>
									</tr>
									<tr>
										<td>
											Tel : </br></br>
										</td>
										<td>
											<input name="txtTel" type="tel" id="txtTel" size="10" maxlength="10" onkeypress="return numbersOnly(event);"> </br></br>
										</td>
									</tr>
									<tr>
										<td>
											ที่อยู่ : </br></br>
										</td>
										<td>
											<textarea name="txtAddress" cols="30" rows="4" style = "resize:none"></textarea> </br></br>
										</td>
									</tr>
									<tr>
										<td>
											E-mail : </br></br>
										</td>
										<td>
											<input name="txtEmail" type="email" id="txtEmail"> </br></br>
										</td>
									</tr>
									<tr>
										<td>
											รูปประจำตัวผู้ใช้ : </br></br>
										</td>
										<td>
											<input type="file" name="image"> </br></br>
										</td>
									</tr>
									<tr>
										<td align = "center" colspan = "2"><br>
											<input type="reset" name="Reset" value="เริ่มใหม่">&nbsp&nbsp&nbsp&nbsp
											<input type="button" name="Submit" value="สมัครสมาชิก"  onclick = "check_register();">
										</td>
									</tr>
								</table><br>
			</form>
		</TD>
	</TR>
	</Table>
	
	</BR>
	
	<?php include("footer.php"); ?>
	
</BODY>
</HTML>