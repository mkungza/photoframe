<?php include("../config/condb.php");

$name 		= $_POST["name"];
$lastname 		= $_POST["lastname"];
$email 		= $_POST["email"];
$address	= $_POST["address"];
$tel 		= $_POST["tel"];
$username 	= $_POST["username"];
$password	= $_POST["password"];
$id 		= $_REQUEST["edit_id"];

$image = addslashes(file_get_contents($_FILES['imageg']['tmp_name'])); 
$image_name = addslashes($_FILES['imageg']['name']);
$size = $_FILES["imageg"]["size"];
$userfile_extn = $_FILES["imageg"]["type"]; 

if($image==null)
{
	$sql = "update customer set cus_name ='$name',cus_lastname='$lastname',cus_email='$email',cus_address='$address',cus_tel='$tel',cus_username='$username',cus_password='$password' where cus_id='$id'";
}
else{
	$sql = "update customer set cus_name ='$name',cus_lastname='$lastname',cus_email='$email',cus_address='$address',cus_tel='$tel',cus_username='$username',cus_password='$password',cus_image='{$image}',cus_imagename='{$image_name}' where cus_id='$id'";
}

$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
	echo mysql_error();
}
else{
	echo "Edited ";
	echo '<Meta http-equiv="refresh"content="1;URL=customer.php">';
}
mysql_close();
?>