
<?php
session_start();
	include 'database.php';
		$name=$_POST['p_name'];
		$description=$_POST['p_description'];
		$file=$_POST['p_file'];
		$price=$_POST['p_price'];		
		$sql="insert into product (name,description,file,price) values('$name','$description','$file','$price')";
		$result = mysqli_query($conn, $sql);
	    	$_SESSION['ok']='Product added successfully';
	       header("Location:widgets.php");		
	
		mysqli_close($conn);
?>
