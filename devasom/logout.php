<?php
	session_start();
	unset($_SESSION['admin']);
	unset($_SESSION['empid']);
	unset($_SESSION['userid']);
	
	header("location:index.php");
?>
