<?php

session_start();
include("connection.php");
?>

<html>
<head>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>
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
	<title>Istylebyme</title>
	
</head>


	<?php include("header.php"); ?>
	
<Table Table width = "55%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
		<TR><TD width="45px;" style="background-color:Black;"><!--<img src = "images/newsall.png">--> <font size="5px" color="white"><b>Newpaper</b></font></TD>
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
					<hr color="black" size="2px" width="100%">
				
						<table align="center" width="100%">
						<?php
						
								$sql = "SELECT * from news";
								$result = mysql_query($sql);
								while($show = mysql_fetch_array($result)){
							?>		
								<form name="news" id="news" action="readnews.php" method="POST">
									<tr>
										<td align="center" style="padding-top:50px; padding-bottom:50px;">
										<?php echo '<input type="image" width="300px" height="200px"src="data:image/jpeg;base64,'.base64_encode( $show['news_pic'] ).'"/>'; ?>
										</td>
										<td style="padding-bottom:50px;">
										<?php echo '<b>ชื่อข่าว :</b> : '.$show['news_header'].'<br>
													<b>เนื้อหา : </b>'.$show['news_content'].'<br>
													<b>วันที่: </b>'.$show['news_date'];
										?>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="padding-bottom:50px;">
											<hr color="black" size="2px" width="100%">
										</td>
									</tr>
									<input type="hidden" id="newsid" name="newsid" value="<?php echo $show['news_id'];?>">
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