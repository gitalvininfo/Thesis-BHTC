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
		$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Transaction</li>
					<li><a href="laboratory_request_table.php">Laboratory Request</a></li>
					<li class="active"><strong><mark>Add Laboratory Request</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php
	require 'config.php';
			$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$f1 = $q->fetch_array();
									?>
									<h3 class="panel-title"><strong>Laboratory Request Form</strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
									<form id="labrequest" role="form" class="form-horizontal" action="actions/add_laboratory_request.php" method="post" onsubmit="return confirm('Are you sure you want to add this laboratory request?');">
										<div class="modal-body">
											<div class="row">
												<div class="panel-body">
													<div class="col-md-12">
														<div class="col-md-6">
															<h5 class="push-up-1">Name of Collection Unit</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																<input type="hidden" class="form-control" name="patient_id" value="<?php echo $_GET['id'];?>" required>
																	<input type="hidden" class="form-control" name="patient_name" value="<?php echo $_GET['patient_name']?>"required/>
																	<select class="form-control select" data-live-search="true" name="collection_unit" required>
																		<option>Select</option>
																		<option value="Abcasa Barangay Health Station">Abcasa Barangay Health Station</option>
																		<option value="Alangilan Barangay Health Station">Alangilan Barangay Health Station</option>
																		<option value="Alijis Barangay Health Station">Alijis Barangay Health Station</option>
																		<option value="Banago Barangay Health Station">Banago Barangay Health Station</option>
																		<option value="Bata Barangay Health Station">Bata Barangay Health Station</option>
																		<option value="Cabug Barangay Health Station">Cabug Barangay Health Station</option>
																		<option value="Estefania Barangay Health Station">Estefania Barangay Health Station</option>
																		<option value="Felisa Barangay Health Station">Felisa Barangay Health Station</option>
																		<option value="Granada Barangay Health Station">Granada Barangay Health Station</option>
																		<option value="Handumanan Barangay Health Station">Handumanan Barangay Health Station</option>
																		<option value="Lopez Jaena Health Plus">Lopez Jaena Health Plus</option>
																		<option value="Mabini Health Plus">Mabini Health Plus</option>
																		<option value="Mandalagan Barangay Health Station">Mandalagan Barangay Health Station</option>
																		<option value="Mansilingan Barangay Health Station">Mansilingan Barangay Health Station</option>
																		<option value="Montevista Barangay Health Station">Montevista Barangay Health Station</option>
																		<option value="Pahanocoy Barangay Health Station">Pahanocoy Barangay Health Station</option>
																		<option value="Punta Taytay Barangay Health Station">Punta Taytay Barangay Health Station</option>
																		<option value="Singcang Barangay Health Station">Singcang Barangay Health Station</option>
																		<option value="Sum-ag Barangay Health Station">Sum-ag Barangay Health Station</option>
																		<option value="Taculing Barangay Health Station">Taculing Barangay Health Station</option>
																		<option value="Tangub Barangay Health Station">Tangub Barangay Health Station</option>
																		<option value="Villa Esperanza Barangay Health Station">Villa Esperanza Barangay Health Station</option>
																		<option value="Villamonte Barangay Health Station">Villamonte Barangay Health Station</option>
																		<option value="Vista Alegre Barangay Health Station">Vista Alegre Barangay Health Station</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Date of Request</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" />
																</div>
															</div>
															<h5 class="push-up-1">Name of Requesting Physician</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" />
																</div>
															</div>
															<h5 class="push-up-1">Date Specimen 1 Collected</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Date Sample 1 Collected" type="text" class="form-control datepicker" name="date_sample_collected" required/>
																</div>
															</div>
															<h5 class="push-up-1">Date Specimen 2 Collected</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected2"/>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<h5 class="push-up-1">Name of Specimen Collector</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Name of Specimen Collector" type="text" class="form-control" name="sample_collector" required/>
																</div>
															</div>
															<h5 class="push-up-1">Designation of Specimen Collector</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" id="formStatus"  name="designation" required>
																		<option value="">Select</option>
																		<option value="Barangay Health Worker">Barangay Health Worker</option>
																		<option value="Midwife">Midwife</option>
																		<option value="Nurse">Nurse</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Reason for Examination</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" id="formStatus"  name="reason_for_examination" required>
																		<option value="">Select</option>
																		<option value="Diagnostic">Diagnositc</option>
																		<option value="Baseline">Baseline</option>
																		<option value="Follow-up">Follow-up</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Repeat Collection</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" id="formStatus"  name="repeat_collection" required>
																		<option value="">Select</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Test Requested</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" id="formStatus"  name="test_requested" data-live-search="true" required>
																		<option>Select</option>
																		<option value="DSSM">Direct Sputum Smear Microscopy</option>
																		<option value="Xpert MTB/RIF">Xpert MTB/RIF</option>
																		<option value="TB Culture">TB Culture</option>
																		<option value="Drug Susceptible Testing">Drug Susceptible Testing</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>                        
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
											<a href="laboratory_request.php?id=<?php echo $_GET['id']?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
										</div>
									</form>
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
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	</body>

</html>