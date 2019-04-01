<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Flat Management System</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>	<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script><style>#output_image
{
text-align:center;
 max-width:150px;
}</style> <div id="preloader">
        <div class="south-load"></div>
    </div>
<header class="header-area">

<!-- Top Header Area -->
<div class="top-header-area">
    <div class="h-100 d-md-flex justify-content-between align-items-center">
       
        <div class="phone-number d-flex">
            <div class="icon">
                <img src="img/icons/phone-call.png" alt="">
            </div>
            <div class="number">
                <a href="tel:"></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Header Area -->
<div class="main-header-area" id="stickyHeader">
    <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="southNav">

            <!-- Logo -->
            <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                         <li><a href="../flat_reg.php">Register</a></li>
                          <li><a href="../booking.php">Book Flat</a></li>
                           <li><a href="../complaint.php">Complaint</a></li>
                      


<tr><td> </td>
</tr>  
        
        
                        
                               
                               
                                 <li>
                            <ul class="dropdown">
                                <li><a href="change.php">Change password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                               
                            </ul>
                        </li>
                       
                        
                    </ul>

                    

                   
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
</header>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Booking Info</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="FIRST NAME" name="uname" required>
                        </div> <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="LAST NAME" name="username" required>
                        </div>
                        <div class="row row-space">
                           <div  data-validate = "Valid email is required: ex@abc.xyz">
						
						<input  class="input--style-1" type="text" name="email" placeholder="EMAIL">
						
					</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city">
                                            <option disabled="disabled" selected="selected">CITY</option>
                                            <option>Delhi</option>
                                            <option>Mumbai</option>
                                            <option>Bangaluru</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="MOBILE" name="mobile" required>
                        </div>   <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Bed Rooms" name="room" required>
                        </div>
						
						 <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register">Submit</button>
                        </div>
                    </form>
					<?php
session_start();


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'flat');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



	$msg = "";

if(isset($_POST['register']))
{


			$query = mysqli_query($db, "INSERT INTO booking values('null','".$_POST['uname']."','".$_POST['username']."','".$_POST['email']."','".$_POST['city']."','".$_POST['mobile']."','".$_POST['room']."')");
			?>
 <script>alert('Thank You! you are now registered');</script>
 <?php
			}
		
	

?>
			
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
