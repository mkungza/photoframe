<?php include("../config/condb.php");?>
<html>
<title>Admin Page</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<head>
	<script src="script/jquery-1.11.1.min.js"></script> 
	<script src="script/jquery-ui-1.11.1/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="script/jquery-ui-1.11.1/jquery-ui.css">
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
				<h1>ค่าใช้จ่าย</h1>
				<?php  
							$id = $_GET['show_id'];
							$sql = "SELECT f.id as id,
									f.transaction_detail_quantity as qty,
									f.transaction_detail_price as price,
									ft.frame_name as framename,
									ps.shop_name as shopname 
									FROM `transaction_details` f 
									left join frametype ft on ft.frame_id = f.frame_id
									left join photoshop ps on ps.shop_id = ft.shop_id
									WHERE `transaction_id`  = '$id'";
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
							$strSort = "id";
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
							<th style="width:5%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=id&order=<?php echo $strNewOrder?>">เลขที่</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=qty&order=<?php echo $strNewOrder?>">จำนวน</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=price&order=<?php echo $strNewOrder?>">ราคา</a></th>
							<th style="width:17%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=framename&order=<?php echo $strNewOrder?>">ชื่อกรอบ</a></th>
							<th style="width:17%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=shopname&order=<?php echo $strNewOrder?>">ชื่อร้าน</a></th>
						</tr>
						
						
						<?php 
							$c = 0;
								while($result = mysql_fetch_array($qry))
								{
									if($c%2==0)
									{
									?>
									<tr style="background-color:white;height:30px;">
									<td style="text-align:center"><?php echo $result['id']?></td>
									<td style="text-align:center"><?php echo $result['qty']?></td>
									<td style="text-align:center"><?php echo $result['price']?></td>
									<td style="text-align:center"><?php echo $result['framename']?></td>
									<td style="text-align:center"><?php echo $result['shopname']?></td>
									</tr>
									<?php 
									}
									else
									{
									?>
									<tr style="background-color:lightblue;height:30px;">
									<td style="text-align:center"><?php echo $result['id']?></td>
									<td style="text-align:center"><?php echo $result['qty']?></td>
									<td style="text-align:center"><?php echo $result['price']?></td>
									<td style="text-align:center"><?php echo $result['framename']?></td>
									<td style="text-align:center"><?php echo $result['shopname']?></td>
									<?php 
									}
									$c++;
								}
							
						?>
					</table>
					<br>
					<form action="transac.php">
						<input type="submit" value="ย้อนกลับ" >
					</form>
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