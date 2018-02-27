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
					<li class="active"><strong><mark>Registration</mark></strong></li>
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
									<h3 class="panel-title"><strong>Registration Form</strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
									<form role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to register this patient?');">
										<div class="modal-body">
											<div class="row">
												<div class="panel-body">
													<div class="col-md-12">
														<div class="col-md-6">
															<h5 class="push-up-1">Registration Group</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input type="hidden" class="form-control" name="patient_id" value="<?php echo $_GET['id'];?>" required>
																	<input type="hidden" class="form-control" name="patient_name" value="<?php echo $_GET['patient_name']?>"required/>
																	<select class="form-control select" name="registration_group" data-live-search="true" required>
																		<option>Select</option>
																		<option value="New">New</option>
																		<option value="Relapse">Relapse</option>
																		<option value="Treatment After Failure">Treatment After Failure</option>
																		<option value="Treatment After Loss Follow-up">Treatment After Loss Follow-up</option>
																		<option value="PTOU">PTOU</option>
																		<option value="Transfer-in">Transfer-in</option>
																		<option value="Others">Others</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Source of Patient</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="source_of_patient" data-live-search="true" required>
																		<option>Select</option>
																		<option value="Public Health Center">Public Health Center</option>
																		<option value="Private Hospitals">Private Hospitals/Clinics/NGO's</option>
																		<option value="Community">Community</option>
																		<option value="Other Government Facilities">Other Government Facilities</option>
																	</select>
																</div>
															</div>

															<h5 class="push-up-1">Bacteriological Status</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="bacteriological_status" required>
																		<option>Select</option>
																		<option value="Bacteriologically Confirmed">Bacteriologically Confirmed</option>
																		<option value="Clinically Diagnosed">Clinically Diagnosed</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Classification of Tuberculosis</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="classification_of_tb" required>
																		<option>Select</option>
																		<option value="Pulmonary">Pulmonary</option>
																		<option value="Extra-pulmonary">Extra-pulmonary</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">BCG Scar</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="bcg_scar" required>
																		<option>Select</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<h5 class="push-up-1">History of TB</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="history" required>
																		<option>Select</option>
																		<option value="Yes">Yes</option>
																		<option value="No">No</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Duration</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="duration" required>
																		<option>Select</option>
																		<option value="None">None</option>
																		<option value="Less than 1 month">Less than 1 month</option>
																		<option value="1 month or more">1 month or more</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Treatment Regimen</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" name="treatment_regimen_category" data-live-search="true" required>
																		<option>Select</option>
																		<option value="Category I - 2HRZE/4HR">Category I - 2HRZE/4HR</option>
																		<option value="Category Ia - 2HRZE/10HR">Category Ia - 2HRZE/10HR</option>
																		<option value="Category II - 2HRZES/1HRZE/5HRE">Category II - 2HRZES/1HRZE/5HRE</option>
																		<option value="Category IIa - 2HRZES/1HRZE/9HRE">Category IIa - 2HRZES/1HRZE/9HRE</option>
																	</select>
																</div>
															</div>
															<h5 class="push-up-1">Treatment Partner Name</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" required/>
																</div>
															</div>
															<h5 class="push-up-1">Designation Treatment Partner</h5>
															<div class="form-group ">
																<div class="col-md-12 col-xs-12">
																	<select class="form-control select" id="formStatus"  name="designation_treatment_partner" required>
																		<option value="">Choose Designation...</option>
																		<option value="Barangay Health Worker">Barangay Health Worker</option>
																		<option value="Midwife">Midwife</option>
																		<option value="Nurse">Nurse</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-info" name="register_patient"><span class="fa fa-check"></span>Register</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
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