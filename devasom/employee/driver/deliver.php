<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header("Location:../../index.php");
	}
	$empid=$_SESSION['empid'];
	require './database.php';
	$sql="select name from employee where id='$empid'";
	$result0 = mysqli_query($conn, $sql);
	$rrr = mysqli_fetch_array($result0);
	$nnn =$rrr['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Order</span> Delivery</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk-2z5AQ3zNjtrm-GGyXjqq5DL0IetkslACRwHG0I3lO6EPfOKEw" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $nnn; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="deliver.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="account.php"><em class="fa fa-user">&nbsp;</em> Account</a></li>
				<li><a href="loan.php"><em class="fa fa-user">&nbsp;</em>Loan</a></li>
				<li><a href="leave.php"><em class="fa fa-user">&nbsp;</em>Leave</a></li>
			<li><a href="../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
			
	
	
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Order to deliver
					</div>
 <table class="table table-striped">
  								  <thead>
     									 <tr>
	     									 <th>No</th>
       									
    									    <th>Name</th>
       									 <th>Address</th>
 											 <th>Prsadham Name</th>       									
       									 <th>Qty</th>
       									 <th>Price</th>
       									 <th>Delivered</th>
     									 </tr>
   							 </thead>
   							 <tbody>
   							 		<?php 
   							 			
   							 			include './database.php';
   							 			$sql = "select uid from admin_cart group by uid;";
   							 			$res = mysqli_query($conn,$sql);
   							 				$num = 1;
   							 			while($row = mysqli_fetch_array($res)) {
   							 				$uidn = $row['uid'];
   							 				 $sql2 = "SELECT *,count(uid) as count,price as nprice  FROM admin_cart where uid='$uidn' and status='send' and assign='$nnn' group by pid ;";
   							 					$res2 = mysqli_query($conn, $sql2);
   							 			while($row3 = mysqli_fetch_array($res2)) {
   							 			
   							 				$idd = $row3['pid'];
   							 				$sql5 = "select name from product where id='$idd';";
   							 				$result5 = mysqli_query($conn, $sql5);
   							 				$row5 = mysqli_fetch_array($result5);
   							 				$pname = $row5['name']; 
   							 				
   							 		?>
										 <tr>
    									    <td><?php echo $num ?></td>
       										
       									 <td><?php echo $row3['name']; ?></td>
       									 <td><?php echo $row3['address']; ?></td>
       									 <td><?php echo $pname; ?></td>
       									 <td><?php echo $row3['count']; ?></td>
       									 <td><?php echo $row3['nprice']*$row3['count']; ?></td>
       									 <form action="checkit.php" method="POST">
											<?php											 
											 echo "<input type='hidden' name='userid' value='";
											 echo $row3['uid'];
											 echo "'>";		
										 	 echo "<input type='hidden' name='pid' value='";
											 echo $row3['pid'];
											 echo "'>";											 
											?> 
											 			 
       									 	 <td><button type="submit" class="btn btn-primary">Delivered</button></td>
       									 </form>
       								
  		     							
       								
      								 </tr>
									
   							 
   							 </tbody>				
					 <?php
									$num++;   							 	
   							 	}}
   							 ?>
				
				
				</div>
			</div>
		</div><!--/.row-->
		
	
		
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
