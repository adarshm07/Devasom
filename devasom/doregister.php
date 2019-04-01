<?php
	session_start();
		$name=$_POST['name'];
   	$email=$_POST['email'];
   	$mobile=$_POST['mob'];
   	$usernm = $_POST['username'];
   	$passwd = $_POST['password'];
   	
   	require('database.php');
     	$sql = "insert into users (name,email,mobile,username,password) values('$name','$email','$mobile','$usernm','$passwd');";
   	$result=mysqli_query($conn, $sql);
  	   header("location:index.php"); 
?>