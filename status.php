<?php
include("connection.php");
session_start();
?>
<html>
<head>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>

	<meta charset="UTF-8">
	

</head>

	<?php include("header.php"); ?>
	
<Table Table width = "40%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >

	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			<TR><TD width="140px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="4px" color="black"><b>สถานะการสั่งซื้อ</b></font></TD>
				<TD width="10px" style="background-color:white;"></TD>
				<TD width="350px" style="background-color:white;"></TD>
			</TR>
		</TABLE>
		</TD>
	</TR>
	<TR> 
		<TD>
			<table  align = "center" cellspacing = "0px" cellpadding = "10px" width = "500px">
					
					<?php
						$userid = $_SESSION['userid'];
						$sql = "SELECT * from transaction where cus_id = '$userid'";
						$result = mysql_query($sql);
						while($show = mysql_fetch_array($result)){
						
					?>
						<TR>
							<TD>
							เลขที่ใบเสร็จ :  <?php echo $show['tran_id']; ?>
							</TD>
						</TR>
						<TR>
							<TD style="padding-bottom:50px;">
							สถานะ : <?php echo $show['tran_status']; ?>
							</TD>
						</TR>
					
					<?php }
						
					?>
					
				
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