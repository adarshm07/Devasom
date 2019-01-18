<?php
	include('conn.php');
 
	$uname=$_POST['uname'];
	$name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
 
	mysqli_query($conn,"insert into register (uname, name, email, mobile) values ('$uname', '$name', '$email', '$mobile')");
	header('location:index.php');
 
?>