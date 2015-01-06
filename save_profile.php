<?php
	
	include("connection.php");
	session_start();
	$user = $_SESSION['username'];
	$checkPassSQL = "SELECT * FROM customer WHERE cus_username = '$user' ";
	$checkPass = mysql_query($checkPassSQL);	
	$check = mysql_fetch_array($checkPass);
	$password = $check["cus_password"];
	$txtName = $_REQUEST['txtName'];
	$txtLastname = $_REQUEST['txtLastname'];
	$txtTel = $_REQUEST['txtTel'];
	$txtAddress = $_REQUEST['txtAddress'];
	$txtEmail = $_REQUEST['txtEmail'];
	
	$image = addslashes(file_get_contents($_FILES['imageg']['tmp_name'])); 
	$image_name = addslashes($_FILES['imageg']['name']);
	$size = $_FILES["imageg"]["size"];
	$userfile_extn = $_FILES["imageg"]["type"]; 
	
	
	if($_REQUEST['txtOldPassword'] != $password || trim($_REQUEST['txtOldPassword']) == "")
	{
	?>
		<script language = "JavaScript">
		alert("Please input Old Password again!");
		history.back();
		</script>
	<?php
	}
	else{
		if($image==null)
		{
			$updateSQL = "UPDATE customer SET cus_name = '$txtName', cus_lastname = '$txtLastname', 
								cus_tel = '$txtTel', cus_address = '$txtAddress', cus_email = '$txtEmail'
								WHERE cus_username = '$user'";
		}
		else
		{
			$updateSQL = "UPDATE customer SET cus_name = '$txtName', cus_lastname = '$txtLastname', 
								cus_tel = '$txtTel', cus_address = '$txtAddress', cus_email = '$txtEmail',cus_image='{$image}',cus_imagename='{$image_name}'
								WHERE cus_username = '$user'";
		}
		mysql_query($updateSQL);
		echo mysql_error();
		?>
			<script language = "JavaScript">
			alert("Edit Completely");
			window.location = "index.php";
			</script>
		<?php
	}
	mysql_close();
?>