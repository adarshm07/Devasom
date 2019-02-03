<?php
	include('connection.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from shop_products where id='$id'");
	header('location:editproduct.php');

?>