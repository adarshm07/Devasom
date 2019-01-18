<?php
 
//mysqli Procedural
$conn = mysqli_connect("localhost","root","","devasom");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>