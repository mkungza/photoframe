<?php

session_start();
include("connection.php");
$shopid = $_REQUEST['psid'];
$shopname = $_REQUEST['psname'];
?>

<html>
<head>
<style type="text/css"> 
body { 
background-image: url(http://www.dhammada.net/wp-content/uploads/2011/04/camera.jpg) ; 
background-attachment:fixed; 
background-position:center center;
background-repeat: no-repeat;
margin-top: 0px;
background-size: 100%;
} 
</style>
	<meta charset="UTF-8">
	<title>ISTYLEBYME</title>
<script language = "javascript">
		function checkLogin1(){
		<?php if(!isset($_SESSION['username'])) {?>
			window.location = "login.php";
			alert("Please login");
		<?php } 
		
				else { ?>
			window.location ="photobuy.php";
		
		<?php } ?>
		}
</script>
</head>
<body bgcolor = "white">

	<?php include("header.php"); ?>
	
<Table Table width = "55%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" >
		<TR><TD><!--<img src = "images/catalog.png">--> <h2><?php echo $shopname?></h2></TD></TR>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
		<TD style="padding-bottom:50px;">
			<table height="265px" align = "center" cellspacing = "0px" cellpadding = "10px" width = "550">
					<TR>
						<TD>
						<hr color="black" size="2px" width="100%">
						<br/><br/>
						<table align="center" width="100%">
							<?php
								$sql = "SELECT * from frametype where shop_id = '$shopid'";
								$result = mysql_query($sql);
								while($show = mysql_fetch_array($result)){
							?>
							<form id="pfform" name="pfform" method="POST" action="photobuy.php">
									<tr>
										<td align="center" style="padding-bottom:50px;">
										<?php echo '<img width="300px" height="200px"src="data:image/jpeg;base64,'.base64_encode( $show['frame_pic'] ).'"/>'; ?>
										</td>
										<td style="padding-bottom:50px;">
										<?php echo '<b>ชื่อกรอบรูป</b> : '.$show['frame_name'].'<br>
													<b>สี : </b>'.$show['frame_color'].'<br>
													<b>ขนาดกรอบรูป : </b>'.$show['frame_size'].'<br>
													<b>ราคา : </b>'.$show['frame_price'];
													
										?>
										<br><br><br>
										<input type="hidden" name="frameid" value="<?php echo $show['frame_id']?>">
										<input type="hidden" name="shopid" value="<?php echo $show['shop_id']?>">
										<input type="hidden" name="cusid" value="<?php echo $_SESSION['userid']?>">
										<input type="submit" value="สั่งทำ" style="float:right" onclick="checkLogin1(); return false;">
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<hr color="black" size="2px" width="100%">
										</td>
									</tr>
							</form>
								<?php
								}
								?>
						</table>
						</TD>
					</TR>
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