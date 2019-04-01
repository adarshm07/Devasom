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
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Order details</div>
					<div class="panel-body">
			 <table class="table table-striped">
  								  <thead>
     									 <tr>
	     									 <th>No</th>
	     									 <th>Collector</th>
       									 <th>House Name</th>
       									 <th>Customer Name</th>
 											 <th>Adress</th>       									
       									 <th>Litre</th>
       									 <th>Quality</th>
												<th>Date</th>
       									 <th>Total</th>
     									 </tr>
   							 </thead>
   							 <tbody>
   							 			<?php
   							 					require '../database.php';
   							 					$sql = "select * from collection order by date;";
   							 					$result = mysqli_query($conn, $sql);
//													$row3 = mysqli_fetch_array($result);   							 					
   							 				   							 			
   							 			?>
   							 			<?php
   							 			$num = 1;
   							 					while($row = mysqli_fetch_array($result)) {
	 							 					$ifff = $row['employee'];
   							 					$sql2 = "select name from employee where id='$ifff';";
   							 					$resss=mysqli_query($conn, $sql2);
   							 					$roww = mysqli_fetch_array($resss);
													$employee = $roww['name'];   							 					
     							 						
   							 							
   							 			echo "<tr>";
													echo "<td>";
																echo $num;
													echo "</td>";
													echo "<td>";
																echo $employee;
													echo "</td>";
													echo "<td>";
																echo $row['housename'];
													echo "</td>";
													echo "<td>";
																echo $row['customername'];
													echo "</td>";
													echo "<td>";
																echo $row['address'];
													echo "</td>";
													echo "<td>";
																echo $row['litre'];
													echo "</td>";
													echo "<td>";
																echo $row['quality'];
													echo "</td>";
													echo "<td>";
																echo $row['date'];
													echo "</td>";
													echo "<td>";
																echo $row['total'];
													echo "</td>";
													
													
											
   							 			echo "</tr>";
												$num++;
												}
												
												?>   							 
   							 </tbody>
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
