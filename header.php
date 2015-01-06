	
	
	</Table>
	<Table align = "center" width = "100%" cellpadding = "5px">
		<html>
<body bgcolor="#000000">
		<TD><center><a href="index.php"style="text-decoration:none; color:white"><h2>HOME</h2></a></center><TD>
		<TD><center><a href = "catalog.php" style="text-decoration:none; color:white"><h2 style="margin-top:20px;">CATALOG</h2></a></center></TD>
		<TD><center><a href = 'newsall.php' style="text-decoration:none; color:white"><h2 style="margin-top:20px;">NEWPAPER</h2></a></center></TD>
		<TD><center><a href = 'howto.php' style="text-decoration:none; color:white"><h2 style="margin-top:20px;">HOW TO ORDER</h2></a></center></TD>
		<TD><center><a href = 'howtopay.php' style="text-decoration:none; color:white"><h2 style="margin-top:20px;">HOW TO PAY</h2></a></center></TD>
		<TD><center><a href = "aboutme.php" style="text-decoration:none; color:white"><h2 style="margin-top:20px;">ABOUT ME</h2></a></center></TD>
		<TD><center><a href = "cart.php" style="text-decoration:none; color:white"><h2 style="margin-top:20px;">MY CART</h2></a></center></TD>
		<TD><center><a href="login.php"style="text-decoration:none; color:White"><h2 style="margin-top:20px;">LOG IN</h2></a><center></TD>
		<TD><Table align = "center" width = "50px" cellpadding = "5px"></TD>
	<!--<TD style = "padding-bottom:6px"><center><a href = "aboutme.php"><img src = "images/aboutmeheader.png"></a></center></TD>-->
		<br>
		</TR>
	</Table>
	</TD>
	<TD>
	<Table  width = "100%" height = '100%' style="float:right;">
		<TR><TD align = "right"> 
		<?php
				if (isset($_SESSION['username']))
				{ 
					$user = $_SESSION['username'];
					$sql = "select * from customer where cus_username = '$user'";
					$qry = mysql_query($sql);
					$result = mysql_fetch_array($qry);
					
					 ?> 
					<table cellpadding = '0px' cellspacing = '0px'>
					<?php
					if(isset($result['cus_image'])) {
					?>
						<td><?php echo '<img src="data:image/png;base64,'.base64_encode($result['cus_image']).'" alt="photo" style="width:200px;">';?><td/>
					<?php
					} else {
					?>
						<td><?php echo '<img src="" alt="photo" style="width:200px;">';?><td/>
					<?php
					}
					?>
					<TD><a href ='edit_password.php'><img src = 'images/CP2.png'></a></TD>&nbsp&nbsp&nbsp&nbsp&nbsp
					<TD><a href="status.php"><img src = 'images/8.png' width = '140px' height = '30px'></a></h4></TD></TD>
					<br>
					<TD style = "padding-top:5px"><a href ='edit_profile.php'><img src = 'images/EL2.png'></a></TD>
					
		<TD style = "padding-bottom:10px"> <?php echo "<a href='logout.php'><img src = 'images/UL2.png' width = '30px' height = '30px'></a>&nbsp&nbsp&nbsp</h4>"; ?> &nbsp </TD>
					</Table>
					<?php
				}
				
				else
				{
				?>
				
		
			 
			 <?php
				}
				?>
		</TD>
		</TR>
	</Table>
	</TD>
	
	</TR>
	</Table>
	</BR>