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
	
	<Table width = "55%" bgcolor = "white" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<TABLE style = "padding-top:40px; padding-left:60px; padding-bottom:20px" cellspacing="0" cellpadding="0">
			
			</TR>
		</TABLE>
		</TD>
	</TR>
	<TR>
		<TD align = "center">
			<table height="270px" align = "center" cellspacing = "0px" cellpadding = "10px" width = "550">
			<br>
			<br>
			 <b><center><font size="7">วิธีการสั่งซื้อกรอบรูป</font></center></b>
			 <br>
			 <br>
				<TR>
					<TD>
						<h3>step : 1 คลิกเลือก Catalog ที่เมนูด้านบน หลังจากนั้นทำการเลือกรอบรูปที่ต้องการแล้วกดสั่งซื้อ</h3>
						<br>
						</TD>
				
				</TR>
				<TR>
					<TD>
						<h3>step : 2 หากยังไม่ทำการ login เข้าสู่ระบบ ระบบจะให้ทำการ login อัตโนมัติ
						<br>
						</TD>
				</TR>
				<TR>
					<TD>
						<h3>step : 3 ทำการตรวจเช็คข้อมูลราคา กรอบรูป ขนาด ว่าถูกต้องหรือไม่ โดยจะมีวิธีการส่งสินค้า 2 แบบ แบบ EMS และ ธรรมดา โดย แบบ EMS จะเพิ่มเงิน 50 บาท และแบบธรรมดาจะเพิ่มเงิน 30 ตามลำดับ เสร็จแล้วทำการกดยืนยัน
						<br>
					</TD>
				</TR>
				<TR>
					<TD>
						<h3>step : 4 ถ้าหากเคยทำการสั่งซื้อกรอบรูปนี้มาแล้ว และยังอยู่ในขั้นตอนการดำเนินงาน จะไม่สามารถสั่งซื้อกรอบรูปเดิมซ้ำได้</h3>
						<center>
						<br>
						</center>
					</TD>
				</TR>
				<TR>
					<TD>
						<h3>step : 5 ถ้าหากไม่เคยสั่งซื้อมาก่อน จะมีข้อความขึ้นมาบอกว่า การสั่งซื้อสำเร็จ กำลังส่ง Email ไปยังร้านทำกรอบรูปเพื่อรอร้านทำการรูปยืนยันต่อไป</h3>
						<center>
						<br>
						
						</center>
					</TD>
				</TR>
				<TR>
					<TD>
						<h3>*สามารถเข้าไปเช็คสถานะของกรอบรูปได้โดย เข้าที่เมนูทางขวาบนของหน้าจอ (สถานะการสั่งซื้อ) จะมีรายละเอียดใบเสร็จและสถานะของการสั่งทำแสดงไว้*</h3>
						<center>
						<br>
						
						</center>
					</TD>
				</TR>
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