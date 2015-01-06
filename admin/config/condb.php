<?php 
$host = "localhost";
$username = "root";
$password = "soulsz";
$con = mysql_connect($host,$username,$password);
mysql_query("SET NAMES utf8",$con);
$objDB = mysql_select_db("dbphotoshop");
?>

