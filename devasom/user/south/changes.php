                  	   <?php

$db=mysqli_connect("localhost","root","","flat");

$pwd=$_POST['op'];
$pwdd=$_POST['np'];
$e=$_POST['email'];
$wp=md5($pwd);
$s="UPDATE  `flat`.`register` SET  `pwd` =  '$pwdd' WHERE  `register`.`email` ='$e'";
mysqli_query($db,$s);
header('location:change.php');
?>



