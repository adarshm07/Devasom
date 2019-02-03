<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
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
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       
        <h1 style="color:#0095DD; font-weight:bolder;">Devasom Board</h1>
     
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
         
          </li>
          <?php
 
 //mysqli Procedural
 $conn = mysqli_connect("localhost","root","","devasom");
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
  
 ?>
         
        </ul> <a href="./logout.php" style="color:white;">Logout</a>
        <ul class="navbar-nav navbar-nav-right">
        <li><a href="view_cart.php"  id="cart-info" title="View Cart">  <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				
			}
			?></a></li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Admin!</span>
             
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
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
            <a class="nav-link" href="change.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Change Password</span>
            </a>
</li>
<li class="nav-item">
            <a class="nav-link" href="view_complaint.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">View Complaint</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./product/products.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">View Products</span>
            </a>
          </li>
       
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

      <section class="portfolio-agileinfo gallery" id="portfolio">
				<div class="container">
                <?php
include_once("inc/db_connect.php");
include("inc/config.inc.php");
?>
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
  <!-- End custom js for this page-->
</body>

</html>