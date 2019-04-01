<?php
	session_start();
	$uid = $_SESSION['userid'];
	require '../../database.php';
	$sql = "select uid,pid,count(*) from cart where uid='$uid' group by pid;";
	$result = mysqli_query($conn, $sql);
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="../index.php">NALAMBALAM</a>

				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
			
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
		
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>PRASADHAM</h1>
				<p>
					Verify your orders and click checkout for payment.					
				</p>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<?php
									
		 
					while($row = mysqli_fetch_array($result)) {
						$nid = $row['pid'];
						$sql2 = "select name,price from product where id='$nid';";
						$res = mysqli_query($conn,$sql2);
						$row2 = mysqli_fetch_array($res);
						?>
					<li class="row">
						<span class="quantity"><?php echo $row['count(*)']; ?></span>
						<span class="itemName">
						<?php
								echo $row2['name'];
						?>						
						</span>
						<span class="popbtn"></span>
						<span class="price fa fa-inr">
						<form method="POST" action="remove from cart.php">
						<?php
						echo "<button style='background-color:transparent; border:0px' type='submit' name='del' value='"; echo $row['pid'];   echo "'>";
						?>
						<?php 
								$total = $row2['price']*$row['count(*)']; 						
								echo $total;
								
						?>
						</button>
						</form>						
						 </span>
					</li>
					<?php
					}
						$sql5 = "select sum(price) as sum from cart where uid='$uid';";					
						$res5 = mysqli_query($conn, $sql5);
						$row5 = mysqli_fetch_array($res5);					
					?>
	<li class="row">
						<span class="quantity"></span>
						<span class="itemName">Total</span>
						<span class="popbtn"></span>
						<span class="price fa fa-inr">
							<?php echo $row5['sum'];
							
							
								$_SESSION['total']=$row5['sum']; 
							 ?>		
						</span>
					</li>					
					
					
					
					
					
				</ul>
				<form method="POST" action="checkout.php">
				<center>	<button type='submit' class='btn btn-danger btn-large'>Check Out</button></center>
				</form>
			</div>
		

		</div>

		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

	</body>
</html>
