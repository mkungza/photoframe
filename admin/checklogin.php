<?php 
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];

$_SESSION['id'] = $id;
if($id=="admin"&&$pw=="admin")
{
	?>
	<script language = "javascript"> 
		window.location.href = "homeadmin.php";
	</script>
	 <?php
}
else
{
	?>
	 <script language = "javascript">
		 alert("Wrong Username or Password"); 
		 window.location.href = "login.html";
	 </script>
	 <?php
}
?>