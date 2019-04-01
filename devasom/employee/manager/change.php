<?php
	session_start();
	$id=$_SESSION['empid'];
	$name = $_POST['username'];
	$pass = $_POST['password'];
	echo $id;
	echo $name;
	echo $pass;
	include './database.php';
	
	$sql1 ="update employee set username='$name' where id='$id';";
	$sql2 ="update employee set password='$pass' where id='$id';";
	$result = mysqli_query($conn,$sql1);
	$result = mysqli_query($conn,$sql2);
	header("Location:deliver.php");

?>