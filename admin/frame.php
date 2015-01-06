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
}
?>
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
				<h1>จัดการกรอบรูป</h1>
					<?php
							$sql = "SELECT frame_id, frame_name, frame_color, frame_size, frame_price, shop_name FROM frametype f left join photoshop p on p.shop_id = f.shop_id";
							$qry = mysql_query($sql,$con);
							$num_rows = mysql_num_rows($qry);
	
							$Per_Page = 20;   // Per Page
							$Page = isset($_GET["Page"]);
							if(!isset($_GET["Page"]))
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
							$strSort = "frame_id";
							}
							$strOrder = isset($_GET['order']) ? $_GET['order'] : '';
							if($strOrder == "")
							{
							$strOrder = "DESC";
							}
							$sql .=" order  by ".$strSort." ".$strOrder." LIMIT $Page_Start , $Per_Page";
							$qry  = mysql_query($sql);
							$strNewOrder = $strOrder == 'ASC' ? 'DESC' : 'ASC';
						if($num_rows==0){
							echo "<span style=\"margin-left:5%\">ไม่มีข้อมูล</span>";
							echo "<br>";
							echo "<input type=\"button\" value=\"เพิ่มกรอบรูป\" onclick=\"window.location='addframe.php'\" style=\"margin-left:5%\">";
						}
						else{
					?>
					<table border="1" style="width:100%">
						<tr style="background-color:lightblue;height:45px;">
							<th style="width:5%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=frame_id&order=<?php echo $strNewOrder?>">เลขที่</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=frame_name&order=<?php echo $strNewOrder?>">ชื่อกรอบ</a></th>
							<th style="width:15%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=frame_color&order=<?php echo $strNewOrder?>">สีกรอบ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=frame_size&order=<?php echo $strNewOrder?>">ขนาดกรอบ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=frame_price&order=<?php echo $strNewOrder?>">ราคากรอบ</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=shop_name&order=<?php echo $strNewOrder?>">ของร้าน</a></th>
							<th style="width:10%">การจัดการ</th>
						</tr>
						
						
						<?php 
							$c = 0;
								while($result = mysql_fetch_array($qry))
								{
									
									if($c%2==0)
									{
									?>
									<tr style="background-color:white;;height:30px;">
									<td style="text-align:center"><?php echo $result['frame_id']?></td>
									<td style="text-align:center"><?php echo $result['frame_name']?></td>
									<td style="text-align:center"><?php echo $result['frame_color']?></td>
									<td style="text-align:center"><?php echo $result['frame_size']?></td>
									<td style="text-align:center"><?php echo $result['frame_price']?></td>
									<td style="text-align:center"><?php echo $result['shop_name']?></td>
									<td style="text-align:center"><a href="showframe.php?show_id=<?php echo $result['frame_id']?>">ดู</a> | <a href="editframe.php?edit_id=<?php echo $result['frame_id']?>">แก้ไข </a> | <a href="removeframe.php?remove_id=<?php echo $result['frame_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
									</tr>
									<?php 
									}
									else
									{
									?>
									<tr style="background-color:lightblue;;height:30px;">
									<td style="text-align:center"><?php echo $result['frame_id']?></td>
									<td style="text-align:center"><?php echo $result['frame_name']?></td>
									<td style="text-align:center"><?php echo $result['frame_color']?></td>
									<td style="text-align:center"><?php echo $result['frame_size']?></td>
									<td style="text-align:center"><?php echo $result['frame_price']?></td>
									<td style="text-align:center"><?php echo $result['shop_name']?></td>
									<td style="text-align:center"><a href="showframe.php?show_id=<?php echo $result['frame_id']?>">ดู</a> | <a href="editframe.php?edit_id=<?php echo $result['frame_id']?>">แก้ไข </a> | <a href="removeframe.php?remove_id=<?php echo $result['frame_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
									</tr>
									<?php 
									}
									$c++;
								}?>
								</table>
								<input type="button" value="เพิ่มกรอบรูป" onclick="window.location='addframe.php'" style="margin-top:2%">
							<?php }?>
						
					
						
				<br>
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
				}
				if($Page!=$Num_Pages)
				{
				echo " <a href ='$_SERVER[PHP_SELF]?Page=$Next_Page&sort=$strSort'>Next>></a> ";
				}
				mysql_close();
				?>
			</div>
		</div>
	</div>
</body>

</html>