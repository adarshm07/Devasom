<?php
session_start();
?>
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
  <style>
  .h1, h1 {
    font-size: 1.19rem;
    margin-top: 20px;
}
</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       
        <h1 style="color:#0095DD; font-weight:bolder;">Devasom Board TMP 1</h1>
     
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
              <span class="profile-text">Hello!</span>
            
              <a href="./logout.php?logout='1'" style="color: white;">Log Out</a>
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
            <a class="nav-link" href="./products.php">
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
            <a class="nav-link" href="./products.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Pooja Booking</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./change.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">Change Password</span>
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
      
      <div class="container">
      <div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Users</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Product</th>
				<th>Description</th>
				<th>Image</th>
				<th>Price</th>
                <th>Action</th>
			</thead>
			<tbody>
			<?php
				include('connection.php');
				
				$query=mysqli_query($conn,"SELECT * FROM `shop_products` WHERE tmid=1");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['product_desc']; ?></td>
					    <td><img  class="product_image"  src="images/<?php echo $row["product_image"]; ?>"></td>
                        <td><?php echo $row['product_price']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('buttonproduct.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal_product.php'); ?>
</div>



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
  <!-- End custom js for this page-->
</body>

</html>