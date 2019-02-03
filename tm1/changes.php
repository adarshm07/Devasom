                  	   <?php

$db=mysqli_connect("localhost","root","","devasom");

$pwd=$_POST['op'];
$pwdd=$_POST['np'];
$email=$_POST['email'];
$wp=md5($pwd);
$wpp=md5($pwdd);
$s="UPDATE  `register` SET  `pwd` =  '$wpp' WHERE  `register`.`email` ='$email'";
mysqli_query($db,$s);
header('location:change.php');
?>