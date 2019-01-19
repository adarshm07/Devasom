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
  <link rel="stylesheet" href="../.././css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../.././images/favicon.png" />

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
         
        </ul> <a href="../.././login/index.php?logout='1'" style="color:white;">Logout</a>
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
            <a class="nav-link" href=".././index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href=.././change.php>
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Change Password</span>
            </a>
</li>
<li class="nav-item">
            <a class="nav-link" href="./stock.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Add Products</span>
            </a>
          </li>
<li class="nav-item">
            <a class="nav-link" href=".././complaint/view_complaint.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">View Complaint</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=".././admin.php">
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

	<!-- banner slider --><div style="padding-left:100px;">
	<h1>Add Product Details</h1>
	<form method="post" enctype="multipart/form-data">
	Product Name:<input type="text" name="pn" />
	<br /><br />
	Product Description:<input type="text" name="pd" />
	<br /><br />
	Product Code:<input type="text" name="pc" />
	<br /><br />
	Product Image:<input type="file" name="upload" accept="image/*" />
	<br /><br />
	Product Price:<input type="text" name="pp" />
	<br /><br />
	ProductQuantity:<input type="text" name="pq" />
	<br /><br />
		Product catagory:<select name="pcy"><option>cake</option><option>snackes</option><option>biscuits</option><option>pudding</option></select>
	<br /><br />
	<input type="submit" name="add" value="ADD"/>
	<br /><br />
	</form>
	<?php
include ("cart/db.php");	

	$msg = "";

if(isset($_POST['add']))
{

$old=$_FILES['upload']['tmp_name'];
$new="images/".$_FILES['upload']['name'];
move_uploaded_file($old,$new);
$query = mysqli_query($db, "INSERT INTO shop_products  values('null','".$_POST['pn']."','".$_POST['pd']."','".$_POST['pc']."','".$_FILES['upload']['name']."','".$_POST['pp']."','".$_POST['pq']."','".$_POST['pcy']."')");
			if($query)
			{
				echo "Thank You! you are now added.";
			}
		}
	

?>
				
	<!-- //banner slider -->

<!-- welcome -->

	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>