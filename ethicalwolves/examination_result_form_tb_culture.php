<?php
require_once 'logincheck.php';
require ('config.php');
date_default_timezone_set('Asia/Manila');	
	
if(ISSET($_POST['add_tb_culture'])){
	$method = $_POST['method'];
	$tb_culture_laboratory = $_POST['tb_culture_laboratory'];
	$laboratory_no = $_POST['laboratory_no'];
	$date_sample_collected = $_POST['date_sample_collected'];
	$date_sample_received = $_POST['date_sample_received'];
	$tb_culture_result = $_POST['tb_culture_result'];
	$remarks = $_POST['remarks'];
	$examined_by = $_POST['examined_by'];
	$reviewed_by = $_POST['reviewed_by'];
	$date_released = $_POST['date_released'];
	$lab_request_id = $_POST['lab_request_id'];
	$patient_id = $_POST['patient_id'];
	$date_today=date("F j, Y");
	$patient_name = $_POST['patient_name'];
	$month = date("M", strtotime("+8 HOURS"));
	$year = date("Y", strtotime("+8 HOURS"));

	date_default_timezone_set('Asia/Manila');	
	$date=date("F j, Y, g:i a");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$labremarks = "Added result to TB Culture of  $patient_name";

	$conn->query("INSERT INTO `tb_culture_examination` VALUES('', '$method', '$tb_culture_laboratory', '$laboratory_no', '$date_sample_collected', '$date_sample_received', '$tb_culture_result', '$remarks', '$examined_by', '$reviewed_by', '$date_released', '$patient_id', '$month', '$year')") or die(mysqli_error());

	$conn->query("UPDATE `laboratory_request` SET `status` = 'Done', `date_today` = '$date_today' WHERE `patient_id` = '$patient_id' && `lab_request_id` = '$lab_request_id'") or die(mysqli_error());

	$conn->query("INSERT INTO `history_log` VALUES('', '$id', '$labremarks', '$date')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added the TB Culture Result!');</script>";
	echo "<script>document.location='medtech_laboratory_request.php'</script>";
}
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
		<link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
	</head>

	<body class="page-container-boxed">
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>

		<div class="page-container">
			<?php require 'require/medtech_sidebar.php'?>
			<div class="page-content">
				<?php require 'require/medtech_header.php'?>
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li><a href="medtech_laboratory_request.php">Laboratory Request</a></li>
					<li class="active"><strong>Examination Result Form</strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
			$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$f = $q->fetch_array();
			$q2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$f2 = $q2->fetch_array();
									?>
									<h3 class="panel-title"><strong>TB Culture</strong></h3>
								</div>
								<div class="panel-body">
									<form role="form" class="form-horizontal" action="examination_result_form_tb_culture.php" method="post" enctype="multi-part/form-data" onsubmit="return confirm('Are you sure you want to add this TB Culture result?');">
										<div class="col-md-6">
											<h5 class="push-up-1"><strong>Method</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="hidden" class="form-control" name="lab_request_id" value="<?php echo $_GET['lab_request_id']?>"/>
													<input type="hidden" class="form-control" name="patient_id" value="<?php echo $_GET['patient_id']?>"/>
													<input type="hidden" class="form-control" name="patient_name" value="<?php echo $_GET['patient_name']?>"/>
													<input type="text" class="form-control" name="method" data-toggle="tooltip" data-placement="top" title="Method" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>TB Culture Laboratory</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="tb_culture_laboratory" data-toggle="tooltip" data-placement="top" title="TB Culture Laboratory" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Laboratory Number</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="laboratory_no" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Date Sample Collected</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control datepicker" name="date_sample_collected" data-toggle="tooltip" data-placement="top" title="Date Sample Collected YYYY-MM-DD" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Date Sample Received</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control datepicker" name="date_sample_received" data-toggle="tooltip" data-placement="top" title="Date Sample Collected YYYY-MM-DD" required/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<h5 class="push-up-1"><strong>TB Culture Result</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<select class="form-control select" name="tb_culture_result" required >
														<option value = "">Select</option>
														<option value = "Not Done">[0] - Negative</option>
														<option value = "Resistant">[MTB] - MTB detected</option>
													</select>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Remarks</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="remarks" data-toggle="tooltip" data-placement="top" title="Remarks" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Examined By</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="examined_by" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Reviewed By</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="reviewed_by" data-toggle="tooltip" data-placement="top" title="Reviewed By" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Date Released</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control datepicker" name="date_released" data-toggle="tooltip" data-placement="top" title="Date Released YYYY-MM-DD" required/>
												</div>
											</div>
											<hr>
											<button type="submit" name="add_tb_culture" class="btn btn-info pull-right">Submit</button>

										</div>
									</form>
								</div>
								<!-- END TABS -->
							</div>
							<!-- END PAGE CONTENT -->
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
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
		<script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	</body>
</html>