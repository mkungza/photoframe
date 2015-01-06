<?php include("../config/condb.php");

$name 		= $_POST["name"];
$email 		= $_POST["email"];
$address	= $_POST["address"];
$tel 		= $_POST["tel"];
$id 		= $_REQUEST["edit_id"];


$sql = "update photoshop set shop_name ='$name',shop_email='$email',shop_address='$address',shop_tel='$tel' where shop_id='$id'";

$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
	echo mysql_error();
}
else{
	echo "Edited ";
	echo '<Meta http-equiv="refresh"content="1;URL=shop.php">';
}
mysql_close();
?>