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
				<h1>ข่าวสาร</h1>
					<?php
							$sql = "select * from news";
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
							$strSort = "news_id";
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
							echo "<input type=\"button\" value=\"เพิ่มข่าวสาร\" onclick=\"window.location='addnews.php'\" style=\"margin-left:5%\">";
						}
						else{
					?>
					<table border="1" style="width:100%">
						<tr style="background-color:lightblue;height:45px;">
							<th style="width:5%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=news_id&order=<?php echo $strNewOrder?>">เลขที่</a></th>
							<th style="width:30%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=news_header&order=<?php echo $strNewOrder?>">หัวข้อข่าว</a></th>
							<th style="width:35%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=news_content&order=<?php echo $strNewOrder?>">เนื้อหา</a></th>
							<th style="width:10%"><a href="<?php echo $_SERVER["PHP_SELF"];?>?sort=news_date&order=<?php echo $strNewOrder?>">วันที่ข่าว</a></th>
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
									<td style="text-align:center"><?php echo $result['news_id']?></td>
									<td style="text-align:center"><?php echo iconv_substr($result['news_header'],0,50, "UTF-8")."...";?></td>
									<td style="text-align:center"><?php echo iconv_substr($result['news_content'],0,50, "UTF-8")."...";?></td>
									<td style="text-align:center"><?php echo $result['news_date']?></td>
									<td style="text-align:center"><a href="shownews.php?show_id=<?php echo $result['news_id']?>">ดู</a> | <a href="editnews.php?edit_id=<?php echo $result['news_id']?>">แก้ไข </a> | <a href="removenews.php?remove_id=<?php echo $result['news_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
									</tr>
									<?php 
									}
									else
									{
									?>
									<tr style="background-color:lightblue;;height:30px;">
									<td style="text-align:center"><?php echo $result['news_id']?></td>
									<td style="text-align:center"><?php echo iconv_substr($result['news_header'],0,50, "UTF-8")."...";?></td>
									<td style="text-align:center"><?php echo iconv_substr($result['news_content'],0,50, "UTF-8")."...";?></td>
									<td style="text-align:center"><?php echo $result['news_date']?></td>
									<td style="text-align:center"><a href="shownews.php?show_id=<?php echo $result['news_id']?>">ดู</a> | <a href="editnews.php?edit_id=<?php echo $result['news_id']?>">แก้ไข </a> | <a href="removenews.php?remove_id=<?php echo $result['news_id']?>" onClick="return confirm('ต้องการลบ');">ลบ</a></td>
									</tr>
									<?php 
									}
									$c++;
								}?>
								</table>
								<input type="button" value="เพิ่มข่าวสาร" onclick="window.location='addnews.php'" style="margin-top:2%">
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