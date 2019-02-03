<?php
	include('connection.php');
	
	$id=$_GET['id'];
	
	$product_name=$_POST['product_name'];
	$product_desc=$_POST['product_desc'];
	$product_price=$_POST['product_price'];
	
	mysqli_query($conn,"update shop_products set product_name='$product_name', product_desc='$product_desc', product_price='$product_price' where id='$id'");
	header('location:editproduct.php');

?>