<?php
session_start();

$a=$_SESSION['uname'];

if($a=="")
{
header('location: .././index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devasom Board</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/sl.css" />

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>
<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="products.php">XYZ Webstore</a>
        </div>
    </div>
</div>
<!-- /navbar -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Devasom Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		    <li class="nav-item" style="color:#FFFFFF; font-weight:bolder;">
			<?php
							$con=mysqli_connect("localhost","root","","devasom");
 $fetchqry = "SELECT image FROM `register` where uname='$a'";
	$result=mysqli_query($con,$fetchqry);
	$num=mysqli_num_rows($result);
	if($num > 0){
    while($row = mysqli_fetch_array($result,mysqli_ASSOC)){ 
	
	?>
      <tr><td ><?php echo $a;?>&nbsp;<img src="image/<?php echo $row['image']?>" style="width:50px;  border-radius: 50%;" /> </td>
</tr>  <?php
}}?>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="change.php">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white" style="background-image:url(image/img2.jpg); background-repeat:no-repeat; height:600px;">
      <div class="masthead-content" >
        <div class="container" style="color:#6666FF;">
          <h2 class="masthead-heading mb-0" style="color: white; text-align: left; font-size: 50px;">Welcome to Sabarimala Devasom</h2>
          <h4 class="masthead-subheading mb-0" style="color: white; text-align: left; font-size: 24px;">Thrivanathapuram</h4>
          <br>
          <br>
          <br>
          <br>
   <button class="btn btn-default"><a href="#more">Go to Booking</a></button>
        </div>
      </div>
  
    </header>

    <section>
      <div class="container" id="more">
        <div class="jumbotron">
        <center><h2 class="masthead-heading mb-0">Swami Saranam...</h2></center>
        </div>
        <?php
// start session

 
// include classes
include_once "config/database.php";
include_once "product.php";
include_once "product_image.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product($db);
$product_image = new ProductImage($db);
 
// include page header HTML
include_once 'layout_header.php';
 
// content will be here
 
// include page footer HTML
include_once 'layout_footer.php';
?>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Devasom</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
