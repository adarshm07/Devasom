<?php
	include('conn.php');
	
	$uname=$_POST['uname'];
	$name=$_POST['name'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pwd=$_POST['pwd'];
	$image=$_POST['image'];
 
	mysqli_query($conn,"insert into register (uname, name, email, mobile, pwd, image) values ('$uname', '$name', '$email', '$mobile','$pwd', '$image')");
	header('location:index.php');

?>