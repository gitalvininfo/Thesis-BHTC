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
		<link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="js/plugins/jquery/jquery.min.js"></script>
		<script src="js/jquery.canvasjs.min.js"></script>
		<?php require 'js/loadchart/intensive_phase.php'?>


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
	require 'config.php';
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$f = $query->fetch_array();
			$id = $fetch['patient_id'];
			$query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
					?>
					<li><a href="home.php">Home</a></li>
					<li>Data Entry</li>
					<li><a href="master_file_patient.php">Patient Master File</a></li>
					<li class="active"><strong><mark><?php echo $f['patient_name']?></mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="#tab-first" role="tab" data-toggle="tab">Patient</a></li>
									<li class="active"><a href="#tab-second" role="tab" data-toggle="tab">Treatment</a></li>
									<li><a href="#tab-fourth" role="tab" data-toggle="tab">DSSM</a></li>
									<li><a href="#tab-fifth" role="tab" data-toggle="tab">Xpert MTB</a></li>
									<li><a href="#tab-sixth" role="tab" data-toggle="tab">TB Culture</a></li>
									<li><a href="#tab-seventh" role="tab" data-toggle="tab">DST</a></li>
									<li><a href="#tab-eigth" role="tab" data-toggle="tab">TST</a></li>
									<li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li>
									<div class="btn-group pull-right">
										<div class="pull-right">
											<h3 class="panel-title"><strong> <?php echo $fetch2['status']?></strong></h3>
										</div>
									</div>

								</ul>
								<div class="panel-body tab-content">
									<div class="tab-pane" id="tab-first">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
											<div class="row">
												<div class="col-md-3">
													<div class="panel panel-default">
														<div class="panel-body profile">
															<div class="profile-image">
																<img src="assets/images/patient.ico" alt="John Doe"/>
															</div>
															<div class="profile-data">
																<div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $_GET['patient_name']?></strong></div>
																<div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></strong></div>
															</div>
														</div>                                
														<div class="panel-body">                                    
															<div class="contact-info">
																<p><small style="font-size:13px;">Age</small><br/><?php echo $f['age']?> years old</p>
																<p><small style="font-size:13px;">Contact Number</small><br/><?php echo $f['contact_number']?></p>
																<p><small style="font-size:13px;">Current Address</small><br/><?php echo $f['address']. ", Brgy. " .$f['barangay']?>, Bacolod City</p>                                   
															</div>
														</div>                                
													</div>
													<!-- END CONTACT ITEM -->
												</div>
												<div class="col-md-5">   <br>                                             
													<h5><strong>Height: </strong><?php echo $f['height'], " cms." ?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Gender: </strong><?php echo $f['gender']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Birthdate: </strong><?php echo $f['birthdate']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Occupation: </strong><?php echo $f['occupation']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Contact Person: </strong><?php echo $f['contact_person']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Emergency No: </strong><?php echo $f['emergency_no']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Philhealth No: </strong><?php echo $f['philhealth_no']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Registration Date: </strong><?php echo $fetch2['registration_date']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>DOTS Facility: </strong><?php echo $fetch2['dots_facility']?></h5>
												</div>
												<div class="col-md-4">   <br>                     
													<h5><strong>Source of Patient: </strong><?php echo $fetch2['source_of_patient']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Registration Group: </strong><?php echo $fetch2['registration_group']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Bacteriological Status: </strong><?php echo $fetch2['bacteriological_status']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Classification of TB: </strong><?php echo $fetch2['classification_of_tb']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>BCG Scar: </strong><?php echo $fetch2['bcg_scar']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>History of TB: </strong><?php echo $fetch2['history']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Duration: </strong><?php echo $fetch2['duration']?></h5>
												</div>
											</div>
											<hr>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">
														<div class="btn-group pull-left">
															<div class="pull-left">
																<a href="#new_member<?php echo $f['patient_id'];?>" data-target="#new_member<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-md"><span class="fa fa-user-plus"></span> New Family Member</a>
															</div>
														</div>
													</div>
													<div class="panel-body">
														<table id="laboratory_request" class="table table-hover">

															<thead>
																<tr>
																	<th><center>Name</center></th>
																	<th><center>Age</center></th>
																	<th><center>Date Screened</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<?php
																require 'config.php';
																$query = $conn->query("SELECT * FROM `family_member` WHERE `patient_id` = '$_GET[id]' ORDER BY `member_id` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['name']?></center></td>
																	<td><center><?php echo $fetch['age']?></center></td>
																	<td><center><?php echo $fetch['date_screened']?></center></td>
																	<td><center>
																		<a href="#updatemember<?php echo $fetch['member_id'];?>" data-target="#updatemember<?php echo $fetch['member_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
																		</center></td>
																</tr>
																<?php
																}
																$conn->close();
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title">Treatment Partner</h3>
													</div>
													<div class="panel-body">
														<table id="laboratory_request" class="table table-hover">

															<thead>
																<tr>
																	<th><center>Treatment Partner Name</center></th>
																	<th><center>Designation</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<?php
																require 'config.php';
																$query = $conn->query("SELECT `tb_case_no`, `treatment_partner_name`, `designation_treatment_partner` FROM `registration` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_case_no` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['treatment_partner_name']?></center></td>
																	<td><center><?php echo $fetch['designation_treatment_partner']?></center></td>
																	<td><center>
																		<a href="#updatepartner<?php echo $fetch['tb_case_no'];?>" data-target="#updatepartner<?php echo $fetch['tb_case_no'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
																		</center></td>
																</tr>
																<?php
																}
																$conn->close();
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="tab-pane active" id="tab-second">
										<div class="row">
											<?php require 'overview_treatment.php'?>
										</div>
									</div>
									<div class="tab-pane" id="tab-fourth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<table id="laboratory_request" class="table table-hover">
													<thead>
														<tr class="info">
															<th><center>Date Examined</center></th>
															<th><center>Laboratory Number</center></th>
															<th><center>Visual Appearance 1</center></th>
															<th><center>Visual Appearance 2</center></th>
															<th><center>Reading 1</center></th>
															<th><center>Reading 2</center></th>
															<th><center>Lab. Diagnosis</center></th>
															<th><center>Examined By</center></th>
															<th><center>Date Released</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
											$query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
											while($fetch = $query->fetch_array()){
														?>
														<tr>
															<td><center><?php echo $fetch['date_examined']?></center></td>
															<td><center><?php echo $fetch['laboratory_number']?></center></td>
															<td><center><?php echo $fetch['visual_appearance']?></center></td>
															<td><center><?php echo $fetch['visual_appearance2']?></center></td>
															<td><center><?php echo $fetch['reading']?></center></td>
															<td><center><?php echo $fetch['reading2']?></center></td>
															<td><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
															<td><center><?php echo $fetch['examined_by']?></center></td>
															<td><center><?php echo $fetch['date_released']?></center></td>
														</tr>
														<?php
											}
											$conn->close();
														?>
													</tbody>
												</table>

											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-fifth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<table id="laboratory_request" class="table table-hover">
													<thead>
														<tr class="info">
															<th><center>Date Examined</center></th>
															<th><center>Laboratory Number</center></th>
															<th><center>Visual Appearance</center></th>
															<th><center>Result</center></th>
															<th><center>Examined By</center></th>
															<th><center>Date Released</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
														$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `xpert_id` DESC") or die(mysqli_error());
														while($fetch = $query->fetch_array()){
														?>
														<tr>
															<td><center><?php echo $fetch['date_examined']?></center></td>
															<td><center><?php echo $fetch['laboratory_number']?></center></td>
															<td><center><?php echo $fetch['visual_appearance']?></center></td>
															<td><center><?php echo $fetch['result']?></center></td>
															<td><center><?php echo $fetch['examined_by']?></center></td>
															<td><center><?php echo $fetch['date_released']?></center></td>
														</tr>
														<?php
														}
														$conn->close();
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-sixth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
													<table id="laboratory_request" class="table table-hover">
														<thead>
															<tr class="info">
																<th><center>Method</center></th>
																<th><center>TB Culture Lab</center></th>
																<th><center>Laboratory Number</center></th>
																<th><center>Date Sample Collected</center></th>
																<th><center>Date Sample Received</center></th>
																<th><center>TB Culture Result</center></th>
																<th><center>Remarks</center></th>
																<th><center>Examined By</center></th>
																<th><center>Reviewed By</center></th>
																<th><center>Date Released</center></th>
															</tr>
														</thead>
														<tbody>
															<?php
															$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
															$query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
															while($fetch = $query->fetch_array()){
															?>
															<tr>
																<td><center><?php echo $fetch['method']?></center></td>
																<td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
																<td><center><?php echo $fetch['laboratory_no']?></center></td>
																<td><center><?php echo $fetch['date_sample_collected']?></center></td>
																<td><center><?php echo $fetch['date_sample_received']?></center></td>
																<td><center><?php echo $fetch['tb_culture_result']?></center></td>
																<td><center><?php echo $fetch['remarks']?></center></td>
																<td><center><?php echo $fetch['examined_by']?></center></td>
																<td><center><?php echo $fetch['reviewed_by']?></center></td>
																<td><center><?php echo $fetch['date_released']?></center></td>
															</tr>
															<?php
															}
															$conn->close();
															?>
														</tbody>
													</table>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-seventh">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
													<table id="laboratory_request" class="table table-hover">
														<thead>
															<tr class="info">
																<th><center>TB Culture Laboratory</center></th>
																<th><center>DST Laboratory</center></th>
																<th><center>Method</center></th>
																<th><center>Date Collected</center></th>
																<th><center>Date Released</center></th>
																<th><center>Examined By</center></th>
																<th><center>Reviewed By</center></th>
																<th><center>Remarks</center></th>
																<th><center>View Result</center></th>
															</tr>
														</thead>
														<tbody>
															<?php
															$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
															$query = $conn->query("SELECT * FROM `dst_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dst_id` DESC") or die(mysqli_error());
															$id = $f['patient_id'];
															while($fetch = $query->fetch_array()){
																$id = $fetch['patient_id'];
															?>
															<tr>
																<td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
																<td><center><?php echo $fetch['dst_laboratory']?></center></td>
																<td><center><?php echo $fetch['method']?></center></td>
																<td><center><?php echo $fetch['date_collected']?></center></td>
																<td><center><?php echo $fetch['date_released']?></center></td>
																<td><center><?php echo $fetch['examined_by']?></center></td>
																<td><center><?php echo $fetch['reviewed_by']?></center></td>
																<td><center><?php echo $fetch['remarks']?></center></td>
																<td>
																	<center>
																		<a href="#viewdst<?php echo $fetch['dst_id'];?>" data-toggle="modal" data-target="#viewdst<?php echo $fetch['dst_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
																	</center>
																</td>
															</tr>
															<?php
															}
															$conn->close();
															?>
														</tbody>
													</table>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-eigth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<?php
												require 'config.php';
												$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
												$fetch = $query->fetch_array();
												?>
												<div class="col-md-12">
													<div class="panel panel-info">
														<div class="panel-heading">
															<div class="btn-group pull-right">
																<div class="pull-left">
																	<a href="#new_tst<?php echo $fetch['patient_id'];?>" data-target="#new_tst<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span> TST Result</a>
																</div>
															</div>
														</div>
														<table id="laboratory_request" class="table table-hover">
															<thead>
																<tr>
																	<th><center>Tuberculin Skin Testing Result</center></th>
																	<th><center>Date Read</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<?php
																require 'config.php';
																$query = $conn->query("SELECT * FROM `tst` WHERE `patient_id` = '$_GET[id]' ORDER BY `tst_id` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['result']?></center></td>
																	<td><center><?php echo $fetch['date_read']?></center></td>
																	<td><center>
																		<a href="#updatetst<?php echo $fetch['tst_id'];?>" data-target="#updatetst<?php echo $fetch['tst_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit </a>
																		</center></td>
																</tr>
																<?php
																}
																$conn->close();
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-ninth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 433px;">
											<div class="row">
												<?php
												require 'config.php';
												$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
												$fetch = $query->fetch_array();
												?>
												<div class="col-md-12">
													<div class="panel panel-info">
														<div class="panel-heading">
															<div class="btn-group pull-right">
																<div class="pull-left">
																	<a href="#new_cxr<?php echo $fetch['patient_id'];?>" data-target="#new_cxr<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span> Chest X-Ray Findings</a>
																</div>
															</div>
														</div>
														<table id="laboratory_request" class="table table-hover">
															<thead>
																<tr>
																	<th><center>Chest X-ray Findings</center></th>
																	<th><center>Date of Exam</center></th>
																	<th><center>TBDC</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<?php
																require 'config.php';
																$query = $conn->query("SELECT * FROM `cxr` WHERE `patient_id` = '$_GET[id]' ORDER BY `cxr_id` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['cxr_findings']?></center></td>
																	<td><center><?php echo $fetch['date_of_exam']?></center></td>
																	<td><center><?php echo $fetch['tbdc']?></center></td>
																	<td><center>
																		<a href="#updatecxr<?php echo $fetch['cxr_id'];?>" data-target="#updatecxr<?php echo $fetch['cxr_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit</a>
																		</center></td>
																</tr>
																<?php
																}
																$conn->close();
																?>
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
			</div>
		</div>
		<?php require 'require/modals/monthly_dosage_continuation.php'?>
		<?php require 'require/modals/monthly_dosage_intensive.php'?>
		<?php require 'require/modals/add_family_member.php'?>
		<?php require 'require/modals/edit_family_member.php'?>
		<?php require 'require/modals/edit_treatment_partner.php'?>
		<?php require 'require/modals/add_tst.php'?>
		<?php require 'require/modals/edit_tst.php'?>
		<?php require 'require/modals/add_cxr.php'?>
		<?php require 'require/modals/edit_cxr.php'?>
		<?php require 'require/modals/view_dst.php'?>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
		<script>
			$(function() {
				var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
			});
		</script>

	</body>
</html>