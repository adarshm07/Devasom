<?php
	session_start();
	include '../../database.php';
	$total = $_SESSION['total'];
	if($total!='0') {
	$user = $_SESSION['userid'];
	$name = $_POST['firstname'];	
	$email = $_POST['email'];	
	$address = $_POST['address'];	
	$city = $_POST['city'];	
	$state = $_POST['state'];	
	$zip = $_POST['zip'];	
	$cardname = $_POST['cardname'];	
	$cardnumber = $_POST['cardnumber'];	
	$expmonth = $_POST['expmonth'];	
	$expyear = $_POST['expyear'];	
	$cvv = $_POST['cvv'];	

$sql1 = "insert into admin_cart select * from cart where uid = '$user';";
$result1 = mysqli_query($conn, $sql1);

$sql6 = "update admin_cart set name='$name' where uid = '$user';";
$result6 = mysqli_query($conn, $sql6);

$sql7 = "update admin_cart set address='$address' where uid = '$user';";
$result7 = mysqli_query($conn, $sql7);


$sql2 = "delete from cart where uid = '$user';";
$result2 = mysqli_query($conn, $sql2);

$sql = "insert into payment values ('$user' ,'$name' ,'$email' ,'$address' ,'$city','$state' ,'$zip' ,'$cardnumber' ,'$expmonth' ,'$expyear' ,'$cvv','$total');";
$result = mysqli_query($conn, $sql);

$sql10 = "update total_made set total = total+'$total';";
$result10 = mysqli_query($conn, $sql10);



$_SESSION['total']='0';
}
header("Location:../index.php");
?>


