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
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<a href="../medtech_patient_overview.php?id=<?php echo $_GET['patient_id']?>&patient_name=<?php echo $_GET['patient_name']?>" class="btn btn-default btn-sm">Back</a>
								</div>
							</div>  
						</div>
						<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
									   $q1 = $conn->query("SELECT * FROM `patient`, `registration` WHERE patient.patient_id = registration.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
									   $f1 = $q1->fetch_array();
						?>  
						<div id="print">
							<div class="row">
								<div class="col-md-12"><br>
									<center><h4><strong>Individual Patient Record</strong></h4></center><hr>
									<h3><strong>TB Case Number:</strong> <?php echo $f1['year']. "080" .$f1['tb_case_no']?> </h3>
									<h5><strong>Name of Patient:</strong> <?php echo $f1['patient_name']?> 				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Source of Patient:</strong> <?php echo $f1['source_of_patient']?></h5>
									<h5><strong>Height:</strong> <?php echo $f1['height']?> cms.
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Registration Group:</strong> <?php echo $f1['registration_group']?>
									</h5> 
									<h5><strong>Gender:</strong> <?php echo $f1['gender']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Diagnosis:</strong> <?php echo $f1['diagnosis']?>
									</h5> 
									<h5><strong>Birthdate:</strong> <?php echo $f1['birthdate']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Bacteriological Status:</strong> <?php echo $f1['bacteriological_status']?>
									</h5>
									<h5><strong>Occupation:</strong> <?php echo $f1['occupation']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Classification of Tuberculosis:</strong> <?php echo $f1['classification_of_tb']?>
									</h5>
									<h5><strong>Contact Person:</strong> <?php echo $f1['contact_person']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>BCG Scar:</strong> <?php echo $f1['bcg_scar']?>
									</h5> 
									<h5><strong>Emergency Number:</strong> <?php echo $f1['emergency_no']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>History of TB:</strong> <?php echo $f1['history']?>
									</h5> 
									<h5><strong>Philhealth Number:</strong> <?php echo $f1['philhealth_no']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>Duration:</strong> <?php echo $f1['duration']?>
									</h5> 
									<h5><strong>Registration Date:</strong> <?php echo $f1['registration_date']?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<strong>DOTS Facility:</strong> <?php echo $f1['dots_facility']?>
									</h5> <hr>
									<h3><strong>DSSM Examination:</strong></h3>
									<table class="table table-condensed">
										<thead>
											<tr>
												<th><center>Date Examined</center></th>
												<th><center>Laboratory Number</center></th>
												<th><center>Visual Appearance</center></th>
												<th><center>Reading</center></th>
												<th><center>Lab. Diagnosis</center></th>
												<th><center>Examined By</center></th>
												<th><center>Date Released</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
										$q2 = $conn->query("SELECT * FROM `patient`, `dssm_examination` WHERE patient.patient_id = dssm_examination.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
										while($f2 = $q2->fetch_array()){
											?>  
											<tr>
												<td><center><?php echo $f2['date_examined']?></center></td>
												<td><center><?php echo $f2['laboratory_number']?></center></td>
												<td><center><?php echo $f2['visual_appearance']?></center></td>
												<td><center><?php echo $f2['reading']?></center></td>
												<td><center><?php echo $f2['laboratory_diagnosis']?></center></td>
												<td><center><?php echo $f2['examined_by']?></center></td>
												<td><center><?php echo $f2['date_released']?></center></td>
											</tr>
											<?php
										}
										$conn->close();
											?>
										</tbody>
									</table>
									<h3><strong>Xpert MTB/RIF Examination:</strong></h3>
									<table class="table table-condensed">
										<thead>
											<tr>
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
											$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
											$q3 = $conn->query("SELECT * FROM `patient`, `gene_expert_examination` WHERE patient.patient_id = gene_expert_examination.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
											while($f3 = $q3->fetch_array()){
											?>  
											<tr>
												<td><center><?php echo $f3['date_examined']?></center></td>
												<td><center><?php echo $f3['laboratory_number']?></center></td>
												<td><center><?php echo $f3['visual_appearance']?></center></td>
												<td><center><?php echo $f3['result']?></center></td>
												<td><center><?php echo $f3['examined_by']?></center></td>
												<td><center><?php echo $f3['date_released']?></center></td>
											</tr>
											<?php
											}
											$conn->close();
											?>
										</tbody>
									</table>
									<h3><strong>TB Culture Examination:</strong></h3>
									<table class="table table-condensed">
										<thead>
											<tr>
												<th><center>Method</center></th>
												<th><center>TB Culture Lab</center></th>
												<th><center>Laboratory Number</center></th>
												<th><center>TB Culture Result</center></th>
												<th><center>Remarks</center></th>
												<th><center>Examined By</center></th>
												<th><center>Date Released</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
											$q4 = $conn->query("SELECT * FROM `patient`, `tb_culture_examination` WHERE patient.patient_id = tb_culture_examination.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
											while($f4 = $q4->fetch_array()){
											?>  
											<tr>
												<td><center><?php echo $f4['method']?></center></td>
												<td><center><?php echo $f4['tb_culture_laboratory']?></center></td>
												<td><center><?php echo $f4['laboratory_no']?></center></td>
												<td><center><?php echo $f4['tb_culture_result']?></center></td>
												<td><center><?php echo $f4['remarks']?></center></td>
												<td><center><?php echo $f4['examined_by']?></center></td>
												<td><center><?php echo $f4['date_released']?></center></td>
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