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
		<?php require '../js/loadchart/treatment_outcome.php'?>
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
					<li class="active"><strong><mark>Treatment Outcome</mark></strong></li>
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
			$cured = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `year` = '$year'") or die(mysqli_error());
			$f1 = $cured->fetch_array();
			$tc = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `year` = '$year'") or die(mysqli_error());
			$f2 = $tc->fetch_array();
			$died = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `year` = '$year'") or die(mysqli_error());
			$f3 = $died->fetch_array();
			$failed = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `year` = '$year'") or die(mysqli_error());
			$f4 = $failed->fetch_array();
			$lf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to Follow-up' && `year` = '$year'") or die(mysqli_error());
			$f5 = $lf->fetch_array();
			$ne = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `year` = '$year'") or die(mysqli_error());
			$f6 = $ne->fetch_array();
			$ct = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `year` = '$year'") or die(mysqli_error());
			$f7 = $ct->fetch_array();
			$gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
			$f10 = $gra->fetch_array();
										?>
										<div class="row">
											<div class="col-md-2">
												<div class="tile tile-success">
													<div class="widget-big-int counter" data-count="<?php echo $f1['total']?>"><span class="num-count">0</span></div> 
													<p>Cured</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-info">
													<div class="widget-big-int counter" data-count="<?php echo $f2['total']?>"><span class="num-count">0</span></div> 
													<p>Treat. Completed</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-danger">
													<div class="widget-big-int counter" data-count="<?php echo $f3['total']?>"><span class="num-count">0</span></div> 
													<p>Died</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-primary">
													<div class="widget-big-int counter" data-count="<?php echo $f4['total']?>"><span class="num-count">0</span></div> 
													<p>Failed</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-default">
													<div class="widget-big-int counter" data-count="<?php echo $f5['total']?>"><span class="num-count">0</span></div> 
													<p>Lost to Follow-up</p>
												</div>                        
											</div>
											<div class="col-md-2">
												<div class="tile tile-warning">
													<div class="widget-big-int counter" data-count="<?php echo $f7['total']?>"><span class="num-count">0</span></div> 
													<p>In Treatment</p>
												</div>                        
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="panel-body">
												<div id="treatment_outcome" style="width: 100%; height: 425px"></div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
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
															<th>Treatment Outcome</th>
															<th><center>Number of Patients per Category</center></th>
															<th><center>View Patients</center></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Cured</td>
															<td><center><strong><?php echo $f1['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#cured">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Treatment Completed</td>
															<td><center><strong><?php echo $f2['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#tc">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Died</td>
															<td><center><strong><?php echo $f3['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#died">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Failed</td>
															<td><center><strong><?php echo $f4['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#failed">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Lost to Follow-up</td>
															<td><center><strong><?php echo $f5['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#ltf">View Record</button>
																</center></td>
														</tr>
														<tr>
															<td>Not Evaluated</td>
															<td><center><strong><?php echo $f6['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#ne">View Record</button>
																</center>
															</td>
														</tr>
														<tr>
															<td>Currently in Treatment</td>
															<td><center><strong><?php echo $f7['total']?></strong></center></td>
															<td><center>
																<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#ct">View Record</button>
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
		<?php require 'require/tabular_treatment_outcome.php'?>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'reports_treatment_outcome.php?year='+year;
				});
			});
		</script>
		<script>
			function oMon() {
				myWindow = window.open("filter/monthly_treatment_outcome.php?year=<?php echo $year?>", "", "width=1350, height=650");
			}
			function oQua() {
				myWindow = window.open("filter/quarter_treatment_outcome.php?year=<?php echo $year?>", "", "width=1350, height=650");
			}
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