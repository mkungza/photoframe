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
	<script src="script/jquery-1.11.1.min.js"></script> 
	<script src="script/jquery-ui-1.11.1/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="script/jquery-ui-1.11.1/jquery-ui.css">
	<script>
	$(function() {
		$( ".datepicker" ).datepicker({
		  showOn: "button",
		  buttonImage: "image/calendar.gif",
		  buttonImageOnly: true,
		  buttonText: "Select date"
		});
	  });
	</script>
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
				<h1>รายการการสั่งซื้อ</h1>
					<?php  
							$sql = "SELECT * from transaction";
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
					<form method="post" action="transac_getdate.php">
						เลือกวันช่วงเวลา <input type="text" class="datepicker" name="date_start"> ถึง <input type="text" class="datepicker" name="date_end">
						<input type="submit" value="ยืนยัน">
					</form>
					<table border="1" style="width:100%">
						<tr style="background-color:lightblue;height:45px;">
							<th style="width:5%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_id&order=<?php echo $strNewOrder?>">เลขที่</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_fullname&order=<?php echo $strNewOrder?>">ชื่อผู้ทำรายการ</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_address&order=<?php echo $strNewOrder?>">ที่อยู่</a></th>
							<th style="width:17%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_phone&order=<?php echo $strNewOrder?>">เบอร์โทรศัพท์</a></th>
							<th style="width:7%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_ems&order=<?php echo $strNewOrder?>">การจัดส่ง EMS</a></th>
							<th style="width:13%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_create&order=<?php echo $strNewOrder?>">วันที่ทำรายการ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=tran_status&order=<?php echo $strNewOrder?>">สถานะ</a></th>
							<th style="width:15%">การจัดการ</th>
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
									<td style="text-align:center"><?php echo $result['tran_fullname']?></td>
									<td style="text-align:center"><?php echo $result['tran_address']?></td>
									<td style="text-align:center"><?php echo $result['tran_phone']?></td>
									<td style="text-align:center"><?php echo $result['tran_ems']?></td>
									<td style="text-align:center"><?php echo $result['tran_create']?></td>
									<td style="text-align:center"><?php echo $result['tran_status']?></td>
									<td style="text-align:center"><a href="showtransac.php?show_id=<?php echo $result['tran_id']?>">ดูค่าใช้จ่าย</a> | <a href="edittransac.php?edit_id=<?php echo $result['tran_id']?>">แก้ไขสถานะ</a> | <a href="removetransac.php?remove_id=<?php echo $result['tran_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
									</tr>
									<?php 
									}
									else
									{
									?>
									<tr style="background-color:lightblue;height:30px;">
									<td style="text-align:center"><?php echo $result['tran_id']?></td>
									<td style="text-align:center"><?php echo $result['tran_fullname']?></td>
									<td style="text-align:center"><?php echo $result['tran_address']?></td>
									<td style="text-align:center"><?php echo $result['tran_phone']?></td>
									<td style="text-align:center"><?php echo $result['tran_ems']?></td>
									<td style="text-align:center"><?php echo $result['tran_create']?></td>
									<td style="text-align:center"><?php echo $result['tran_status']?></td>
									<td style="text-align:center"><a href="showtransac.php?show_id=<?php echo $result['tran_id']?>">ดูค่าใช้จ่าย</a> | <a href="edittransac.php?edit_id=<?php echo $result['tran_id']?>">แก้ไขสถานะ</a> | <a href="removetransac.php?remove_id=<?php echo $result['tran_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
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