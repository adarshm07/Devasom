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
				<a class="navbar-brand" href="#"><span></span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		<?php
			include('sidebar.php');
		
		?>
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
		
		<div class="panel panel-container">
		<?php
			require('details.php');
		?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Add new prasadham</div>
					<div class="panel-body">
						<p>Fill the details of the prasadham and click submit</p>
						<form action="addproduct.php" method="POST">
						<div class="form-group">
							<label>Prasadham name*</label>
							<input class="form-control" placeholder="Name" name="p_name" required id="pname">
						</div>
						<div class="form-group">
							<label>Prasadham description*</label>
							<input class="form-control" placeholder="Description" name="p_description" required id="pdesc">
						</div>
						<div class="form-group">
							<label>Prasadham price*</label>
							<input class="form-control" placeholder="Price" name="p_price" required id="pprice">
						</div>
						<div class="form-group">
							<label>Picture of Prasadham</label>
							<input type="text" name="p_file" required id="purl">
							
						</div>
						
						<p class="text-success text-large"><?php 
						session_start();
						 ?></p>
						<div class="form-group">
						       <input type="button" class="btn btn-primary" value="Preview" id="prv">
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>		
						</form>
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Prasadham preview</div>
					<div class="panel-body" id="pnl_body">
					<div style="width:50%;margin-left:25%;">
						<div class="panel panel-default"><center><lable id="prev_name">prasadham  name</lable></center></div>
						<div class="panel-body" >
							<div class="form-group">
							<center>
								<img src="sample.jpg" id="prev_image" width=250 height=230 alt="my pic">
							</center>
							</div>
							<div class="form-group">
							<center>
								<lable id="prev_desc">Prasadham description</lable>
							</center>
							</div>
							<div class="form-group">
							<center>
								<span class="fa fa-rupee"></span><lable id="prev_price">Prize</lable><br>
								<div class="form-group">
								<button  class="btn btn-primary"value="Add to cart">Add to cart</button>
								</div>
							</center>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>			
		</div>
		
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
	<script>	
		$('document').ready(function(){
			$('#pnl_body').fadeOut();
			$('#prv').click(function(){
				$name = $('#pname').val();
				$desc = $('#pdesc').val();
				$url = $('#purl').val();
				$price = $('#pprice').val();
				$('#prev_name').html($name);
				$('#prev_image').attr('src',$url);
				$('#prev_desc').html($desc);
				$('#prev_price').html($price);
				
				$('#pnl_body').fadeIn();
		
				
			});
		});
	</script>
		
</body>
</html>
