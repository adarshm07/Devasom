<?php
	session_start();
		$pid = $_POST['del'];
		$uid = $_SESSION['userid'];
	 require '../../database.php';
	 $sql = "delete from cart where uid='$uid' and pid='$pid';";
	 $result =mysqli_query($conn, $sql);
	
	 header("Location:index.php");


?>