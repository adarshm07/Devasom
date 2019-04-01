<?php
	include 'database.php';
	$shop_id=$_POST['btn'];
	$sql="delete from shop where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);

	$sql="delete from customer_track where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);

      	$sql="delete from offer where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);
       
      	$sql="delete from points where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);

      	$sql="delete from policy where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);
       
       
      	$sql="delete from reward where shop_id='$shop_id'";
       $result = mysqli_query($conn, $sql);

       header("Location:admin.php");


?>
