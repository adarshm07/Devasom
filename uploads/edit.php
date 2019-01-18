<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$uname=$_POST['uname'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
 
	mysqli_query($conn,"update register set uname='$uname', name='$name', email='$email', mobile='$mobile' where id='$id'");
	header('location:index.php');
 
?>