<?php
session_start();
	require '../../database.php';
	$housename = $_POST['housename'];
	$customername = $_POST['customername'];
	$address = $_POST['address'];
	$acc = $_POST['acc'];
	$user = $_SESSION['empid'];
	
	$sql="insert into house (housename,customername,address,employee,acc) values ('$housename','$customername','$address','$user','$acc');";
	$result = mysqli_query($conn, $sql);
	header("Location:collector.php");
?>