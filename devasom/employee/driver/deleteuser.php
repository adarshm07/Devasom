<?php
	session_start();
		$id = $_POST['del'];
	require('database.php');
	
	$sql="delete from employee where id='$id'";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header("Location:users.php");


?>