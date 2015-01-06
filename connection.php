<?php
	$host="localhost";
	$user="root";
	$pass="root";
	$db="dbphotoshop";
	$connect = mysql_connect($host,$user,$pass) ; 
	mysql_select_db($db) ;

	mysql_query("SET NAMES utf8",$connect);
?>