<?php
session_start();
include("connection.php");

$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$_SESSION['formid'] = sha1('itoffside.com' . microtime());
if (isset($_SESSION['qty'])) {
	$meQty = 0;
	foreach ($_SESSION['qty'] as $meItem) {
		$meQty = $meQty + $meItem;
	}
} else {
	$meQty = 0;
}
if (isset($_SESSION['cart']) and $itemCount > 0) {
	$itemIds = "";
	foreach ($_SESSION['cart'] as $itemId) {
		$itemIds = $itemIds . $itemId . ",";
	}
	$inputItems = rtrim($itemIds, ",");
	$meSql = "SELECT * FROM frametype WHERE frame_id in ({$inputItems})";
	$meQuery = mysql_query($meSql);
	$meCount = mysql_num_rows($meQuery);
} else {
	$meCount = 0;
}
if (isset($_REQUEST['order_way'])) {
	$way = $_REQUEST['order_way'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Istylebyme</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/nava.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<script type="text/javascript">
$(document).ready(function() {
	
});
	function updateSubmit(){
		if(document.formupdate.order_fullname.value == ""){
			alert('โปรดใส่ชื่อนามสกุลด้วย!');
			document.formupdate.order_fullname.focus();
			return false;
		}
			if(document.formupdate.order_address.value == ""){
			alert('โปรดใส่ที่อยู่ด้วย!');
			document.formupdate.order_address.focus();
			return false;
		}
			if(document.formupdate.order_phone.value == ""){
			alert('โปรดใส่เบอร์โทรด้วย!');
			document.formupdate.order_phone.focus();
			return false;
		}
		document.formupdate.submit();
		return false;
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
		<TR><TD width="50px;" style="background-color:white;"><font size="5px" color="#777777"><b>ORDER</b></font></TD>
			
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

                <form action="updateorder.php" method="post" name="formupdate" role="form" id="formupdate" onsubmit="JavaScript:return updateSubmit();">
                	<div class="form-group">
    					<label for="exampleInputEmail1">ชื่อ-นามสกุล</label>
    					<input type="text" class="form-control" id="order_fullname" placeholder="ใส่ชื่อนามสกุล" style="width: 300px;" name="order_fullname">
  					</div>
                	<div class="form-group">
    					<label for="exampleInputAddress">ที่อยู่</label>
    					<textarea class="form-control" rows="3" style="width: 500px;" name="order_address" id="order_address"></textarea>
  					</div>
                	<div class="form-group">
    					<label for="exampleInputPhone">เบอร์โทรศัพท์</label>
    					<input type="text" class="form-control" id="order_phone" placeholder="ใส่เบอร์โทรศัพท์ที่สามารถติดต่อได้" style="width: 300px;" name="order_phone">
  					</div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr style="background-color: #f9f9f9;">
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
                                <tr style="background-color: #f9f9f9;">
                                    <td><?php echo $meResult['frame_id']; ?></td>
                                    <td><?php echo $meResult['frame_name']; ?></td>
                                    <td><?php echo $meResult['frame_color']; ?></td>
                                    <td>
                                    	<?php echo $_SESSION['qty'][$key]; ?>
                                    	<input type="hidden" name="qty[]" value="<?php echo $_SESSION['qty'][$key]; ?>" />
                                    	<input type="hidden" name="frame_id[]" value="<?php echo $meResult['frame_id']; ?>" />
                                    	<input  type="hidden" name="frame_price[]" value="<?php echo $meResult['frame_price']; ?>" />
                                    </td>
                                    <td><?php echo number_format($meResult['frame_price'], 2); ?></td>
                                    <td><?php echo number_format(($meResult['frame_price'] * $_SESSION['qty'][$key]), 2); ?></td>
                                </tr>
                                <?php
								$num++;
								}
                            ?>
							<tr style="background-color: #f9f9f9;">
								<td colspan="8" style="text-align: right;">
									<?php
									if($way=='Y') {
									?>	
										<h4>ค่าจัดส่งพัสดุแบบ ems 60 บาท</hr>
										<input type="hidden" name="order_ems" value="Y">
									<?php
										$total_price = $total_price + 60;
									}
									else {
									?>	
										<input type="hidden" name="order_ems" value="N">
										<h4>ค่าจัดส่งพัสดุแบบลงทะเบียน 40 บาท</hr>
									<?php
										$total_price = $total_price + 40;
									}
									?>  
								</td>
							</tr>
                            <tr style="background-color: #f9f9f9;">
                                <td colspan="8" style="text-align: right;">
                                    <h4>จำนวนเงินรวมทั้งหมด <?php echo number_format($total_price, 2); ?> บาท</h4>
                                </td>
                            </tr>
                            <tr style="background-color: #f9f9f9;"> 
                                <td colspan="8" style="text-align: right;">
                                	<input type="hidden" name="formid" value="<?php echo $_SESSION['formid']; ?>"/>
                                	<a href="cart.php" type="button" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                                    <button type="submit" class="btn btn-primary btn-lg">บันทึกการสั่งซื้อสินค้า</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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