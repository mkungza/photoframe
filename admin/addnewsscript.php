<?php include("../config/condb.php");

$nameNews 		= $_POST["nameNews"];
$date 			= $_POST["date"];
$contentNews 	= $_POST["contentNews"];
$my_date = date('Y-m-d', strtotime($date));

$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
$image_name = addslashes($_FILES['image']['name']);
$size = $_FILES["image"]["size"];
$userfile_extn = $_FILES["image"]["type"]; 

if($userfile_extn !="image/png"||$size>4096000)
{
	echo "PLEASE UPLOAD PNG IMAGE AND NOT BIGGER THAN 4 MB";
}
else{
$sql = "insert into news(news_header,news_date,news_content,news_pic,news_namepic) values('$nameNews','$my_date','$contentNews','{$image}', '{$image_name}')";
$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
}
else{
	echo "Add";
	echo '<Meta http-equiv="refresh"content="1;URL=news.php">';
}
}
mysql_close();
?>