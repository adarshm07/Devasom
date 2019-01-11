<!DOCTYPE html>
<html lang="en">
<head>
  <title>Devasom Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  
</head>
<body>
  <div class="container-fluid" style="width: 74%;">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Devasom Board</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="text-align: right;">
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="background-image: url('./image/img4.jpg'); background-position: cover;">
  <div class="col-sm-8">
    <br>
    <h2>Devasom Board</h2>
    <br>
    <br>
    <br>
    <h4>Thiruvanathapuram</h4>
  </div>
  <div class="col-sm-4">
    <center><img src="./image/logo.png" style="margin-top: 40px; max-height: 200px;">
  </div>
</div>
<div class="container-fluid" style="border: dotted 1px black; background-color: white;">
<div class="col-sm-4" style="border: dotted 1px black;">
  <h4>Pooja Details</h4>
</div>
<div class="col-sm-4" style="border: dotted 1px black;">
<h4>Bus Timing</h4>
</div>
<div class="col-sm-4" style="border: dotted 1px black;">
<h4>Login</h4>
      <form class="login100-form validate-form" method="post" enctype="multipart/form-data" >
      <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100"></span>
						<input class="input100" type="text" name="name" placeholder="User Name">
						<span class="focus-input100"></span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100"></span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
          </div>
          
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>

						<a href="devasom_reg.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Register
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form></div>
</div>
</div>
</div>

<?php
session_start();


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'devasom');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(isset($_POST['login']))
{
$pwd=$_POST['pass'];
$wp=md5($pwd);
$s="select * from register where uname='".$_POST['name']."' and pwd='$wp' or pwd='$pwd' ";
$result=mysqli_query($db,$s);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) >= 1)
{

$_SESSION['id']=$ar[0];
$_SESSION['uname']=$_POST['name'];
if($_POST['name']=='admin' && $_POST['pass']=="123"){
header('location: adminhome.php');
}else
header('location: template/');
}
else
{
	?>
	<script type="text/javascript">
			alert("Incorrect Username/ Password");
			</script>
<?php
}}

			
?>

<script type='text/javascript'>
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
}
</script>
</body>
</html>
