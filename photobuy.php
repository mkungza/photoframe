<?php

session_start();
$frameid = "";
$shopid = "";
$cusid = "";
include("connection.php");
if(isset($_REQUEST['frameid'])) {
	$frameid = $_REQUEST['frameid'];
}
if(isset($_REQUEST['shopid'])) {
	$shopid = $_REQUEST['shopid'];
}
if(isset($_REQUEST['cusid'])) {
	$cusid = $_REQUEST['cusid'];
}
?>

<html>
<head>


	<meta charset="UTF-8">
	<title>Istylebyme</title>
</head>
<body bgcolor = "#000000">
	
	<?php include("header.php"); ?>
	
<Table Table width = "40%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
		<TR><TD width="115px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="4px" color="#777777"><b>สั่งซื้อกรอบรูป</b></font></TD>
			<TD width="10px" style="background-color:none;"></TD>
			<TD width="350px" style="background-color:none;"></TD>
		</TR>
		</TABLE>
		</TD>
	</TR>
	<TR> 
		<TD>
			<table  align = "center" cellspacing = "0px" cellpadding = "10px" width = "500">
					<form name="pbuy" id="pbuy" method="post" action="transaction.php">
					<?php
						$sql = "SELECT * from frametype where frame_id = '$frameid'";
						$result = mysql_query($sql);
						if($show = mysql_fetch_array($result)){
						
					?>
					<TR>
						<TD align="center">
						<?php echo '<img width="300px" height="200px"src="data:image/jpeg;base64,'.base64_encode( $show['frame_pic'] ).'"/>'; ?>
						</TD>
					</TR>
					<TR>
						<TD>
						ชื่อกรอบรูป :  <?php echo $show['frame_name']; ?>
						</TD>
					</TR>
					<TR>
						<TD>
						ขนาดกรอบรูป : <?php echo $show['frame_size']; ?>
						</TD>
					</TR>
					<TR>
						<TD>
						ราคา :  <?php echo $show['frame_price']; ?>
						</TD>
					</TR>
					<TR>
						<TD align="center" style="padding-bottom:50px;">
							<input type="submit" value="ยืนยัน">
						</TD>
					</TR>
					<?php }
					?>
					<input type="hidden" name="frameid" id="frameid" value="<?php echo $frameid?>">
					<input type="hidden" name="shopid" id="shopid" value="<?php echo $shopid?>">
					<input type="hidden" name="cusid" id="cusid" value="<?php echo $cusid?>">
					
					</form>
				</table>
		</TD>
	

	</TR>
	</Table>
	
	</BR>
	
	<?php include("footer.php"); ?>
	
</body>
</html>

<?php 
mysql_close($connect);
?>