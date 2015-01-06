<?php
session_start();
include("../config/condb.php");
if($_SESSION["id"]!="admin")
{
	echo '<script language="javascript">';
	echo 'alert("Access Denied")'; 
	echo '</script>';
	?>
	<script language = "javascript">
		window.location.href = "login.html";
	</script>
	<?php
}?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
	<div class="overall">
		<!--Banner-->
		<div class="banner"></div>
		
		<!--Menu-->
		<?php include("menu.php")?>
		
		<!--contain-->
		<div class="container">
			<!--QUERY DATA-->
			<div style="center;margin-top:15px;margin-left:25px">
				<h1>คำนวณค่าใช้จ่ายของผู้ใช้</h1>
					<?php  
							$sql = "SELECT tran_id, 
							tran_status, 
							c.cus_name AS cus_name,
							c.cus_address as cus_address ,
							c.cus_tel as cus_tel ,
							sum(f.frame_price) as total
							FROM transaction AS t
							LEFT JOIN customer AS c ON c.cus_id = t.cus_id
							LEFT JOIN photoshop AS p ON p.shop_id = t.shop_id
							LEFT JOIN frametype AS f ON f.frame_id = t.frame_id
							";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
	
							$Per_Page = 20;   // Per Page
							$Page = isset($_GET['Page']);
							if(!isset($_GET['Page']))
							{
							$Page=1;
							}
							$Prev_Page = $Page-1;
							$Next_Page = $Page+1;
							$Page_Start = (($Per_Page*$Page)-$Per_Page);
							if($num_rows<=$Per_Page)
							{
							$Num_Pages =1;
							}
							else if(($num_rows % $Per_Page)==0)
							{
							$Num_Pages =($num_rows/$Per_Page) ;
							}
							else
							{
							$Num_Pages =($num_rows/$Per_Page)+1;
							$Num_Pages = (int)$Num_Pages;
							}
							$strSort = isset($_GET['sort']) ? $_GET['sort'] : '';
							if($strSort == "")
							{
							$strSort = "tran_id";
							}
							$strOrder = isset($_GET['order']) ? $_GET['order'] : '';
							if($strOrder == "")
							{
							$strOrder = "DESC";
							}
							$sql .=" order  by ".$strSort." ".$strOrder." LIMIT $Page_Start , $Per_Page";
							$qry  = mysql_query($sql);
							$strNewOrder = $strOrder == 'ASC' ? 'DESC' : 'ASC';
					?>
					<?php  if($num_rows==0)
					{ 	
						echo "<span style=\"margin-left:5%\">ไม่มีข้อมูล</span>";
						echo "<br>";
					}
					else{
					?>
					<table border="1" style="width:100%">
						<tr style="background-color:lightblue;height:45px;">
							<th style="width:5%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_id&order=<?php echo $strNewOrder?>">เลขที่</a></th>
							<th style="width:20%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=cus_name&order=<?php echo $strNewOrder?>">ชื่อผู้ทำรายการ</a></th>
							<th style="width:30%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=cus_address&order=<?php echo $strNewOrder?>">ที่อยู่ผู้ทำรายการ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=cus_tel&order=<?php echo $strNewOrder?>">เบอร์โทรศัพท์</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_status&order=<?php echo $strNewOrder?>">สถานะ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=total&order=<?php echo $strNewOrder?>">ค่าใช้จ่ายที่ต้องชำระ</a></th>
							
						</tr>
						
						
						<?php 
							$c = 0;
								while($result = mysql_fetch_array($qry))
								{
									if($c%2==0)
									{
									?>
									<tr style="background-color:white;height:30px;">
									<td style="text-align:center"><?php echo $result['tran_id']?></td>
									<td style="text-align:center"><?php echo $result['cus_name']?></td>
									<td style="text-align:center"><?php echo $result['cus_address']?></td>
									<td style="text-align:center"><?php echo $result['cus_tel']?></td>
									<td style="text-align:center"><?php echo $result['tran_status']?></td>
									<td style="text-align:center"><?php echo $result['total']?></td>
									
									</tr>
									<?php 
									}
									else
									{
									?>
									<tr style="background-color:lightblue;height:30px;">
									<td style="text-align:center"><?php echo $result['tran_id']?></td>
									<td style="text-align:center"><?php echo $result['cus_name']?></td>
									<td style="text-align:center"><?php echo $result['cus_address']?></td>
									<td style="text-align:center"><?php echo $result['cus_tel']?></td>
									<td style="text-align:center"><?php echo $result['tran_status']?></td>
									<td style="text-align:center"><?php echo $result['total']?></td>
									
									</tr>
									<?php 
									}
									$c++;
								}
							
						?>
					</table>
				<br>					
				Total <?php echo $num_rows;?> Record : <?php echo $Num_Pages;?> Page :
				<?php 
				if($Prev_Page)
				{
				echo " <a href='$_SERVER[PHP_SELF]?Page=$Prev_Page&sort=$strSort'><< Back</a> ";
				}
				for($i=1; $i<=$Num_Pages; $i++){
				if($i != $Page)
				{
				echo "[ <a href='$_SERVER[PHP_SELF]?Page=$i&sort=$strSort'>$i</a> ]";
				}
				else
				{
					echo "<b> $i </b>";
				}
				if($Page!=$Num_Pages)
				{
				echo " <a href ='$_SERVER[PHP_SELF]?Page=$Next_Page&sort=$strSort'>Next>></a> ";
				}
				}
				}
				mysql_close();
				?>
			</div>
		</div>
	</div>
</body>
</html>