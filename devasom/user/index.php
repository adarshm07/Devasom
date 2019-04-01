<?php
	session_start();
	if(!isset($_SESSION['userid'])){
		header("Location:../index.php");	
		echo 'no direct access';
	}

	$userid = $_SESSION['userid'];
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Maachu" >

  <title>Shop Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.badge{
					font-size: 15px;
					background-color: green;
				}
	</style>
</head>

<body >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">NALAMABALAM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="http://localhost/devasom/devasom/user/south/products.php">Pooja booking
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./cart/index.php">Cart 
                <span class="badge  badge-secondary">
						<?php  
								include '../database.php';
								$sql="select count(*) from cart where uid='$userid';";
								$result=mysqli_query($conn,$sql);
								$row=mysqli_fetch_array($result);
								echo $row['count(*)'];				
								
						?>                
                
                
                </span>
            </a>
        
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../logout.php">Logout
              <span class="sr-only">(current)</span>
            </a>
          </li>
     
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=" ">

    <div class="row">


      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./images/milk1.jpg" alt="First slide "  >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/milk2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/milk3.jpg" alt="Third slide" >
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
        <div class="row ">
<?php
include '../database.php';

$sql = "select * from product;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)) {
	
	
?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
				<?php
	              echo "<img class='card-img-top' width=200 height=300 src='";
						echo $row['file'];	              
	             echo "' alt='No image'></a>";
	             
	             ?><center>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $row['name']; ?></a>
                </h4>
                	<h5>
       <span class="fa fa-rupee"></span>
						<?php 
								echo $row['price'];						
						?>                
                
                </h5>
                <p class="card-text">
						<?php
								echo $row['description'];
						?>               
                </p>
                <form method="POST" action="addtocart.php">
                <?php
      			                  		   echo '<button class="btn btn-danger" type="submit" value="';echo $row['id'];
      	                        		   echo '"name="pd"';echo $row['id'];
      	                        		   echo '">Add to cart</button>';
      	                        		   
		               ?> 
                </form>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
<?php

} ?>
     
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container"> 
      <p class="m-0 text-center text-white">Designed By Shaniya,Amisha, Maria </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
