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
		<script src = "../js/jquery.canvasjs.min.js"></script>
		<?php include_once '../js/loadchart/registration_group.php'?>
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
					<li class="active"><strong><mark>Registration Group</mark></strong></li>
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
			$new = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New' && `year` = '$year'") or die(mysqli_error());
			$fetch3 = $new->fetch_array();
			$relapse = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse' && `year` = '$year'") or die(mysqli_error());
			$fetch4 = $relapse->fetch_array();
			$talf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'TALF' && `year` = '$year'") or die(mysqli_error());
			$fetch5 = $talf->fetch_array();
			$taf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Treatment After Failure' && `year` = '$year'") or die(mysqli_error());
			$fetch6 = $taf->fetch_array();
			$ptou = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'PTOU' && `year` = '$year'") or die(mysqli_error());
			$fetch7 = $ptou->fetch_array();
			$tra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Transfer-in' && `year` = '$year'") or die(mysqli_error());
			$fetch8 = $tra->fetch_array();
			$oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Others' && `year` = '$year'") or die(mysqli_error());
			$fetch9 = $oth->fetch_array();
			$gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
			$fetch10 = $gra->fetch_array();
										?>
										<div class="row">
											<div class="col-md-2">
												<div class="tile tile-success">
													<div class="widget-big-int counter" data-count="<?php echo $fetch3['total']?>"><span class="num-count">0</span></div> 
													<p>New</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-info">
													<div class="widget-big-int counter" data-count="<?php echo $fetch4['total']?>"><span class="num-count">0</span></div> 
													<p>Relapse</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-danger">
													<div class="widget-big-int counter" data-count="<?php echo $fetch5['total']?>"><span class="num-count">0</span></div> 
													<p>TALF</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-primary">
													<div class="widget-big-int counter" data-count="<?php echo $fetch6['total']?>"><span class="num-count">0</span></div> 
													<p>TAF</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-default">
													<div class="widget-big-int counter" data-count="<?php echo $fetch7['total']?>"><span class="num-count">0</span></div> 
													<p>PTOU</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-warning">
													<div class="widget-big-int counter" data-count="<?php echo $fetch8['total']?>"><span class="num-count">0</span></div> 
													<p>Transfer-in</p>
												</div>                        
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="panel-body">
												<div class="col-md-12">
													<div id="registration_group" style="width: 100%; height: 425px"></div>
												</div>
											</div>
										</div>
										<hr>
									</div>
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 456px;">
											<div class="row">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Registration Group</th>
															<th><center>Number of Patients per Category</center></th>
															<th><center>View Patients</center></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>New</td>
															<td><center><strong><?php echo $fetch3['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#new">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Relapse</td>
															<td><center><strong><?php echo $fetch4['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#relapse">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Treatment After Loss Follow-up</td>
															<td><center><strong><?php echo $fetch5['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#talf">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Treatment After Failure</td>
															<td><center><strong><?php echo $fetch6['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#taf">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Previous Treatment Outcome Unknown</td>
															<td><center><strong><?php echo $fetch7['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#ptou">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Transfer-in</td>
															<td><center><strong><?php echo $fetch8['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#trans">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Others</td>
															<td><center><strong><?php echo $fetch9['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#oth">View Record</button>
																</center></td>
														</tr>
														<tr class="danger">
															<td><h4><strong>Grand Total</strong></h4></td>
															<td><center><strong><span class="label label-danger" style="font-size:12px;"><?php echo $fetch10['total']?></span></strong></center></td>
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
		<?php require 'require/tabular_registration_group.php'?>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'reports_registration_group.php?year='+year;
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