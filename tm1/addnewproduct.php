<?php
	include('connection.php');
	
	$product_name=$_POST['product_name'];
	$product_desc=$_POST['product_desc'];
    $product_price=$_POST['product_price'];
 
	mysqli_query($conn,"insert into register (product_name, product_desc, product_price) values ('$product_name', '$product_desc', '$product_price')");
	header('location:index.php');

?>