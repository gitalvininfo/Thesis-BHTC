<?php
require_once 'logincheck.php';
require ('config.php');
date_default_timezone_set('Asia/Manila');
if(ISSET($_POST['add_gene_expert'])){
	$date_examined = $_POST['date_examined'];
	$laboratory_number = $_POST['laboratory_number'];
	$visual_appearance = $_POST['visual_appearance'];
	$examined_by = $_POST['examined_by'];
	$date_released = $_POST['date_released'];
	$result = $_POST['result'];
	$lab_request_id = $_POST['lab_request_id'];
	$patient_id = $_POST['patient_id'];
	$patient_name = $_POST['patient_name'];
	$date_today=date("F j, Y");
	$month = date("M", strtotime("+8 HOURS"));
	$year = date("Y", strtotime("+8 HOURS"));

	date_default_timezone_set('Asia/Manila');	
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks = "Added result to Xpert MTB/RIF of $patient_name";

	$conn->query("INSERT INTO `gene_expert_examination` VALUES('', '$date_examined', '$laboratory_number', '$visual_appearance', '$examined_by', '$date_released', '$result', '$patient_id', '$month', '$year')") or die(mysqli_error());

	$conn->query("UPDATE `laboratory_request` SET `status` = 'Done', `date_today` = '$date_today' WHERE `patient_id` = '$patient_id' && `lab_request_id` = '$lab_request_id'") or die(mysqli_error());

	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Data Entry', '$remarks', '$date', '$time')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added the Xpert MTB/RIF Result!')</script>";
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
			$q2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[patient_id]' ORDER BY `status` DESC") or die(mysqli_error());
			$f2 = $q2->fetch_array();
									?>
									<h3 class="panel-title"><strong>Xpert MTB/RIF</strong></h3>
									<ul class="panel-controls">
										<li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                            
											<ul class="dropdown-menu">
												<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span> Refresh</a></li>
											</ul>                                        
										</li>
									</ul>
								</div>
								<div class="panel-body">
									<form role="form" class="form-horizontal" action="examination_result_form_xpert.php" method="post" enctype="multi-part/form-data" onsubmit="return confirm('Are you sure you want to add this DSSM result?');">
										<div class="col-md-12">
											<h5 class="push-up-1"><strong>Date Examined</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="hidden" class="form-control" name="lab_request_id" value="<?php echo $_GET['lab_request_id']?>"/>
													<input type="hidden" class="form-control" name="patient_id" value="<?php echo $_GET['patient_id']?>"/>
													<input type="hidden" class="form-control" name="patient_name" value="<?php echo $_GET['patient_name']?>"/>
													<input type="text" class="form-control datepicker" id="date_examined" name="date_examined" data-toggle="tooltip" data-placement="bottom" title="Date Examined" required>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Laboratory Number</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="number" class="form-control" name="laboratory_number" data-toggle="tooltip" data-placement="bottom" title="Laboratory Number" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Visual Appearance</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<select class="form-control select" name="visual_appearance" required >
														<option value = "">Select</option>
														<option value = "Salivary">Salivary</option>
														<option value = "Muco-Purulent">Muco-Purulent</option>
														<option value = "Blood-Stained">Blood-Stained</option>
													</select>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Examined By</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control" name="examined_by" data-toggle="tooltip" data-placement="bottom" title="Examined By" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Date Released</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<input type="text" class="form-control datepicker" id="date_released" name="date_released" data-toggle="tooltip" data-placement="bottom" title="Date Released" required/>
												</div>
											</div>
											<h5 class="push-up-1"><strong>Result</strong></h5>
											<div class="form-group ">
												<div class="col-md-12 col-xs-12">
													<select class="form-control select" data-live-search="true" name="result" required >
														<option value = "">Select</option>
														<option value = "T">[T] - MTB detected, Rifampicin resistance not detected</option>
														<option value = "RR">[RR] - MTB detected, Rifampicin resistance detected</option>
														<option value = "TI">[TI] - MTB detected, Rifampicin resistance indeterminate</option>
														<option value = "N">[N] - MTB not detected</option>
														<option value = "I">[I] - Invalid / No Result</option>
													</select>
												</div>
											</div><hr>
											<div class="tab-footer">
												<button type="submit" name="add_gene_expert" class="btn btn-info pull-right">Submit</button>
											</div>
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
		<script type="text/javascript" src="js/settings2.js"></script>
		<script type="text/javascript" src="js/shortcut2.js"></script> 
		<script>
			var date=new Date();
			$('#date_examined').datepicker({
				format: 'MM dd, yyyy',
				language: 'en',
				startDate : new Date('1900-01-01'),
				endDate : date
			});
		</script> 
		<script>
			var date=new Date();
			$('#date_released').datepicker({
				format: 'MM dd, yyyy',
				language: 'en',
				startDate : new Date('1900-01-01'),
				endDate : date
			});
		</script> 
	</body>
</html>