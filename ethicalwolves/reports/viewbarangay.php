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
		<?php include_once '../js/loadchart/overview_barangay.php'?>
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
					<li class="active"><strong><mark>Barangay Population</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="btn-group pull-right">
										<div class="pull-left">
											<a href="reports_barangay_population.php" class="btn btn-default btn-sm">Back</a>
											<a href="#" onclick="openGeo()" class="btn btn-default btn-sm">Geo Tagging</a>
										</div>
									</div> 
								</div>
								<div class="panel-body">
									<div id="patient_population" style="width: 100%; height: 400px"></div>
								</div>

							</div>
						</div>
						<div class="col-md-12">
							<div class="panel panel-primary">
								<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
			$q1 = $conn->query("SELECT *, count(*) as total FROM `patient`, `registration` WHERE registration.patient_id = patient.patient_id && `barangay` = '$_GET[id]' && registration.year = '$_GET[year]' ") or die(mysqli_error());
			$fe2 = $q1->fetch_array();
								?>
								<div class="panel-body">
									<h4 class="text-title">Patients Registered - Year <?php echo $year?></h4>
									<div class="row">
										<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
										$query = $conn->query("SELECT * FROM `patient`, `registration` WHERE registration.patient_id = patient.patient_id && registration.year = '$_GET[year]' && `barangay` = '$_GET[id]' LIMIT 12") or die(mysqli_error());
										while($fetch = $query->fetch_array()){
											echo 
												"<div class='col-md-1 col-xs-1'>
													<a href='#' class='friend'>
													<img src='../assets/images/patient.ico'/>
													<span>".$fetch['patient_name']."</span>
													</a>
													</div>"
												;
										}   
										?>
									</div>
									<a href="#view<?php echo $_GET['id'];?>" data-target="#view<?php echo $_GET['id'];?>" data-toggle="modal" >See Full List </a>
								</div>
							</div>                            
						</div>
					</div>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Treatment Outcome</h3>
										</div>
										<div class="panel-body">
											<?php
											$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
											$cur = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Currently in Treatment'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f8 = $cur->fetch_array();

											$cur = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Cured'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f1 = $cur->fetch_array();

											$tc = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Treatment Completed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f2 = $tc->fetch_array();

											$die = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Died'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f3 = $die->fetch_array();

											$fai = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Failed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f4 = $fai->fetch_array();

											$ltf = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Lost to Follow-up'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f5 = $ltf->fetch_array();

											$ne = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Not Evaluated'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f6 = $ne->fetch_array();

											$exc = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.status = 'Excluded from Cohort'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
											$f7 = $exc->fetch_array();

											?>
											<ul class="list-group border-bottom">
												<li class="list-group-item">Currently in Treatment<span class="badge badge-danger"><?php echo $f8['total']?></span></li>
												<li class="list-group-item">Cured<span class="badge badge-danger"><?php echo $f1['total']?></span></li>
												<li class="list-group-item">Treatment Completed<span class="badge badge-danger"><?php echo $f2['total']?></span></li>
												<li class="list-group-item">Died<span class="badge badge-danger"><?php echo $f3['total']?></span></li>
												<li class="list-group-item">Failed<span class="badge badge-danger"><?php echo $f4['total']?></span></li>
												<li class="list-group-item">Lost to Follow-up<span class="badge badge-danger"><?php echo $f5['total']?></span></li>
												<li class="list-group-item">Not Evaluated<span class="badge badge-danger"><?php echo $f6['total']?></span></li>
												<li class="list-group-item">Excluded from Cohort<span class="badge badge-danger"><?php echo $f7['total']?></span></li>
											</ul>                                
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Registration Group</h3>
										</div>
										<div class="panel-body">
											<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$new = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'New'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f1 = $new->fetch_array();
													$rel = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'Relapse'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f2 = $rel->fetch_array();
													$talf = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'Treatment After Failure'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f3 = $talf->fetch_array();
													$taf = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'Treatment After Loss Follow-up'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f4 = $taf->fetch_array();
													$ptou = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'PTOU'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f5 = $ptou->fetch_array();
													$trans = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.registration_group = 'Transfer-in'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f6 = $trans->fetch_array();

											?>
											<ul class="list-group border-bottom">
												<li class="list-group-item">New<span class="badge badge-success"><?php echo $f1['total']?></span></li>
												<li class="list-group-item">Relapse<span class="badge badge-success"><?php echo $f2['total']?></span></li>
												<li class="list-group-item">TALF<span class="badge badge-success"><?php echo $f3['total']?></span></li>
												<li class="list-group-item">TAF<span class="badge badge-success"><?php echo $f4['total']?></span></li>
												<li class="list-group-item">PTOU<span class="badge badge-success"><?php echo $f5['total']?></span></li>
												<li class="list-group-item">Transfer-In<span class="badge badge-success"><?php echo $f6['total']?></span></li>
											</ul>                                
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Source of Patient</h3>
										</div>
										<div class="panel-body">
											<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$pub = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.source_of_patient = 'Public Health Center'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f1 = $pub->fetch_array();
													$pri = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.source_of_patient = 'Private Hospitals'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f2 = $pri->fetch_array();
													$com = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.source_of_patient = 'Community'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f3 = $com->fetch_array();
													$oth = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.source_of_patient = 'Other Government Facilities'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f4 = $oth->fetch_array();

											?>
											<ul class="list-group border-bottom">
												<li class="list-group-item">Public Health Center<span class="badge badge-info"><?php echo $f1['total']?></span></li>
												<li class="list-group-item">Private Hospitals<span class="badge badge-info"><?php echo $f2['total']?></span></li>
												<li class="list-group-item">Community<span class="badge badge-info"><?php echo $f3['total']?></span></li>
												<li class="list-group-item">Other Government Facilities<span class="badge badge-info"><?php echo $f4['total']?></span></li>
											</ul>                                
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title"> Bacteriological Status</h3>
										</div>
										<div class="panel-body">
											<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$bac = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.bacteriological_status = 'Bacteriologically Confirmed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f1 = $bac->fetch_array();
													$cli = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.bacteriological_status = 'Clinically Diagnosed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f2 = $cli->fetch_array();
											?>
											<ul class="list-group border-bottom">
												<li class="list-group-item">Bacteriologically Confirmed<span class="badge badge-default"><?php echo $f1['total']?></span></li>
												<li class="list-group-item">Clinically Diagnosed<span class="badge badge-default"><?php echo $f2['total']?></span></li>
											</ul>                                
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Classification of TB</h3>
										</div>
										<div class="panel-body">
											<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$pul = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.classification_of_tb = 'Pulmonary'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f1 = $pul->fetch_array();
													$ext = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.classification_of_tb = 'Extra-pulmonary'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
													$f2 = $ext->fetch_array();
											?>
											<ul class="list-group border-bottom">
												<li class="list-group-item">Pulmonary<span class="badge badge-default"><?php echo $f1['total']?></span></li>
												<li class="list-group-item">Extra-pulmonary<span class="badge badge-default"><?php echo $f2['total']?></span></li>
											</ul>                                
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- View Patient-->
		<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$query = $conn->query("SELECT * FROM `patient`") or die(mysqli_error());
													while($fetch = $query->fetch_array()){
		?>
		<div id="view<?php echo $_GET['id']?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="largeModalHead">Barangay <?php echo $_GET['id']?></h4>
					</div>
					<form role="form" class="form-horizontal" action="edit_query.php" method="post">
						<div class="modal-body">
							<div class="panel-body">
								<table class="table datatable">
									<thead>
										<tr>
											<th><center>TB Case No</center></th>
											<th><center>Patient Name</center></th>
											<th><center>Age</center></th>
											<th><center>Registration Date</center></th>
											<th><center>Source of Patient</center></th>
											<th><center>Registration Group</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
			$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `patient`, `registration` WHERE registration.patient_id = patient.patient_id && `barangay` = '$_GET[id]' && registration.year = '$_GET[year]'") or die(mysqli_error());
														while($fetch = $query->fetch_array()){
										?>
										<tr>
											<td><center><mark><?php echo $fetch['year']. "080" .$fetch['tb_case_no']?></mark></center></td>
											<td><center><?php echo $fetch['patient_name']?></center></td>
											<td><center><?php echo $fetch['age']?></center></td>
											<td><center><?php echo $fetch['registration_date']?></center></td>
											<td><center><?php echo $fetch['source_of_patient']?></center> </td>
											<td><center><?php echo $fetch['registration_group']?></center> </td>
										</tr>
										<?php
														}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
													}
													$conn->close();
		?> 
		<!-- End View Patient-->

		<?php require 'require/logout.php'?>
		<script>
			function openGeo() {
				myWindow = window.open("geotagging.php", "", "width=1350, height=670");
			}
		</script>
		<audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="../js/plugins.js"></script>
		<script type="text/javascript" src="../js/actions.js"></script>
		<script type="text/javascript" src="../js/settings.js"></script>
		<script type="text/javascript" src="../js/plugins/scrolltotop/scrolltopcontrol.js"></script>
	</body>
</html>