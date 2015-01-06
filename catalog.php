<?php

session_start();
include("connection.php");
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
    $meQty = 0;
    foreach($_SESSION['qty'] as $meItem){
        $meQty = $meQty + $meItem;
    }
}else{
    $meQty=0;
}
?>

<html>
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Istylebyme</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script language = "javascript">
$( document ).ready(function() {	
			checkLogin1();
		
});
		function checkLogin1(){
		<?php if(!isset($_SESSION['username'])) {?>
			window.location = "login.php";
			alert("Please login");
		<?php } 
		
				else { ?>
			
			$("#pbframe").submit();
		
		<?php } ?>
		}
</script>
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
</head>
<body>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>
<br>
<br>
	<?php include("header.php"); ?>
	
<Table Table width = "55%" bgcolor = "#FFFFFF" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
		<TD>
		<br>
		<br>
		
<br>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
		<TR><TD width="50px;" style="background-color:white;"><font size="5px" color="#777777"><b>Catalog</b></font></TD>
			
		</TR>
		</TABLE>
		</TD>
	</TR>
	<TR style = "height:45px"> 
		<TD style="padding-bottom:50px;">
			<table height="265px" align = "center" cellspacing = "0px" cellpadding = "10px" width = "550">
					<TR>
						<TD>
						<hr color="black" size="2px" width="100%">
						<br/><br/>
						<div class="container">
						<?php
if($action == 'exists'){
    echo "<div class=\"alert alert-warning\">เพิ่มจำนวนสินค้าแล้ว</div>";
}
if($action == 'add'){
    echo "<div class=\"alert alert-success\">เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว</div>";
}
if($action == 'order'){
	echo "<div class=\"alert alert-success\">สั่งซื้อสินค้าเรียบร้อยแล้ว</div>";
}
if($action == 'orderfail'){
	echo "<div class=\"alert alert-warning\">สั่งซื้อสินค้าไม่สำเร็จ มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง</div>";
}
?>
            <table class="table table-striped">
                <thead>
                    <tr style="background-color: #f9f9f9;">
                        <th>#</th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียด</th>
                        <th>ราคา</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
				 <?php
					$sql = "SELECT ft.*,ps.* from frametype ft,photoshop ps where ft.shop_id = ps.shop_id";
					$result = mysql_query($sql);
					while($show = mysql_fetch_array($result)){
                    
                        ?>
                        <tr style="background-color: #f9f9f9;">
                            <td><?php echo '<img width="150px" height="100px"src="data:image/jpeg;base64,'.base64_encode( $show['frame_pic'] ).'"/>'; ?></td>
                            <td><?php echo $show['frame_id']; ?></td>
                            <td><?php echo $show['frame_name']; ?></td>
                            <td><?php echo $show['frame_color'] ?></td>
                            <td><?php echo $show['frame_price'] ?></td>
                            <td>
                                <a class="btn btn-primary btn-lg" href="updatecart.php?itemId=<?php echo $show['frame_id'] ?>" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    หยิบใส่ตะกร้า</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
				</tbody>
            </table>
			</div>
					
		</TD>
	

	</TR>
	</Table>
	
	</BR>
	<center>
	<?php include("footer.php"); ?>
	</center>
	
</body>
</html>

<?php 
mysql_close($connect);
?>