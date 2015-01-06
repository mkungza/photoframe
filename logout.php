<?php
    session_Start();
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);
	unset($_SESSION["userid"]);
	header( "location: index.php" );
	session_destroy();
?> 
