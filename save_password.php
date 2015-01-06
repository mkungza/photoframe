<?php
	session_start();
	include("connection.php");
	$user = $_SESSION['username'];
	$checkPassSQL = "SELECT * FROM customer WHERE cus_username = '$user' ";
	$checkPass = mysql_query($checkPassSQL);	
	$check = mysql_fetch_array($checkPass);
	$password = $check['cus_password'];
	
	if($_POST['txtOldPassword'] != $password || trim($_POST['txtOldPassword']) == "")
	{
	?>
		<script language = "JavaScript">
		alert("Please input Old Password again!");
		history.back();
		</script>
	<?php
	}
	else if($_POST['txtNewPassword'] != $_POST['txtConNewPassword'] || trim($_POST['txtNewPassword']) == "")
	{
	?>
		<script language = "JavaScript">
		alert("New Password not match");
		history.back();
		</script>
	<?php
	}
	else
	{
		$newPassword = $_POST['txtNewPassword'];
		$updateSQL = "UPDATE customer SET cus_password = '$newPassword' WHERE cus_username = '$user'";	
		mysql_query($updateSQL);
	?>
		<script language = "JavaScript">
		alert("Edit Completely");
		window.location = "index.php";
		</script>
	<?php
	}
	mysql_close();
?>