<?php
	session_start();
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
			<li class="active"><a href="collector.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="account.php"><em class="fa fa-user">&nbsp;</em> Account</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
				Application for Loan
					</div>
					<br>
			
						<form method="POST" action="loanapply.php">
								<div class="form-group">
								<label>Loan type</label><br>
										<select class="form-control" name="loantype">
												<option>Educational Loan</option>										
												<option>Vehicle Loan</option>										
												<option>Home Loan</option>										
												<option>Personal Loan</option>													
										</select>
								</div>					
								<div class="form-group">
								<label>Loan Duration(Months)</label><br>
										<select class="form-control" name="loanmonth">
												<option>1</option>										
												<option>2</option>										
												<option>3</option>										
												<option>4</option>										
												<option>5</option>										
												<option>6</option>										
												<option>7</option>										
												<option>8</option>										
												<option>9</option>										
												<option>10</option>										
												<option>11</option>										
												<option>12</option>																																
										</select>
								</div>		
									<div class="form-group">
											<input type="file"  name="file" size="50" />
											<br />
                        	</div>

							<div class="form-group">
									<input type="submit" value="upload" class="btn btn-primary">							
							</div>
						
						</form>
				</center>
				<br>
				</div>
			</div>
				<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
				Loan status
					</div>
							 <table class="table table-striped">
  								  <thead>
     									 <tr>
     									 	<th>No</th>
    									    <th>Type</th>
       									 <th>Months</th>
       									 <th>Status</th>
     									 </tr>
   							 </thead>
    							 <tbody>
    										<?php
    											require "../../database.php";
    											$sql = "select * from loan where name = '$empid';";
    											$result = mysqli_query($conn, $sql);
    											$num = 1;
    											while($row = mysqli_fetch_array($result)) {
    													echo "<tr>";
    														echo "<td>";
    															echo $num;
    														echo "</td>";
    														echo "<td>";
    															echo $row['type'];
    														echo "</td>";
    														echo "<td>";
    															echo $row['month'];
    														echo "</td>";
    																	echo "<td>";
    															echo $row['status'];
    														echo "</td>";
    										
    													echo "</tr>";	
    											$num++;		   												
    											}								
    										?> 
    							 
							</tbody>    							 
					
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
