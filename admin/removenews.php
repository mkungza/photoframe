<?php include("../config/condb.php");

$id = $_REQUEST['remove_id'];

$sql = "delete from news where news_id='$id'";
$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
}
else{
	echo "Deleted";
	echo '<Meta http-equiv="refresh"content="1;URL=news.php">';
}
mysql_close();
?>