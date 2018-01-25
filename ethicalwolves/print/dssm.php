<?php
require_once '../logincheck.php';
require ('../config.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- META SECTION -->
		<title>BHTC-PMIS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<!-- END META SECTION -->

		<!-- CSS INCLUDE -->
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
		<style type="text/css">
			@media print{
				@page{
					size:letter;
				}

			}
			#print{
				width:800px;
				height:800px;
				margin:auto;
				overflow:hidden;
				border:1px solid #000;
			}

		</style>
		<!-- EOF CSS INCLUDE -->
	</head>
	<body>
		<!-- START PAGE CONTAINER -->
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- START TEXT ELEMENTS -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="fa fa-print"></span> Print Content</button>
									<a href="patient_certification_table.php" class="btn btn-default btn-sm"><span class="fa fa-arrow-circle-left"></span> Back</a>
								</div>
							</div>  
						</div>
						<?php
						$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `dssm_examination` WHERE `dssm_id` = '$_GET[dssmid]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
						$query2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
						$fetch2 = $query2->fetch_array();
						$query3 = $conn->query("SELECT * FROM `patient`, `registration` WHERE patient.patient_id = registration.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
						$fetch3 = $query3->fetch_array();
						?>   
						<div id="print">
							<div class="row">
								<br>
								<center><h4><strong>National TB Control Program</strong></h4></center>
								<center><h5><strong>NTP Laboratory Request Form</strong></h5></center>
								<hr>

								<div class="col-md-12">
									<h5>Name of Collection Unit: <u><?php echo $fetch2['collection_unit']?></u> 				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;
										Date of Request: <u><?php echo $fetch2['date_of_request']?></u></h5>
									<h5>Name of Requesting Physician: <u><?php echo $fetch2['requesting_physician']?></u></h5>

									<h5>Name of Patient: <u><?php echo $fetch3['patient_name']?></u>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;									
										Age: <u><?php echo $fetch3['age']?> years old</u>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;									
										Gender: <u><?php echo $fetch3['gender']?></u>
									</h5>

									<h5>Address: <u><?php echo $fetch3['address']. ", Barangay" .$fetch3['barangay']?></u>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;
										Contact Number: <u><?php echo $fetch3['contact_number']?>

										</u>
									</h5><hr>
									<h5>Registration Group: <strong><?php echo $fetch3['registration_group']?></strong>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Disease Classification: <strong><?php echo $fetch3['classification_of_tb']?></strong>
									</h5>
									<h5>Reason For Examination: <strong><?php echo $fetch2['reason_for_examination']?></strong>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Type of Specimen: <strong><?php echo $fetch2['specimen_type']?></strong>
									</h5>
									<h5>Test Requested: <strong><?php echo $fetch2['test_requested']?></strong>
									</h5><hr>
									<table id="laboratory_request" class="table">
										<thead>
											<tr>
												<th ><center>Specimen</center></th>
												<th ><center>Date of Collection</center></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><center>1</center></td>
												<td><center><?php echo $fetch2['date_sample_collected']?></center></td>
											</tr>
											<tr>
												<td><center>2</center></td>
												<td><center><?php echo $fetch2['date_sample_collected2']?></center></td>
											</tr>
										</tbody>
									</table> <hr>
									<h5>Specimen Collector: <strong><?php echo $fetch2['sample_collector']?></strong>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Designation of Specimen Collector: <strong><?php echo $fetch2['designation']?></strong>
									</h5><hr>
									<h3><strong><center>Direct Sputum Smear Miscroscopy Result</center></strong></h3>
									<table id="laboratory_request" class="table">
										<thead>
											<tr>
												<th ><center>Laboratory Number</center></th>
												<th ><center>Visual Appearance</center></th>
												<th ><center>Reading</center></th>
												<th rowspan="2"><center>Laboratory Diagnosis</center></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><center><?php echo $fetch['laboratory_number']?></center></td>
												<td><center><?php echo $fetch['visual_appearance']?></center></td>
												<td><center><?php echo $fetch['reading']?></center></td>
											</tr>
											<tr>
												<td><center><?php echo $fetch['laboratory_number']?></center></td>
												<td><center><?php echo $fetch['visual_appearance2']?></center></td>
												<td><center><?php echo $fetch['reading2']?></center></td>
												<td ><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
											</tr>
										</tbody>
									</table> 
									<h5>Date Examined: <strong><?php echo $fetch['date_examined']?></strong>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Date Released: <strong><?php echo $fetch['date_released']?></strong>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Examined By: <strong><?php echo $fetch['examined_by']?></strong>
									</h5>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function printContent(el){
				var restorepage = document.body.innerHTML;
				var printcontent = document.getElementById(el).innerHTML;
				document.body.innerHTML = printcontent;
				window.print();
				document.body.innerHTML = restorepage;
			}
		</script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	</body>
</html>