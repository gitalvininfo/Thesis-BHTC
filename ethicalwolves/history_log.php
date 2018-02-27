<?php
require 'logincheck.php';
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>BHTC-PMIS</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="js/plugins/jquery/jquery.min.js"></script>
		<script src = "js/jquery.canvasjs.min.js"></script>
		<?php require 'js/loadchart/medicine.php'?>

	</head>
	<body>
		<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<!-- START PAGE CONTAINER -->
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li>System Maintenance</li>
					<li class="active"><strong><mark>History Log</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Users Activity Log</strong><strong></strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
									<table class="table table-hover">
										<thead> 
											<tr class="warning">
												<th><center>User ID</center></th>
												<th><center>User</center></th>
												<th><center>Remarks</center></th>
												<th><center>Date and Time</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `history_log`, `user` where user.user_id = history_log.user_id order by log_id DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
											?>
											<tr>
												<td><center><?php echo $fetch['user_id']?></center></td>
												<td><center><?php echo $fetch['firstname']. " " .$fetch['lastname']?></center></td>
												<td><center><?php echo $fetch['action']?></center></td>
												<td><center><?php echo $fetch['date']?></center></td>
											</tr>
											<?php
			}
			$conn->close();
											?>
										</tbody>
									</table>   
								</div>
							</div>
						</div>
					</div>                    
				</div>
			</div>            
		</div>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
	</body>
</html>






