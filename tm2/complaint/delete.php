<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from complaint where id='$id'");
	header('location:view_complaint.php');

?>