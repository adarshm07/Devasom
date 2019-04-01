
<?php

	include 'database.php';
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		
	
		$sql="SELECT * FROM admin WHERE username='$username' and password='$password';";
		$sql1="SELECT * FROM users WHERE username='$username' and password='$password';";
		$sql3="SELECT * from employee where username='$username' and password='$password';";
		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);
		$result3 = mysqli_query($conn, $sql3);
		
		
		if (mysqli_num_rows($result) > 0)
		{
			session_start();
			$_SESSION['admin']='admin';
			header("location: ./admin/index.php"); 
		}
		
		else if(mysqli_num_rows($result1) > 0)
		{
			session_start();
			$row=mysqli_fetch_array($result1);
			$_SESSION['userid']=$row['id'];
			$jjj =  "update views set views = views+1;";
			$resss = mysqli_query($conn, $jjj);
			
			
			header("Location:./user/index.php");		
		}
		else if(mysqli_num_rows($result3)>0) {
			$row3 = mysqli_fetch_array($result3);				
				if($row3['type']=="driver") {
						session_start();
						$_SESSION['empid']=$row3['id'];
						//echo $_SESSION['empid'];
						header("Location:./employee/driver/deliver.php");		
					}
				else if($row3['type']=="Manager") {
					session_start();
					$_SESSION['empid']=$row3['id'];
						header("Location:http://localhost/devasom/devasom/devasom/employee/manager/collector.php");		
					}	
			}
		else	
		{
			session_start();
			$_SESSION['status']='Username or password is wrong';
			header("Location:index.php");		
		}
		mysqli_close($conn);
?>
