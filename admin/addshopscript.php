<?php include("../config/condb.php");

$name 		= $_POST["name"];
$email 		= $_POST["email"];
$address	= $_POST["address"];
$tel 		= $_POST["tel"];
$id 		= $_REQUEST["edit_id"];

$sql = "insert into photoshop(shop_name,shop_email,shop_address,shop_tel) values('$name','$email','$address','$tel')";

$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
	echo mysql_error();
}
else{
	echo "Add Complete ";
	echo '<Meta http-equiv="refresh"content="1;URL=shop.php">';
}
mysql_close();
?>