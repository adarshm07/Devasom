<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Devasom Board: Pooja Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /><!-- gallery css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href=".././vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.addons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=".././css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href=".././images/favicon.png" />

<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" /><!-- for gallery lightninBox css -->

<link href="css/font-awesome.css" rel="stylesheet"><!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 

?><link href="style/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="script/cart.js"></script>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       
        <h1 style="color:#0095DD; font-weight:bolder;">Devasom Board</h1>
     
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
	<!-- header -->
	<div class="header">
								<li><a href="view_cart.php"  id="cart-info" title="View Cart">  <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				
			}
			?></a></li>
			<li>
			<?php
 
 //mysqli Procedural
 $connection = mysqli_connect("localhost","root","","devasom");
 if (!$connection) {
   die("Connection failed: " . mysqli_connect_error());
 }
  
 ?>
         
        </ul> <a href="./logout.php" style="color:white;">Logout</a>
        <ul class="navbar-nav navbar-nav-right">
        
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->

          <div class="col-sm-4">
          <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
               
                <div class="text-wrapper">
                  <p class="profile-name"></p>
              
                </div>
              </div>
           
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href=./change.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Change Password</span>
            </a>
</li>
<li class="nav-item">
            <a class="nav-link" href="./product/stock.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Add Products</span>
            </a>
          </li>
<li class="nav-item">
            <a class="nav-link" href="./complaint/view_complaint.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">View Complaint</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Booking Details</span>
            </a>
          </li>
        </ul>
      </nav>
</div>
</div>
<div class="col-sm-6" style="margin-top: 80px;">

	<!-- //header -->
	
<!-- Portfolio section -->
<div class="container">
<section>
<table style="margin: 40px; border: 1px solid;">
<tr><td style="border: 1px solid; text-align: center;">Product</td>
<td style="border: 1px solid; text-align: center;">Price</td>
<td>....</td>
<td style="border: 1px solid; text-align: center;">Quantity</td>
<td style="border: 1px solid; text-align: center;">Buy</td>
</tr>
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<tr><div class="col-sm-6">
				<form class="product-form" style="text-align:center;">
					<td style="padding: 20px; border: 1px solid;"><h4><?php echo $row["product_name"]; ?></h4></td>
					<td style="padding: 20px; border: 1px solid;""><div>Price : <?php echo $currency; echo $row["product_price"]; ?></div><td>
						<td style="padding: 20px; border: 1px solid;""><div style="text-align:center;">
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>"></td></div>
						<div class="col-sm-6"><td style="padding: 20px; border: 1px solid;"><div style="text-align:center;"><button type="submit">Add to Cart</button></div></td>
					</div>
				</form>
			<?php } ?>
			</tr>
			</table>
						</div>
						</section>

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

</body>
</html>