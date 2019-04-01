<?php
	session_start();
	if(!isset($_SESSION['empid'])){
		header("Location:../../index.php");
	}
	$empid=$_SESSION['empid'];
	require '../../database.php';
	$sql="select name from employee where id='$empid'";
	$result0 = mysqli_query($conn, $sql);
	$rrr = mysqli_fetch_array($result0);
	$nnn =$rrr['name'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>nalambalam</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/sl.css" />

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    <style>
    .navbar-nav {
    text-transform: uppercase;
    }
    .btn:hover{
      background-color: blue;
    }
    a:hover{
      text-decoration: none;
      color: white;
    }
    </style>
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
				<a class="navbar-brand" href="#">NALAMBALAM</a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#">Dashboard</a>
        <a class="navbar-brand" href="leave.php">Leave</a>
        <a class="navbar-brand" href="stock.php">Add Pooja</a>
        <a class="navbar-brand" href="http://localhost/devasom/devasom/user/south/viewproduct.php">View Pooja</a>
        <a class="navbar-brand" href="../../logout.php">Logout</a>
       
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	
	
	
			
	
	
	
		
	

    <header class="masthead text-center text-white" style="background-image:url(image/img2.jpg); background-repeat:no-repeat; height:600px;">
      <div class="masthead-content" >
        <div class="container" style="color:#6666FF;">
          <h2 class="masthead-heading mb-0" style="color: white; text-align: left; font-size: 50px;">Welcome to nalambalam</h2>
          <h4 class="masthead-subheading mb-0" style="color: white; text-align: left; font-size: 24px;">Thrissur</h4>
          <br>
          <br>
          <br>
          <br>
 
        </div>
      </div>
  
    </header>

    <section>
      <div class="container" id="more">
        <div class="jumbotron">
        <center><h2 class="masthead-heading mb-0">Swami Saranam...</h2></center>
        </div>
</div>
        <?php
// start session
?>
  <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/img3.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Let your body be your holly temple </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/2.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Let thy holly temple be thy body</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Praying is a perfect peace</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		</div><!--/.row-->
		
	
			
												
 							
 						
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
		<script type="text/javascript">
				$("#prz").click(function () {
					$("#total").css("display","block");
					 var total = $('#qty').val() * ($('#qly').val() * 2);
					 
					$("#total").html("Total : ");
					$("#total").append(total);
					
				});
		</script>
</body>
</html>
