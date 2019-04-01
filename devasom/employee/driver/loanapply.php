<?php
session_start();
		$type = $_POST['loantype'];
		$loanmonth = $_POST['loanmonth'];
		$file = $_POST['file'];
		$id = $_SESSION['empid'];
		$date = date('d/m/y');
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
   	$sql = "insert into loan (type,name,month,date,file,status) values ('$type','$id','$loanmonth','$date','$file','Applied')"; 
		$result = mysqli_query($conn, $sql); 
		
		header("Location:loan.php");
    	
?>
