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

	<body class="page-container-boxed">
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">

			<?php require 'require/medtech_sidebar.php'?>
			<div class="page-content">
				<?php require'require/medtech_header.php'?>
				<ul class="breadcrumb">
					<?php
	require 'config.php';
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$f = $query->fetch_array();
			$id = $f['patient_id'];
			$query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
					?>
					<li><a href="home.php">Home</a></li>
					<li><a href="medtech_patient_master_file.php">Laboratory Results</a></li>
					<li class="active"><strong><mark><?php echo $_GET['patient_name']?></mark></strong></li>

				</ul>
				<div class="page-content-wrap">
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient</a></li>
									<li><a href="#tab-second" role="tab" data-toggle="tab">DSSM</a></li>
									<li><a href="#tab-third" role="tab" data-toggle="tab">Xpert MTB</a></li>
									<li><a href="#tab-fourth" role="tab" data-toggle="tab">TB Culture</a></li>
									<li><a href="#tab-fifth" role="tab" data-toggle="tab">DST</a></li>
								</ul>

								<div class="panel-body tab-content">
									<div class="tab-pane active" id="tab-first">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 416px;">
											<div class="row">
												<div class="col-md-3">
													<div class="panel panel-default">
														<div class="panel-body profile">
															<div class="profile-image">
																<img src="assets/images/patient.ico" alt="John Doe"/>
															</div>
															<div class="profile-data">
																<div class="profile-data-name" style="color:#555252; font-size:15px;"><strong><?php echo $_GET['patient_name']?></strong></div>
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
														<h3 class="panel-title">Family Member</h3>
													</div>
													<div class="panel-body">
														<table id="laboratory_request" class="table table-hover">

															<thead>
																<tr>
																	<th><center>Name</center></th>
																	<th><center>Age</center></th>
																	<th><center>Date Screened</center></th>
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
																</tr>
															</thead>
															<tbody>
																<?php
																require 'config.php';
																$query = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_case_no` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['treatment_partner_name']?></center></td>
																	<td><center><?php echo $fetch['designation_treatment_partner']?></center></td>
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
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 416px;">
											<div class="row">
												<table class="table table-hover">
													<thead>
														<tr>
															<th style="font-size:10px"><center>Date Examined</center></th>
															<th style="font-size:10px"><center>Laboratory Number</center></th>
															<th style="font-size:10px"><center>Visual Appearance 1</center></th>
															<th style="font-size:10px"><center>Visual Appearance 2</center></th>
															<th style="font-size:10px"><center>Reading 1</center></th>
															<th style="font-size:10px"><center>Reading 2</center></th>
															<th style="font-size:10px"><center>Lab. Diagnosis</center></th>
															<th style="font-size:10px"><center>Examined By</center></th>
															<th style="font-size:10px"><center>Date Released</center></th>
															<th style="font-size:10px"><center>Action</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
														$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
														$query2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
														$fetch2 = $query2->fetch_array();
														$query3 = $conn->query("SELECT * FROM `patient` WHERE `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
														$fetch3 = $query3->fetch_array();
														while($fetch = $query->fetch_array()){
															$name = $fetch3['patient_name'];
															$id = $fetch['patient_id'];
															$dssm = $fetch['dssm_id'];
															$lab_request_id = $fetch2['lab_request_id'];
															$test_requested = $fetch2['test_requested'];
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
															<td>
																<center>
																	<a href="print/dssm.php?dssmid=<?php echo $dssm?>&test_requested=<?php echo $test_requested?>&patient_id=<?php echo $id?>&lab_request_id=<?php echo $lab_request_id?>&patient_name=<?php echo $name?>"class="btn btn-default btn-sm">Preview</a>
																</center>
															</td>
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
									<div class="tab-pane" id="tab-third">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 416px;">
											<div class="row">
												<table class="table table-hover">
													<thead>
														<tr>
															<th><center>Date Examined</center></th>
															<th><center>Laboratory Number</center></th>
															<th><center>Visual Appearance</center></th>
															<th><center>Result</center></th>
															<th><center>Examined By</center></th>
															<th><center>Date Released</center></th>
															<th><center>Action</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
														$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
														$query2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
														$fetch2 = $query2->fetch_array();
														$query3 = $conn->query("SELECT * FROM `patient` WHERE `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
														$fetch3 = $query3->fetch_array();
														while($fetch = $query->fetch_array()){
															$patient_name = $fetch3['patient_name'];
															$id = $fetch['patient_id'];
															$xpert = $fetch['xpert_id'];
															$lab_request_id = $fetch2['lab_request_id'];
															$test_requested = $fetch2['test_requested'];
														?>
														<tr>
															<td><center><?php echo $fetch['date_examined']?></center></td>
															<td><center><?php echo $fetch['laboratory_number']?></center></td>
															<td><center><?php echo $fetch['visual_appearance']?></center></td>
															<td><center><?php echo $fetch['result']?></center></td>
															<td><center><?php echo $fetch['examined_by']?></center></td>
															<td><center><?php echo $fetch['date_released']?></center></td>
															<td>
																<center>
																	<a href="print/xpert.php?xpert_id=<?php echo $xpert?>&test_requested=<?php echo $test_requested?>&patient_id=<?php echo $id?>&lab_request_id=<?php echo $lab_request_id?>&patient_name=<?php echo $patient_name?>"class="btn btn-default btn-sm">Preview</a>
																</center>
															</td>
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
									<div class="tab-pane" id="tab-fourth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 416px;">
											<div class="row">
												<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
													<table class="table table-hover">
														<thead>
															<tr>
																<th style="font-size:10px"><center>Method</center></th>
																<th style="font-size:10px"><center>TB Culture Lab</center></th>
																<th style="font-size:10px"><center>Laboratory Number</center></th>
																<th style="font-size:10px"><center>Date Sample Collected</center></th>
																<th style="font-size:10px"><center>Date Sample Received</center></th>
																<th style="font-size:10px"><center>TB Culture Result</center></th>
																<th style="font-size:10px"><center>Remarks</center></th>
																<th style="font-size:10px"><center>Examined By</center></th>
																<th style="font-size:10px"><center>Reviewed By</center></th>
																<th style="font-size:10px"><center>Date Released</center></th>
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
									<div class="tab-pane" id="tab-fifth">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 416px;">
											<div class="row">
												<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
													<table class="table table-hover">
														<thead>
															<tr>
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
															while($fetch = $query->fetch_array()){
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
																		<a href="#viewdst<?php echo $fetch['dst_id'];?>" data-toggle="modal" data-target="#viewdst<?php echo $fetch['dst_id'];?>" class="btn btn-default btn-sm">View</a>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/modals/view_dst.php'?>
		<?php require 'require/logout.php'?>


		<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
	</body>

</html>