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
					<li><a href="patient_treatment_table.php">Treatment</a></li>
					<li class="active"><strong><mark>Clinical Findings</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php
	require 'config.php';
			$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$f1 = $q->fetch_array();
									?>
									<h3 class="panel-title"><strong>New Clinical Findings</strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
									<form role="form" class="form-horizontal" action="actions/clinical_findings.php" method="post" onsubmit="return confirm('Are you sure you want to add new clinical findings?');">
										<div class="modal-body">
											<div class="row">
												<div class="panel-body">
													<div class="block">
														<table class="table table-hover">
															<tbody>
																<tr>
																	<td>1. Unexplained fever greater than 2 weeks</td>
																	<input type="hidden" class="form-control" name="patient_id" value="<?php echo $_GET['id'];?>" required>
																	<td><center> <label class="check"><input type="radio" class="iradio" value="✓" name="q1" required/> Yes</label></center></td>
																	<td><center><label class="check"><input type="radio" class="iradio" value="X" name="q1" required/> No </label></center></td>
																</tr>
																<tr>
																	<td>2. Unexplained cough greater than 2 weeks</td>
																	<td><center> <label class="check"><input type="radio" class="iradio" value="✓" name="q2" required/> Yes</label></center></td>
																	<td><center><label class="check"><input type="radio" class="iradio" value="X" name="q2" required/> No </label></center></td>
																</tr>
																<tr>
																	<td>3. Unimproved general well-being</td>
																	<td><center> <label class="check"><input type="radio" class="iradio" value="✓" name="q3" required/> Yes</label></center></td>
																	<td><center><label class="check"><input type="radio" class="iradio" value="X" name="q3" required/> No </label></center></td>
																</tr>
																<tr>
																	<td>4. Poor appetite</td>
																	<td><center> <label class="check"><input type="radio" class="iradio" value="✓" name="q4" required/> Yes</label></center></td>
																	<td><center><label class="check"><input type="radio" class="iradio" value="X" name="q4" required/> No </label></center></td>
																</tr>
																<tr>
																	<td> 5. Positive PE findings for Extra-Pulmonary TB</td>
																	<td><center> <label class="check"><input type="radio" class="iradio" value="✓" name="q5" required/> Yes</label></center></td>
																	<td><center><label class="check"><input type="radio" class="iradio" value="X" name="q5" required/> No </label></center></td>
																</tr>
																<tr>
																	<td>6. Weight in Kilogram</td>
																	<td colspan="2"><center><input style="text-align:right" data-toggle="tooltip" data-placement="bottom" title="Weight in kg." type="number" class="form-control" name="weight" required/></center></td>
																</tr>
															</tbody>
														</table>
														<h6 class="push-up-20"> 7. Check the appropriate side effects</h6>
														<div class="form-group">
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Itchiness"/> Itchiness</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Skin Rashes"/> Skin Rashes</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Vomiting"/> Vomiting</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Abnormal Pain"/> Abnormal Pain</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Joint Paints"/> Joint Paints</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Numbness"/> Numbness</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Yellowing of Sclerae and skin"/> Yellowing of Sclerae and skin</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Visual Disturbance"/> Visual Disturbance</label>
															</div>
															<div class="col-md-4">                                    
																<label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Hearing Disturbance"/> Hearing Disturbance</label>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-info" name="add_new_clinical"><span class="fa fa-check"></span>Save</button>
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