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
		<script src="js/plugins/jquery/jquery.min.js"></script>
		<script src="js/jquery.canvasjs.min.js"></script>
		<?php require 'js/loadchart/intensive_phase_ipt.php'?>

	</head>
	<body>
		<?php 
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<!-- START PAGE CONTAINER -->
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<?php
	$year = date('Y');
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			require 'config.php';
			$q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
			$f = $q->fetch_array();
			$q1 = $conn->query("SELECT `ipt_no` FROM `registration_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$f1 = $q1->fetch_array();
					?>
					<li><a href="home.php">Home</a></li>
					<li class="#">Transaction</li>
					<li class="#"><a href="patient_treatment_table.php">Treatment</a></li>
					<li class="active"><strong><mark><?php echo $_GET['name']?></mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="#tab-first" role="tab" data-toggle="tab">Intensive Phase</a></li>
									<li   class="active"><a href="#tab-second" role="tab" data-toggle="tab">Overview</a></li>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<a href="#end_treatment<?php echo $f['patient_id'];?>" data-target="#end_treatment<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md">End Treatment</a>
										</div>
									</div>
								</ul>
								<div class="panel-body tab-content">
									<div class="tab-pane" id="tab-first">
										<div class="row">
											<div class="col-md-4">
												<div class="panel-group accordion">
													<div class="panel panel-primary">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#accOneColOne">
																	Present Days
																</a>
															</h4>
														</div>
														<div class="panel-body panel-body-open" id="accOneColOne">
															<?php
															$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
															$q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
															$f = $q->fetch_array();
															?>
															<form role="form" class="form-horizontal" method="post" onsubmit="return confirm('Are you sure you want to add this dosage?');">
																<h6 class="push-up-1">Date Taken</h6>
																<div class="form-group ">
																	<div class="col-md-12 col-xs-12">
																		<input type="text" class="form-control datepicker"  name="date_taken" id="date_taken" required/>
																	</div>
																</div><hr>
																<h6 class="push-up-5">Dosage</h6>
																<div class="form-group ">
																	<div class="col-md-12 col-xs-12">
																		<input type="number" class="form-control" name="dosage" required/>
																	</div>
																</div> <hr>
																<button type="submit" name="add_intensive_phase" class="btn btn-primary pull-right">Save</button>
																<?php require_once 'add_intensive_phase_ipt.php' ?>
															</form>
														</div>
													</div>
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#accOneColTwo">
																	Missed Days
																</a>
															</h4>
														</div>
														<div class="panel-body" id="accOneColTwo">
															<form role="form" class="form-horizontal" method="post" method="post" onsubmit="return confirm('Are you sure you want to add the missed date?');">
																<h6 class="push-up-1">Date Taken</h6>
																<div class="form-group ">
																	<div class="col-md-12 col-xs-12">
																		<input type="text" class="form-control datepicker"  name="date_missed" id="date_missed" required/>
																	</div>
																</div><hr>
																<button type="submit" name="add_absent_intensive" class="btn btn-primary pull-right">Save</button>
																<?php require_once 'add_intensive_phase_ipt.php' ?>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="panel panel-primary">
													<div class="panel-body list-group list-group-contacts scroll" style="height: 434px;">
														<div class="panel-body">
															<table class="table datatable">
																<thead>
																	<tr>
																		<th><center>Date Taken/Missed</center></th>
																		<th><center>Dosage Taken</center></th>
																		<th><center>Remarks</center></th>
																	</tr>
																</thead>
																<tbody>
																	<?php
	require 'config.php';
																$query = $conn->query("SELECT * FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());

																while($fetch = $query->fetch_array()){
																	if($fetch['remarks'] == 'Absent'){
																		echo 
																			"<tr class='danger'>
                                                            <td><center> ".$fetch['date_taken']. "</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td><strong><center>Missed</center></strong></td>
                                                        </tr>";

																	}
																	else
																	{
																		echo
																			"<tr class='success'>
                                                            <td><center> ".$fetch['date_taken']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td><strong><center>".$fetch['remarks']."</center></strong></td>
                                                        </tr>";
																	}
																}
																	?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="tab-pane active" id="tab-second">
										<div class="col-md-12">
											<div class="panel panel-primary">
												<div class="panel-body">
													<div id="intensive_ipt" style="width: 100%; height: 425px"></div>
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
		</div>
		<?php require 'require/modals/end_treatment_ipt.php'?>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script>
			var date=new Date();
			$('#date_taken').datepicker({
				format: 'MM dd, yyyy',
				language: 'en',
				startDate : new Date('1900-01-01'),
				endDate : date
			});
		</script>
		<script>
			var date=new Date();
			$('#date_missed').datepicker({
				format: 'MM dd, yyyy',
				language: 'en',
				startDate : new Date('1900-01-01'),
				endDate : date
			});
		</script>
	</body>

</html>