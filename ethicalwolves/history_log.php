<?php
require_once 'logincheck.php';
require ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BHTC-PMIS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />

	</head>
	<body>
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>System Maintenance</li>
					<li class="active"><strong><mark>User's Activity Log</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>User's Activity Log</strong></h3>
								<div class="btn-group pull-right">
								</div>
							</div>
							<div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
								<div class="panel-body-table">
									<table class="table datatable">
										<thead> 
											<tr class="warning">
												<th><center>User</center></th>
												<th><center>Type</center></th>
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
												<td><center><?php echo $fetch['firstname']. " " .$fetch['lastname']?></center></td>
												<td><center><?php echo $fetch['type']?></center></td>
												<td><center><?php echo $fetch['action']?></center></td>
												<td><center><?php echo $fetch['date']. " " .$fetch['time']?></center></td>
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
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>Most Recent User Activities</strong></h3>
							</div>
							<div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
								<div class="panel-body">
									<div class="col-md-12">
										<?php
										date_default_timezone_set('Asia/Manila');
										$date_today = date('F j, Y,  g:i a');
										$recent = date('F j, Y');
										?>
										<h4><?php echo $date_today?></h4>
										<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
											$query = $conn->query("SELECT * FROM `history_log`, `user` where user.user_id = history_log.user_id && date = '$recent' order by log_id DESC limit 10") or die(mysqli_error());
											while($fetch = $query->fetch_array()){
												echo "
												<div class='messages messages-img'>
											<div class='item'>
												<div class='image'>
													<img src='assets/images/user.png'/>
												</div>
												<div class='text'>
													<div class='heading'>
														<a href='#'>".$fetch['firstname']." ".$fetch['lastname']."</a>
													<span class='date'>".$fetch['date']." ".$fetch['time']."</span>
														</div>
														".$fetch['action']."
														</div>
														</div>
														</div>
														";

											}
										?>                  
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
	</body>
</html>