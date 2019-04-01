
<?php
session_start();

$a=$_SESSION['uname'];

if($a=="")
{
header('location:http://localhost/Freelance_Projects/REGISTRATIONS/Flat/');
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
    <title>South - Real Estate Agency Template | Home</title>

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
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
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
                                <li><a href="index.html">Home</a></li>
								 <li><a href="../flat_reg.php">Register</a></li>
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
                                        <li><a href="change.php">Change password</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                       
                                    </ul>
                                </li>
                               
                                
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>
	<div style="text-align:center;">
   <div class="sap_tabs" style="text-align:center;">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div> 
								
								<form method="post" action="changes.php">
								<table>
								<tr>
								<th>Email Id</th><td><input type="email" name="email" /></td>
								</tr>
								<tr>
								<th>Old Password</th><td><input type="password" name="op" /></td>
								</tr>
								<tr>
								<th>New Password</th><td><input type="password" name="np" /></td>
								</tr>
								<tr><td><input type="submit" value="submit" name="change"/></td>
								</table>
								
						
								</form>
	</div>
		</div></div>
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