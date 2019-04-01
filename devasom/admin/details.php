	<?php require('database.php'); 
		$sql="select * from product;";
		$sql2="select views from views;";
		$sql3="select * from employee";
		$result = mysqli_query($conn, $sql);
		$result2 = mysqli_query($conn, $sql2);
		$result3 = mysqli_query($conn, $sql3);
		$row=mysqli_num_rows($result);
		$row2=mysqli_fetch_array($result2);
		$row3=mysqli_num_rows($result3);
		
		$sql4 = "select * from total_made;";
		$result4 = mysqli_query($conn, $sql4);
		$row4 = mysqli_fetch_array($result4);
	?>
	<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large"><?php echo $row; ?></div>
							<div class="text-muted">Total products</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large"><?php  echo $row4['total']/1000;echo 'K'; ?></div>
							<div class="text-muted">Amount</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $row3;  ?></div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large"><?php echo $row2['views']; ?></div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
