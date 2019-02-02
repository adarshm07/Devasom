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
    <div style="background-color: #031a31; width: 100%;">
    <div class="container" style="background-color: blue;">
    <div class="jumbotron" style="margin-bottom: 2rem;
    background-color: #031a31;
    width: 50%;
    margin-left: 220px;">
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
            <div id="more">
            <input type="text" name="subject" class="form-control margin-bottom-10 error-msg" placeholder="Subject"><br>
            <textarea rows="5" cols="25" placeholder="Complaint" class="form-control margin-bottom-10 error-msg" name="description"></textarea><br>
            <br>
            <input class="btn btn-success" style="float: right;" type="submit" name="submit" value="Submit" />
            </div>
</div>
</div>
</form>