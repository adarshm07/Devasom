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
					<div class="panel-heading">Add user</div>
						<div class="panel-body">
						<form action="adduser.php" method="POST">
							<div class="form-group">
								<label>Name:</label>
							<input type="text" class="form-control" placeholder="User's name" name="uname" required id="uname">
							</div>
							<div class="form-group">
								<label>Email:</label>
							<input type="email" class="form-control" placeholder="User's email" name="uemail" required id="uemail">
							</div>
							<div class="form-group">
								<label>Mobile:</label>
						<input type="text" class="form-control" placeholder="Mobile number" name="umobile" required id="umobile">
							</div>
								<div class="form-group">
								<label>User type:</label><br>
								
								<input type="radio" name="utype" value="Manager"checked="true" >Manager
							</div>
						<div class="form-group">
								<label>UserName:</label>
						<input type="text" class="form-control" placeholder="Username for login" name="uusername" required id="uusername">
							</div>
							<div class="form-group">
								<label>Password:</label>
						<input type="text" class="form-control" placeholder="Temporary password for user" name="upassword" required id="upassword">
							</div>
						<div class="form-group">
						<center>
							<input type="submit" class="btn btn-primary" value="Submit" style="width:250px;">
						</center>	
						</div>		
							
							
						</form>
						</div>
				</div>
			</div>
	<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">User Info</div>
					<div class="panel-body">			
								 <table class="table table-striped">
  								  <thead>
     									 <tr>
    									    <th>Name</th>
       									 <th>Email</th>
       									 <th>Type</th>
       									 <th>Delete</th>
     									 </tr>
   							 </thead>
    							 <tbody>
    							 <?php
    							 		require('database.php');
    							 		$sql4 = "select * from employee";
    							 		$result4 = mysqli_query($conn, $sql4);
    							 		while($row4=mysqli_fetch_array($result4)) {
			    							 echo '<form method="POST" action="deleteuser.php">';
   							 				   echo '<tr>';
	    											   echo '<td>';echo $row4['name'];echo'</td>';
 								             	   echo '<td>';echo $row4['email'];echo'</td>';
 								             	   echo '<td>';echo $row4['type'];echo'</td>';
 								             	                        		   echo '<td><button class="btn btn-primary" type="submit" value="';echo $row4['id'];
      	                        		   echo '"name="del"';echo $row4['id'];
      	                        		   echo '">Delete</button>';
      	                        		   echo '</td>';
                              		   echo '</tr>';
                              		   echo '</form>';
                          	    		  }
                          ?>
                          
    						    </tbody>
  								 </table>
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
				$('#prev_name').html($name);
				$('#prev_image').attr('src',$url);
				$('#prev_desc').html($desc);
				$('#pnl_body').fadeIn();
		
				
			});
		});
	</script>
		
</body>
</html>
