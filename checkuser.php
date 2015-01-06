   <?php
session_start();
$userName = $_REQUEST["txtUsername"];
$userPass = $_REQUEST["txtPassword"];

include("connection.php");

$sql = "SELECT * FROM customer WHERE cus_username = '$userName'";

//$searchpass = "SELECT password FROM admin WHERE (admin.password = '$userPass')";

$query = mysql_query($sql) or die ("Error Query [".$sql."]");
$result = mysql_fetch_array($query);
//$resultSearchpass = mysql_query($searchpass) or die ("Error Query [".$searchpass."]");
//$resultPass = mysql_fetch_array($resultSearchpass);

$errorCode = 0;

if($userName == "" || $userPass == "")
{
?>
<script language="javascript">
	alert("Please Input Username and Password");
	window.location="login.php";
</script>
<?php
}
else if(($result["cus_username"] == $userName) && ($result["cus_password"] == $userPass))
{
	$_SESSION['username'] = $userName;
	$_SESSION['userid'] = $result['cus_id'];
?>
<script language="javascript">
	alert("Login Complete");
	window.location = "index.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
	alert("Username or Password is invalid");
	window.location="login.php";
</script>
<?php
}
	mysql_close($connect);
?>