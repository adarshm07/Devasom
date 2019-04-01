<?php
$status = $_POST['status'];
$id = $_POST['idd'];
echo $status;
echo $id;
require '../database.php';
$sql = "update loan set status = '$status' where name = '$id';";
$result=mysqli_query($conn, $sql);
header("Location:loan.php");
?>