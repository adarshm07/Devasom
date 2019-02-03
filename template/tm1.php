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
    }
    .btn:hover{
      background-color: blue;
    }
    a:hover{
      text-decoration: none;
      color: white;
    }
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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

    <header class="masthead text-center text-white" style="background-image:url(image/img2.jpg); background-repeat:no-repeat; height:600px;">
      <div class="masthead-content" >
        <div class="container" style="color:#6666FF;">
          <h2 class="masthead-heading mb-0" style="color: white; text-align: left; font-size: 50px;">Welcome to Sabarimala Devasom</h2>
          <h4 class="masthead-subheading mb-0" style="color: white; text-align: left; font-size: 24px;">Thrivanathapuram</h4>
          <br>
          <br>
          <br>
          <br>
  <center>
  <select class="form-control" style="width: 200px;" onchange="javascript:location.href = this.value;">
    <option class="form-control">Select</option>
    <option name="tm1" value="./template/tmp1.php" class="form-control">Temple 1</option>
    <option name="tm2" value="./template/tmp2.php" class="form-control">Temple 2</option>
    <option name="tm3" value="./template/tmp3.php" class="form-control">Temple 3</option>
    <option name="tm4" value="./template/tmp4.php" class="form-control">Temple 4</option>
  </select>
  </center>
        </div>
      </div>
  
    </header>

    <section>
      <div class="container" id="more">
        <div class="jumbotron">
        <center><h2 class="masthead-heading mb-0">Swami Saranam...</h2></center>
        </div>
</div>
        <?php
// start session
?>
  <section>
      <div class="container">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>France</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/img3.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Let your body be your holly temple </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/2.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Let thy holly temple be thy body</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="./image/1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Praying is a perfect peace</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
