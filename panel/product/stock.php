
<!DOCTYPE html>
<html lang="en">
<head>
<title>Devasom Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<link rel="stylesheet" href=".././vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link href=".././vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
  <style>
.navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255,.5);
    color: white;
}
.navbar{
  background-color: #252424;
}
</style>
</head>
<body>
<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 

?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href=".././index.php">Devasom Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		    <li class="nav-item" style="color:#FFFFFF; font-weight:bolder;">

            </li>
            <li class="nav-item">
              <a class="nav-link" href="change.php">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".././panel/products.php">Booking</a>
            </li>
            <a class="nav-link" href="./product/stock.php">
            <li class="nav-item">
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
								<li><a href="view_cart.php"  id="cart-info" title="View Cart">  <span class="glyphicon glyphicon-shopping-cart my-cart-icon" style="margin-top:16px;"><span class="badge badge-notify my-cart-badge"></span></span><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				
			}
			?></a></li>
			<li style="margin:16px; text-transform: capitalize; color: white;">
            <?php
            $a=$_SESSION['username'];
            echo $a;?>
            </li>
            <li class="nav-item">
            <?php
            include_once('../.././login/db.php');
              if (isset($_SESSION['username'])) : ?>
              <a class="nav-link" href=".././login/index.php?logout='1'" style="color: red;">Log Out</a>
              <?php endif ?> 
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

	<!-- banner slider --><div style="padding-left:100px;">
	<h1>Add Details</h1>
	<form method="post" enctype="multipart/form-data" action="./stock.php">
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
<!-- plugins:js -->
<script src=".././vendors/js/vendor.bundle.base.js"></script>
  <script src=".././vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=".././js/off-canvas.js"></script>
  <script src=".././js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=".././js/dashboard.js"></script>

</body>
</html>