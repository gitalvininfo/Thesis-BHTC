<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>Bacolod City Health TB DOTS Center</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<style type="text/css">
			@media print {
				#print{
					display: none !important;
				}
			}
		</style>
	</head>
	<body>
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		date_default_timezone_set('Asia/Manila');
		$date = date('F j, Y');
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="btn-group pull-right">
							<div class="pull-left">
								<div class="btn-group pull-right" id="print">
									<button id="print" class="btn btn-default btn-sm" onclick="javascript:window.print()">Print</button>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<?php
						$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
						$q1 = $conn->query("SELECT * FROM `patient`, `registration` WHERE patient.patient_id = registration.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
						$f1 = $q1->fetch_array();
						?>  
						<div class="col-md-12">
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
							<h3><strong>DSSM Examination</strong></h3>
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
							<h3><strong>Xpert MTB/RIF Examination</strong></h3>
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
							<h3><strong>TB Culture Examination</strong></h3>
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
							<h3><strong>Drug Susceptible Test</strong></h3>
							<table class="table table-condensed">
								<thead>
									<tr>
										<th><center>Isoniazid</center></th>
										<th><center>Rifampicin</center></th>
										<th><center>Ethambutol</center></th>
										<th><center>Streptomycin</center></th>
										<th><center>Pyrazinamide</center></th>
										<th><center>Examined By</center></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
									$q5 = $conn->query("SELECT * FROM `patient`, `dst_examination` WHERE patient.patient_id = dst_examination.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
									while($f5 = $q5->fetch_array()){
									?>  
									<tr>
										<td><center><?php echo $f5['isoniazid']?></center></td>
										<td><center><?php echo $f5['rifampicin']?></center></td>
										<td><center><?php echo $f5['ethambutol']?></center></td>
										<td><center><?php echo $f5['streptomycin']?></center></td>
										<td><center><?php echo $f5['pyrazinamide']?></center></td>
										<td><center><?php echo $f5['examined_by']?></center></td>
									</tr>
									<?php
									}
									?>
								</tbody>
								<thead>
									<tr>
										<th><center>Levofloxacin</center></th>
										<th><center>Kanamycin</center></th>
										<th><center>Amikacin</center></th>
										<th><center>Capreomyin</center></th>
										<th><center>Remarks</center></th>
										<th><center>Examined By</center></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
									$q5 = $conn->query("SELECT * FROM `patient`, `dst_examination` WHERE patient.patient_id = dst_examination.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
									while($f5 = $q5->fetch_array()){
									?>  
									<tr>
										<td><center><?php echo $f5['levofloxacin']?></center></td>
										<td><center><?php echo $f5['kanamycin']?></center></td>
										<td><center><?php echo $f5['amikacin']?></center></td>
										<td><center><?php echo $f5['capreomycin']?></center></td>
										<td><center><?php echo $f5['remarks']?></center></td>
										<td><center><?php echo $f5['examined_by']?></center></td>
									</tr>
									<?php
									}
									$conn->close();
									?>
								</tbody>
							</table>
							<h3><strong>Tuberculin Skin Test</strong></h3>
							<div class="col-md-6">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th><center>Tuberculin Skin Test Result</center></th>
											<th><center>Date Read</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
										$q6 = $conn->query("SELECT * FROM `patient`, `tst` WHERE patient.patient_id = tst.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
										while($f6 = $q6->fetch_array()){
										?>  
										<tr>
											<td><center><?php echo $f6['result']?></center></td>
											<td><center><?php echo $f6['date_read']?></center></td>
										</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
							<div class="col-md-6">
								<h3><strong>Chest X-ray</strong></h3>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th><center>Chest X-ray Findings</center></th>
											<th><center>Date of Exam</center></th>
											<th><center>TB Diagnostic Committee</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
										$q7 = $conn->query("SELECT * FROM `patient`, `cxr` WHERE patient.patient_id = cxr.patient_id && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
										while($f7 = $q7->fetch_array()){
										?>  
										<tr>
											<td><center><?php echo $f7['cxr_findings']?></center></td>
											<td><center><?php echo $f7['date_of_exam']?></center></td>
											<td><center><?php echo $f7['tbdc']?></center></td>
										</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'case_finding.php?year='+year;
				});
			});
		</script>
		<script src="../js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins.js"></script>        
		<script type="text/javascript" src="../js/actions.js"></script>        
	</body>
</html>




