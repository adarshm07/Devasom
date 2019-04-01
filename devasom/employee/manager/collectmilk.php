<?php
session_start();
	require '../../database.php';
	$housename = $_POST['housename'];
	$litre = $_POST['litre'];
	$quality = $_POST['quality'];
	$user = $_SESSION['empid'];
	$date = date('d/m/y');
$total = $litre * ($quality*2);
	$sql="select id,customername,address from house where housename = '$housename' and employee='$user';";
	
	
	$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$customername = $row['customername'];
$address = $row['address'];
$id = $row['id'];
	
	$sql="insert into collection (hid,housename,customername,address,employee,litre,quality,total,date) values ('$id','$housename','$customername','$address','$user','$litre','$quality','$total','$date');";
	$result = mysqli_query($conn, $sql);
	header("Location:collector.php");
?>