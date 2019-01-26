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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/sl.css" />

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    <style>
    .navbar-nav {
    text-transform: uppercase;
    background-color: black;
    }
    .fixed-top {
    background-color: black;
}
    .btn:hover{
      background-color: blue;
    }
    a{
      color: white;
    }
    a:hover{
      text-decoration: none;
      color: white;
    }
    html {
  scroll-behavior: smooth;
}
    </style>

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./">Devasom Board</a>
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
              <a class="nav-link" href=".././panel/complaint.php">File a Complaint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".././panel/cart-user.php">Booking</a>
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
    <center><div class="container" style="margin-top: 200px;">
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
								<tr><td><input type="submit" class="btn btn-info" value="Submit" name="change"/></td>
								</table>
								
						
								</form></div></div>

   

    <!-- Footer -->
  

    <!-- Bootstrap core JavaScript -->
    <script src=".././vendor/jquery/jquery.min.js"></script>
    <script src=".././vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
