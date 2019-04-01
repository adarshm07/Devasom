<?php
$uid = $_POST['userid'];
$pid = $_POST['pid'];
$deliver = $_POST['deliver'];


session_start();
require './database.php';
$sql = "update admin_cart set status = 'delivered' where uid='$uid' and pid='$pid';";
$result=mysqli_query($conn, $sql);

header("Location:deliver.php");

?>