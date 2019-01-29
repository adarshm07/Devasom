
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
         
        </ul>

          <li class="nav-item dropdown d-none d-xl-inline-block">
              <span class="profile-text">Hello, Admin!</span>
            
              <a href=".././login/index.php?logout='1'" style="color: white;">Log Out</a>
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
	<h1>Add Stock Details</h1>
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