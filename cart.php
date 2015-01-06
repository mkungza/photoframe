<?php
session_start();
include("connection.php");
 
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if (isset($_SESSION['qty']))
{
    $meQty = 0;
    foreach ($_SESSION['qty'] as $meItem)
    {
        $meQty = $meQty + $meItem;
    }
} else
{
    $meQty = 0;
}
if (isset($_SESSION['cart']) and $itemCount > 0)
{
    $itemIds = "";
    foreach ($_SESSION['cart'] as $itemId)
    {
        $itemIds = $itemIds . $itemId . ",";
    }
    $inputItems = rtrim($itemIds, ",");
    $meSql = "SELECT * FROM frametype WHERE frame_id in ({$inputItems})";
    $meQuery = mysql_query($meSql);
    $meCount = mysql_num_rows($meQuery);
} else
{
    $meCount = 0;
}
?>
<html>
<head>
<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>



	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Istylebyme</title>
	<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
       
<script language = "javascript">
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
</head>

	<?php include("header.php"); ?>
	
<Table Table width = "55%" bgcolor = "#FFFFFF" align = "center" cellspacing = "0px" cellpadding = "0px" >
	<TR>
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

		<TD>
		<br>
		<br>
		
<br>
		<TABLE style = "padding-top:40px; padding-left:40px; padding-bottom:20px" cellspacing="0" cellpadding="0">
		<TR><TD width="50px;" style="background-color:white;"><!--<img src = "images/catalog.png">--> <font size="5px" color="#777777"><b>MYCART</b></font></TD>
			
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
 
            
            <!-- Main component for a primary marketing message or call to action -->
            <?php
            if ($action == 'removed')
            {
                echo "<div class=\"alert alert-warning\">ลบสินค้าเรียบร้อยแล้ว</div>";
            }
 
            if ($meCount == 0)
            {
                echo "<div class=\"alert alert-warning\">ไม่มีสินค้าอยู่ในตะกร้า</div>";
            } else
            {
                ?>
                <form action="updatecart.php" method="post" name="fromupdate">
                    <table class="table table-striped table-bordered">
                        <thead style="background-color: #f9f9f9;"> 
                            <tr>
                                <th>#</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>รายละเอียด</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>จำนวนเงิน</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_price = 0;
                            $num = 0;
                            while ($meResult = mysql_fetch_assoc($meQuery))
                            {
                                $key = array_search($meResult['frame_id'], $_SESSION['cart']);
                                $total_price = $total_price + ($meResult['frame_price'] * $_SESSION['qty'][$key]);
                                ?>
                                <tr style="background-color: #f9f9f9;>
                                    <td><?php echo '<img width="150px" border="0" height="100px"src="data:image/jpeg;base64,'.base64_encode( $meResult['frame_pic'] ).'"/>'; ?></td>
                                    <td><?php echo $meResult['frame_id']; ?></td>
                                    <td><?php echo $meResult['frame_name']; ?></td>
                                    <td><?php echo $meResult['frame_color']; ?></td>
                                    <td>
                                        <input type="text" name="qty[<?php echo $num; ?>]" value="<?php echo $_SESSION['qty'][$key]; ?>" class="form-control" style="width: 60px;text-align: center;">
                                        <input type="hidden" name="arr_key_<?php echo $num; ?>" value="<?php echo $key; ?>">
                                    </td>
                                    <td><?php echo number_format($meResult['frame_price'],2); ?></td>
                                    <td><?php echo number_format(($meResult['frame_price'] * $_SESSION['qty'][$key]),2); ?></td>
                                    <td>
                                        <a class="btn btn-danger btn-lg" href="removecart.php?itemId=<?php echo $meResult['frame_id']; ?>" role="button">
                                            <span class="glyphicon glyphicon-trash"></span>
                                            ลบทิ้ง</a>
                                    </td>
                                </tr>
                                <?php
                                $num++;
                            }
                            ?>
                            <tr style="background-color: #f9f9f9;">
                                <td colspan="8" style="text-align: right;">
                                    <h4>จำนวนเงินรวมทั้งหมด <?php echo number_format($total_price,2); ?> บาท</h4>
                                </td>
                            </tr>
                            <tr style="background-color: #f9f9f9;>
                                <td colspan="8" style="text-align: right;">
                                    <button type="submit" class="btn btn-info btn-lg">คำนวณราคาสินค้าใหม่</button>
                                    <!--<a href="order.php?order_way" type="button" class="btn btn-primary btn-lg">สังซื้อสินค้า</a>-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
				<form action="order.php" method="post">
					<div class="form-group">
    					<label for="exampleInputPhone">การจัดส่งสินค้า</label><br>
    					<input type="radio" id="order_nom" name="order_way" value="Y" checked> <label style="color: #f9f9f9;">การจัดส่งสินค้าแบบ ems ค่าขนส่ง 60 บาท </label><br>
						<input type="radio" id="order_ems" name="order_way" value="N"> <label style="color: #f9f9f9;">การจัดส่งสินค้าแบบลงทะเบียนค่าขนส่ง 40 บาท </label><br>
						<button type="submit" class="btn btn-primary btn-lg">สังซื้อสินค้า</button>
  					</div>
				</form>
                <?php
            }
            ?>
 
        </div> <!-- /container -->
 
     
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
mysql_close();
?>