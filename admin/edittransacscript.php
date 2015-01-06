<?php include("../config/condb.php");

$status 		= $_POST["status"];
$id 			= $_POST["edit_id"];

$sql = "update transaction set tran_status = '$status' where tran_id = '$id'";
$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
}
else{
	echo "Edited";
	echo '<Meta http-equiv="refresh" content="1;URL=transac.php">';
}
mysql_close();
?>