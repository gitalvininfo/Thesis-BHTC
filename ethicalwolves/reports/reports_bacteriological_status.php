<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>BHTC-PMIS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
		<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="../js/plugins/jquery/jquery.min.js"></script>
		<script src="../js/jquery.canvasjs.min.js"></script>
		<?php include_once '../js/loadchart/bacteriological_status.php'?>
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
					<li><a href="../home.php">Home</a></li>
					<li class="#">Reports</li>
					<li><a href="../reports.php">TB Cases Report</a></li>
					<li class="active"><strong><mark>Bacteriological Status</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
									<li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
									<?php require '../require/select_year.php'?>
								</ul>
								<div class="panel-body tab-content">
									<div class="tab-pane active" id="tab-first">
										<?php
	$year = date('Y');
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$bs = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$year'") or die(mysqli_error());
			$fetch1 = $bs->fetch_array();
			$cd = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$year'") or die(mysqli_error());
			$fetch2 = $cd->fetch_array();
			$gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
			$fetch3 = $gra->fetch_array();
										?>
										<div class="row">
											<div class="col-md-9">
												<div class="panel-body">
													<div id="bacteriological_status" style="width: 100%; height: 425px"></div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="widget widget-default widget-item-icon">
													<div class="widget-item-left">
														<span class="fa fa-male"></span>
													</div>
													<div class="widget-data">
														<div class="widget-int num-count counter" data-count="<?php echo $fetch3['total']?>">0</div>
														<div class="widget-title">Total Patients</div>
														<div class="widget-subtitle">Registered Year - <?php echo $year?></div>
													</div>                            
												</div>

											</div>
											<div class="col-md-3">
												<div class="widget widget-success widget-item-icon">
													<div class="widget-item-left">
														<span class="fa fa-stethoscope"></span>
													</div>
													<div class="widget-data">
														<div class="widget-int num-count counter" data-count="<?php echo $fetch1['total']?>">0</div>
														<div class="widget-title">Bacteriologically</div>
														<div class="widget-subtitle">Confirmed</div>
													</div>                            
												</div>

											</div>
											<div class="col-md-3">
												<div class="widget widget-info widget-item-icon">
													<div class="widget-item-left">
														<span class="fa fa-hospital-o"></span>
													</div>
													<div class="widget-data">
														<div class="widget-int num-count counter" data-count="<?php echo $fetch2['total']?>">0</div>
														<div class="widget-title">Clinically</div>
														<div class="widget-subtitle">Diagnosed</div>
													</div>                            
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
											<div class="row">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Bacteriological Status</th>
															<th>
																<center>Number of Patients per Category</center>
															</th>
															<th>
																<center>View Patients</center>
															</th>
														</tr>
													</thead>
													<tbody>

														<tr>
															<td>Bacteriologically Confirmed</td>
															<td>
																<center><strong><?php echo $fetch1['total']?></strong></center>
															</td>
															<td>
																<center>
																	<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#bc">View Record</button>
																</center>
															</td>
														</tr>
														<tr>
															<td>Clinically Diagnosed</td>
															<td>
																<center><strong><?php echo $fetch2['total']?></strong></center>
															</td>
															<td>
																<center>
																	<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#cd">View Record</button>
																</center>
															</td>
														</tr>
														<tr class="danger">
															<td>
																<h4><strong>Grand Total</strong></h4>
															</td>
															<td>
																<center><strong><span class="label label-danger" style="font-size:12px;"><?php echo $fetch3['total']?></span></strong></center>
															</td>
															<td></td>
														</tr>
													</tbody>
												</table>


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/tabular_bacteriological_status.php'?>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function() {
				$("#pyear").on('change', function() {
					var year = $(this).val();
					window.location = 'reports_bacteriological_status.php?year=' + year;
				});
			});
		</script>
		<script src="../js/counter.js"></script>
		<audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
		<audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="../js/plugins.js"></script>
		<script type="text/javascript" src="../js/actions.js"></script>
	</body>

</html>