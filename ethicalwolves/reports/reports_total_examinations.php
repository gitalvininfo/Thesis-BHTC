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
		<?php include_once '../js/loadchart/medtech_examination_category.php'?>
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
					<li>Reports</li>
					<li><a href="../examination_reports_overview.php">Examination Reports</a></li>
					<li class="active"><strong><mark>Total Number of Examinations Conducted Year <?php echo $year?></mark></strong></li>
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
										<?php require 'require/widgets_total_examinations.php'?>
										<hr>
										<div class="row">
											<div class="panel-body">
												<div id="examination" style="width: 100%; height: 425px"></div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 456px;">
											<div class="row">
												<div class="panel-heading">
													<div class="btn-group pull-left">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Filter By <span class="caret"></span></a>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#" onclick="oMon()">Monthly</a></li>
																<li><a href="#" onclick="oQua()">Quarter</a></li>
															</ul>
														</div>
													</div>
												</div>
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Examinations Conducted</th>
															<th><center>Number of Frequencies Examination Conducted</center></th>
															<th><center>View Patients</center></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Direct Sputum Smear Microscopy</td>
															<td><center><strong><?php echo $f1['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#dssm">View Record</button>
																</center>
															</td>
														</tr>
														<tr>
															<td>Xpert MTB/RIF</td>
															<td><center><strong><?php echo $f2['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#xpert">View Record</button>
																</center>
															</td>
														</tr>
														<tr>
															<td>TB Culture</td>
															<td><center><strong><?php echo $f3['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#tbculture">View Record</button>
																</center>
															</td>
														</tr>
														<tr>
															<td>Drug Susceptible Test</td>
															<td><center><strong><?php echo $f4['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#dst">View Record</button>
																</center>
															</td>
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
		<?php require 'require/tabular_examination_category.php'?>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'reports_total_examinations.php?year='+year;
				});
			});
		</script>
		<script>
			function oMon() {
				myWindow = window.open("filter/monthly_exam.php?year=<?php echo $year?>", "", "width=1350, height=650");
			}
			function oQua() {
				myWindow = window.open("filter/quarter_exam.php?year=<?php echo $year?>", "", "width=1350, height=650");
			}
		</script>
		<script src="../js/counter.js"></script>
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