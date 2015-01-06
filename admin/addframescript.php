<?php include("../config/condb.php");

$name 		= $_POST["name"];
$color 		= $_POST["color"];
$size 		= $_POST["size"];
$price 		= $_POST["price"];
$shop 		= $_POST["shop_id"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
$image_name = addslashes($_FILES['image']['name']);
$size = $_FILES["image"]["size"];
$userfile_extn = $_FILES["image"]["type"]; 


if($userfile_extn !="image/png"||$size>4096000)
{
	echo "PLEASE UPLOAD PNG IMAGE AND NOT BIGGER THAN 4 MB";
}
else{
$sql = "insert into frametype(frame_name,frame_color,frame_size,frame_price,shop_id,frame_pic,frame_picname) values('$name','$color','$size','$price','$shop','{$image}', '{$image_name}')";
$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
}
else{
	echo "Add";
	echo '<Meta http-equiv="refresh"content="1;URL=frame.php">';
}
}
mysql_close();
?>