<?php
$uid = $_POST['userid'];
$pid = $_POST['pid'];
$deliver = $_POST['deliver'];
/*echo $pid;
echo "<br>";
echo $uid;
echo "<br>";
echo $deliver;
*/
if($deliver!=""){
session_start();
require '../database.php';
$sql = "update admin_cart set assign = '$deliver' where uid='$uid' and pid='$pid';";
$result=mysqli_query($conn, $sql);

$sql2 = "update admin_cart set status = 'send' where uid='$uid' and pid='$pid';";
$result2=mysqli_query($conn, $sql2);
}
header("Location:orders.php");

?>