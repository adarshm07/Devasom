<?php
$uid = $_POST['userid'];
$pid = $_POST['pid'];
require '../database.php';
$sql = "delete from admin_cart where uid='$uid' and pid='$pid';";
$result=mysqli_query($conn, $sql);
header("Location:orders.php");
?>