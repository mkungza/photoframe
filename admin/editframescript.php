<?php include("../config/condb.php");

$name 		= $_POST["name"];
$color 		= $_POST["color"];
$framesize 		= $_POST["size"];
$price 		= $_POST["price"];
$shop 		= $_POST["shop_id"];
$id 		= $_POST["edit_id"];

$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
$image_name = addslashes($_FILES['image']['name']);
$size = $_FILES["image"]["size"];
$userfile_extn = $_FILES["image"]["type"]; 


if($image==null)
{
	$sql = "update frametype set frame_name = '$name',frame_color='$color',frame_size='$framesize',frame_price='$price',shop_id='$shop' where frame_id='$id'";	
}
else{
	if($userfile_extn !="image/png"||$size>4096000){
		echo "PLEASE UPLOAD PNG IMAGE AND NOT BIGGER THAN 4 MB";
	}
	else{
		$sql = "update frametype set frame_name = '$name',frame_color='$color',frame_size='$framesize',frame_price='$price',shop_id='$shop',frame_pic='{$image}',frame_picname='{$image_name}' where frame_id='$id'";
	}
}
$result = mysql_query($sql,$con);
if(!$result){
	echo "ERROR";
}
else{
	echo "Edited";
	echo '<Meta http-equiv="refresh"content="1;URL=frame.php">';
}
mysql_close();
?>