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
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->
	
<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery" id="portfolio">
				<div class="container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<table style="margin: 40px;">
			<tr><div class="col-sm-6">
				<form class="product-form" style="text-align:center;">
					<td><h4><?php echo $row["product_name"]; ?></h4>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
						
						<div style="text-align:center;">
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
						<div class="col-sm-6"><td><div style="text-align:center;"><button type="submit">Add to Cart</button></div></td>
					</div>
				</form>
			<?php } ?>
			</tr>
			</table>
						</div>
						</section>
<!-- subscribe -->
<div class="subscribe">
	<div class="container">
		<h3 class="heading">Subscribe To Get Notifications</h3>
		<div class="subscribe-grid">
			<form action="#" method="post">
				<input type="email" placeholder="Enter Your Email" name="email" required="">
				<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
</div>
<!-- //subscribe -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<ul class="col-md-3 col-xs-6 w3_agile_footer_grid right">
					<h3>Opening Hours</h3>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Monday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Tuesday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Wednesday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Thursday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Friday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Saturday <span>9:00 - 14:00</span></li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span>Sunday <span>Closed</span></li>
				</ul>
				<div class="col-md-3 col-xs-6 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li>
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<a href="index.html">Home</a>
						</li>
						<li>
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<a href="services.html">Services</a>
						</li>
						<li>
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<a href="gallery.html">Products</a>
						</li>
						<li>
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6 w3ls_address_mail_footer_grids w3_agile_footer_grid">
					<h3>Contact Us</h3>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-map-marker" aria-hidden="true"></span>
						</div>
						<p>2055 PR Cross Road,
							<span>Kennebec SD, USA.</span>
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<p>+(112) 455 312 671
							<span>+(029) 664  951 859</span>
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
						</div>
						<p>
							<a href="mailto:info@example.com">mail@example1.com</a>
							<span>
								<a href="mailto:info@example.com">mail@example2.com</a>
							</span>
						</p>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3_agile_footer_grid">
					<h3>Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post4.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post5.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#">
							<img src="images/post6.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2018 Bakery In. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a>
				</p>
			</div>
		</div>
	</div>
<!-- //footer -->

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