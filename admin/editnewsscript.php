<?php include("../config/condb.php");

$nameNews 		= $_POST["nameNews"];
$date 			= $_POST["date"];
$contentNews 	= $_POST["contentNews"];
$id 			= $_POST["edit_id"];
$my_date = date('Y-m-d', strtotime($date));

$image = addslashes(file_get_contents($_FILES['imageg']['tmp_name'])); 
$image_name = addslashes($_FILES['imageg']['name']);
$size = $_FILES["imageg"]["size"];
$userfile_extn = $_FILES["imageg"]["type"]; 


if($image==null)
{
	$sql = "update news set news_header='$nameNews',news_content='$contentNews',news_date='$my_date' where news_id='$id'";
}
else{
	if($userfile_extn !="image/png"||$size>4096000){
		echo "PLEASE UPLOAD png IMAGE AND NOT BIGGER THAN 4 MB";
	}
	else{
		$sql = "update news set news_header='$nameNews',news_content='$contentNews',news_date='$my_date',news_pic='{$image}',news_namepic='{$image_name}' where news_id='$id'";
	}
}

$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
	echo mysql_error();
}
else{
	echo "Edited ";
	echo '<Meta http-equiv="refresh"content="1;URL=news.php">';
}
mysql_close();
?>