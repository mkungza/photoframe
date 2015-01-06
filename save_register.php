<?php include("connection.php");


	$cus_username = $_REQUEST["username"];
	$cus_password = $_REQUEST["password"];
	$cus_name = $_REQUEST["txtName"];
	$cus_lastname = $_REQUEST["txtLastname"];
	$cus_tel = $_REQUEST["txtTel"];
	$cus_address = $_REQUEST["txtAddress"];
	$cus_email = $_REQUEST["txtEmail"];
	
	
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
	$image_name = addslashes($_FILES['image']['name']);
	$size = $_FILES["image"]["size"];
	$userfile_extn = $_FILES["image"]["type"]; 
	
	$strSQL = "SELECT * FROM customer WHERE cus_username = '".trim($cus_username)."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
	?>
		<script language = "javascript">
			alert("username is used");
		</script>
	<?php
	}
	else
	{	
		$strSQL = "INSERT INTO customer (cus_username,cus_password,cus_name,cus_lastname,cus_tel,cus_address,cus_email,cus_image,cus_imagename) 
					VALUES ('$cus_username','$cus_password','$cus_name','$cus_lastname','$cus_tel','$cus_address','$cus_email','{$image}','{$image_name}')";
		$objQuery = mysql_query($strSQL);
		
		echo mysql_error();
		mysql_close();
		
	?>
		<script language = "javascript">
			alert("Register is Complete");
			window.location = "index.php";
		</script>
	<?php	
	}
?>