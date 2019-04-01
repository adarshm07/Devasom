<?php
session_start();
		$type = $_POST['loantype'];
		$loanmonth = $_POST['date'];
		$id = $_SESSION['empid'];
 /*$folder_path = 'uploads/';

    $filename = basename($_FILES['healthfile']['name']);
    $newname = $folder_path . $filename;

    if ($_FILES['healthfile']['type'] == "application/pdf")
    {
        if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname))
        {
				$fileresult = mysql_query($filesql);
        }
    }
    */
    include '../../database.php';
  	$sql = "insert into leaves (type,date,status,id) values ('$type','$loanmonth','Applied','$id')"; 
       $result = mysqli_query($conn, $sql); 
    	Header("Location:leave.php");
?>
