
<?php
session_start();

$a=$_SESSION['uname'];

if($a=="")
{
header('location:http://localhost/Flat/Flat');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
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

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
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
								
								 
								   <li><a href="../complaint.php">Complaint</a></li>
                                   <li><a href="products.php">E-kart</a></li>
                                   <li><a href="help.php">Helpline</a></li>
                                  
                               <?Php
							
							$r=$_SESSION['uname'];
							
							$con=mysqli_connect("localhost","root","","flat");
 $fetchqry = "SELECT image FROM `register` where uname='$r'";
	$result=mysqli_query($con,$fetchqry);
	$num=mysqli_num_rows($result);
	if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>

 
      <tr><td><img src="image/<?php echo $row['image']?>" style="width:50px;  border-radius: 50%;" /> </td>
</tr>  
				
				
								
                                       
                                       
										 <li><a href="#"><?php echo $r; }}?></a>
                                         
                                    <ul class="dropdown">
                                        <li><a href="change.php">Change password</a></li><br>
                                        <br><li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                
										 <li><a href="#">Services</a>
                                         
                                         <ul class="dropdown">
                                             <li><a href="taxi.php">Taxi</a></li>
                                             <li><a href="electrical.php">Electrical</a></li>
                                             <li><a href="laundry.php">laundry</a></li>
                                            
                                         </ul>
                                     </li>
                                    
                               
                                
                            </ul>

                            

                            <!-- Search Button -->
                           
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    
     <br>
     <br> <br> <br> <br> <br> <br> <br> <br> <br>
       <form method="POST" class=" form-horizontal">
       <div class="container">
          <table class="conainer table table-responsive table-hover table-condensed">
              <tr class="info">
                  <td colspan="2">TAXI BOOKING</td>
              </tr>
              <tr class="danger">
                  <td>user name</td>
                  <td><input  type="text" name="qw"></td>
              </tr>
              <tr class="info">
                    <td>Flat number</td>
                    <td><input  type="text" name="qe" ></td>
                </tr>
                <tr class="danger">
                        <td>mobile number</td>
                        <td><input type="text" name="qr"></td>
                    </tr>
                    <tr class="info">
                            <td>date</td>
                            <td><input class="form-control" type="date" name="qt"></td>
                        </tr>
                        <tr class="danger">
                                <td>vehicle</td>
                                <td><select name="qy">
                                       <option value="">select</option>
                                        <option value="swift" >swift</option>
                                        <option value="innova" >innova</option>
                                        <option value="creta" >creta</option>
                                        <option value="baleno" >baleno</option>
                                    </select></td>
                            </tr>
                            <tr class="success">
                                <td><input  type="submit" value="submit" name="qu"></td>
                                <td><input type="reset"></td>
                            </tr>
          </table>
          </div>
       </form>       

    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Integer nec bibendum lacus. Suspen disse dictum enim sit amet libero males uada feugiat. Praesent malesuada.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> </h6>
                                <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832, Los Angeles, CA</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                          

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                           
                            
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
y Rahul Jagadeesh M <i class="fa fa-heart-o" aria-hidden="true"></i>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'flat');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if(isset($_POST['qu']))
{


			$query = mysqli_query($db, "INSERT INTO taxi values('null','".$_POST['qw']."','".$_POST['qe']."','".$_POST['qr']."','".$_POST['qt']."','".$_POST['qy']."')");
			?> 
<script>alert('Thank You! Taxi booked');</script>
 <?php
		 header('location:http://localhost/Flat/Flat/south/');
        }
		
           
?>