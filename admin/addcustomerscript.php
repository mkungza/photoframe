<?php include("../config/condb.php");

$name 		= $_POST["name"];
$lastname 		= $_POST["lastname"];
$email 		= $_POST["email"];
$address	= $_POST["address"];
$tel 		= $_POST["tel"];
$username 	= $_POST["username"];
$password	= $_POST["password"];
$id 		= $_REQUEST["edit_id"];

$sql = "insert into customer(cus_name,cus_lastname,cus_email,cus_address,cus_tel,cus_username,cus_password) values('$name','$lastname','$email','$address','$tel','$username','$password')";

$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
	echo mysql_error();
}
else{
	echo "Add Complete ";
	echo '<Meta http-equiv="refresh"content="1;URL=customer.php">';
}
mysql_close();
?>