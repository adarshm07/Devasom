<?php
$status = $_POST['status'];
$id = $_POST['idd'];
echo $status;
echo $id;
require '../database.php';
$sql = "update leaves set status = '$status' where id = '$id';";
$result=mysqli_query($conn, $sql);
header("Location:leave.php");
?>
