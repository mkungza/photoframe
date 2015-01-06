<?php

session_start();
include("connection.php");
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Istylebyme</title>
	
</head>
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

	<?php include("header.php"); ?>
	
	
<Table Table width = "40%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" >
		<TR><b><TD><!--<img src = "images/readnews.png">-->Newpapers</TD></TR></b>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
		<TD>
			<table height="265px" align = "center" cellspacing = "0px" cellpadding = "10px" width = "960">
				<TR>
					<TD>
					<hr color="black" size="2px" width="100%">
				
						<table align="center" width="100%">
					<?php
						
								$sql = "SELECT * from photoshop";
								$result = mysql_query($sql);
								while($show = mysql_fetch_array($result)){
							?>
								<form method="POST" action="photoframe.php">
									<tr>
										<td align="center" style="padding-top:50px; padding-bottom:50px;">
										<?php echo '<input type="image" width="300px" height="200px"src="data:image/jpeg;base64,'.base64_encode( $show['shop_logo'] ).'"/>'; ?>
										</td>
										<td style="padding-bottom:50px;">
										<?php echo '<b>ชื่อร้าน</b> : '.$show['shop_name'].'<br>
													<b>เบอร์โทร : </b>'.$show['shop_tel'].'<br>
													<b>ที่อยู่ : </b>'.$show['shop_address'].'<br>
													<b>email : </b>'.$show['shop_email'];?>
										
										</td>
									</tr>
									<tr>
										<td colspan="2" style="padding-bottom:50px;">
											<hr color="black" size="2px" width="100%">
										</td>
									</tr>
									<input type="hidden" name="psid" id="psid" value="<?php echo $show['shop_id']?>">
									<input type="hidden" name="psname" id="psname" value="<?php echo $show['shop_name']?>">
								</form>
								<?php
								}
								?>
						</table>
					</TD>
				</TR>
			</Table>
		</TD>
	</TR>
</TABLE>
	</BR>
	
	<?php include("footer.php"); ?>
	
</body>
</html>

<?php 
mysql_close($connect);
?>