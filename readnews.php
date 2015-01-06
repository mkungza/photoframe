<?php

session_start();
include("connection.php");
$newsid = $_REQUEST['newsid'];
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
	
<Table Table width = "55%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			<TR><TD width="50px;" style="background-color:white;"><!--<img src = "images/readnews.png">--> <font size="5px" color="white"><b>ข่าว</b></font></TD>
				<TD width="10px" style="background-color:white;"></TD>
				<TD width="600px" style="background-color:white;"></TD>
			</TR>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
		<TD>
			<table height="265px" align = "center" cellspacing = "0px" cellpadding = "10px" width = "550">
				<TR>
					<TD>
					
				
						<table align="center" width="100%">
						<?php
						
								$sql = "SELECT * from news where news_id = '$newsid'";
								$result = mysql_query($sql);
								if($show = mysql_fetch_array($result)){
							?>
									<tr>
										<td align="center">
										<?php echo '<b> <h2>'.$show['news_header'].'</h2></b>'?>
										<td>
									</tr>
									<tr>
										<td align="center" style="padding-top:20px; padding-bottom:50px;">
										<?php echo '<img width="300px" height="200px"src="data:image/jpeg;base64,'.base64_encode( $show['news_pic'] ).'"/>'; ?>
										</td>
									</tr>
									<tr>
										<td align="center">
											<h3>เนื้อหาข่าว</h3>
										</td>
									</tr>
									<tr>
										<td align="center" style="padding-bottom:50px;">
										<?php echo $show['news_content'];?>
										</td>
									</tr>

								
									
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