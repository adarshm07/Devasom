<?php
	session_start();
		$id = $_POST['pd'];
		$uid = $_SESSION['userid'];
		$cdate =  date("d/m/Y");
	require('../database.php');
	$sql2 = "select price from product where id='$id';";
	$result2= mysqli_query($conn, $sql2);
	$row=mysqli_fetch_array($result2);
	$price = $row['price'];
	$sql="insert into cart values('$uid','$id','$cdate','$price','','','','')";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header("Location:index.php");
?>