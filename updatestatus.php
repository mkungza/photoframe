<?php include("connection.php");
$tranid = "";
$status = "";
if(isset($_REQUEST['td'])) {
	$tranid = $_REQUEST['td'];
}
if(isset($_REQUEST['s'])) {
	$status = $_REQUEST['s'];
}
	$updateSQL = "UPDATE transaction SET tran_status = 'กำลังทำ'  WHERE tran_id = '$tranid'";	
	mysql_query($updateSQL);

?>
<script>
	window.location = "index.php";
</script>