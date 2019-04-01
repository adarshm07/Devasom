<?php
	session_start();
	require('database.php');
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$mobile = $_POST['umobile'];
	$type = $_POST['utype'];
	$username = $_POST['uusername'];
	$password = $_POST['upassword'];
	$sql ="insert into employee (name,email,mobile,type,username,password) values ('$name' ,'$email', '$mobile', '$type', '$username', '$password');";
	$result = mysqli_query($conn, $sql);
	$_SESSION['user']='User added successfully';
	mysqli_close($conn);
	header("Location:users.php");
?>