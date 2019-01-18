<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=".././vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=".././css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href=".././images/favicon.png" />
</head>
  <link rel="stylesheet" href=".././vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href=".././vendors/css/vendor.bundle.addons.css">
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       
        <h1 style="color:#0095DD; font-weight:bolder;">Devasom  Board</h1>
     
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
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <?php
                                                 
                define('conString', 'mysqli:host=localhost;dbname=devasom');
                define('dbUser', 'root');
                define('dbPass', '');
                print $_SESSION['id']['name'];
            ?>
            <?php
            $a=$_SESSION['uname'];
            echo $a;?> 
            </a>
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
            <a class="nav-link" href="./users.php">
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
            <a class="nav-link" href="complaint.php">
              <i class="menu-icon mdi mdi-user"></i>
              <span class="menu-title">File a Complaint</span>
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
    <div class="container" style="margin: 20px;">
    <div class="jumbotron">
    <?php
//Establishing Connection with Server
$connection = mysqli_connect("localhost", "root", "");

//Selecting Database from Server
$db = mysqli_select_db($connection, "devasom");
if(isset($_POST['submit'])){

//Fetching variables of the form which travels in URL

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$cname = $_POST['cname'];
$subject = $_POST['subject'];
$description = $_POST['description'];

if($name !=''||$description !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "insert into complaint(name, email, number, cname, subject, description) values ('$name', '$email', '$number', '$cname', '$subject', '$description')");
echo "<div class='alert alert-info'>
<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
Data Inserted successfully.</div>";
}
else{
echo "<div class='alert alert-info'>
<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
Insertion Failed <br/> Some Fields are Blank.</div>";
}

}
//Closing Connection with Server
mysqli_close($connection);
?>
        <form action="complaint.php" method="post">
    <div class="col-sm-12">
            <input type="text" name="name" class="form-control margin-bottom-10 error-msg" placeholder="Name"><br>
            <input type="text" name="email" class="form-control margin-bottom-10 error-msg" placeholder="Email"><br>
            <input type="text" name="number" class="form-control margin-bottom-10 error-msg" placeholder="Number"><br>
            <?php
            include ('.././config/database.php');
            $result = mysqli_query($conn, "SELECT * FROM `cat` ORDER BY `cat`.`cname` ASC");
            echo "<select name='cname' class='form-control margin-bottom-10 error-msg'>";
            echo "<option>Select Category</option>";
            while($row = mysqli_fetch_array($result))
                {
                echo "<option name='cname'>" . $row['cname'] . "</option>";
                }
                echo "</select><br>";
                mysqli_close($conn);
            ?>
            <input type="text" name="subject" class="form-control margin-bottom-10 error-msg" placeholder="Subject"><br>
            <textarea rows="5" cols="25" placeholder="Complaint" class="form-control margin-bottom-10 error-msg" name="description"></textarea><br>
            <br>
            <input class="btn-lg btn-success" style="float: right;" type="submit" name="submit" value="Submit" />
</div>
</div>
</form>