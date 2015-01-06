<?php session_start();
echo 'logout success';
echo '<Meta http-equiv="refresh"content="5;URL=login.html">';
session_destroy();
?>

