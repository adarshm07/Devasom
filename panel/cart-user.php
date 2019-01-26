<?php
session_start();

$a=$_SESSION['username'];

if($a=="")
{
header('location: .././login');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devasom Board</title>

    <!-- Bootstrap core CSS -->
    <link href="./../template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/sl.css" />

    <!-- Custom styles for this template -->
    <link href=".././template/css/one-page-wonder.min.css" rel="stylesheet">
    <link href=".././template/css/font-awesome.css" rel="stylesheet">
    <style>
    .navbar-nav {
    text-transform: uppercase;
    }
    a:hover{
      text-decoration: none;
      color: white;
    }
    </style>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href=".././template">Devasom Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		    <li class="nav-item" style="color:#FFFFFF; font-weight:bolder;">

            </li>
            
			<li>
            <li class="nav-item">
              <a class="nav-link" href="change.php">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".././panel/complaint.php">File a Complaint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./cart-user.php">Booking</a>
            </li>
            <li class="nav-item" style="color:white; margin:6px;">
            <?php
            $a=$_SESSION['username'];
            echo $a;?>
            </li>
            <li class="nav-item">
            <?php
            include_once('.././login/db.php');
              if (isset($_SESSION['username'])) : ?>
              <a class="nav-link" href=".././login/index.php?logout='1'" style="color: red;">Log Out</a>
              <?php endif ?> 
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    <section>
      <div class="container" id="more">
      <button class="btn-lg btn"><a href="view_cart_user.php"  id="cart-info" title="View Cart"> Cart <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				
			}
			?></a></button>
      <center> 
      <table style="margin: 40px; border: 0px solid;">
<tr><td style="border-bottom: 1px solid; text-align: center;">Product</td>
<td style="border-bottom: 1px solid; text-align: center;">Price</td>
<td style="border-bottom: 1px solid; text-align: center;">Product Image</td>
<td style="border-bottom: 1px solid; text-align: center;">Quantity</td>
<td style="border-bottom: 1px solid; text-align: center;">Buy</td>
</tr>
                        <?php
                        include_once("inc/db_connect.php");
                        include("inc/config.inc.php"); 
                        
                        ?>
                        <link href="style/style.css" rel="stylesheet" type="text/css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                        <script type="text/javascript" src="script/cart.js"></script>
                        <?php
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<tr><div class="col-sm-6">
				<form class="product-form" style="text-align:center;">
					<td style="padding: 60px; border-bottom: 1px solid;"><h4><?php echo $row["product_name"]; ?></h4></td>
					<td style="padding: 60px; border-bottom: 1px solid;"><div><?php echo $currency; echo $row["product_price"]; ?></div></td>
                    <td style="padding-right-left: 60px; border-bottom: 1px solid;"><div><img  class="product_image"  src="./images/<?php echo $row["product_image"]; ?>"></div></td>    
                    <td style="padding: 60px; border-bottom: 1px solid;"><div style="text-align:center;">
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>
						<div><input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>"></td></div>
						<div class="col-sm-6"><td style="padding: 20px; border-bottom: 1px solid;"><div style="text-align:center;"><button class="btn btn-info" type="submit" onClick="window.location.reload();">Add to Cart</button></div></td>
					</div>
				</form>
			<?php } ?>
			</tr>
			</table>
      </center>
                        </div>
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