<div class="row">
	<div class="col-md-9">
		<div class="panel-body">
			<div class="tocify-content">
				<h2> <strong><mark>TB Case No: <?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></strong></h2><hr>
				<h4>Overview</h4>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">                                                
							<h6><strong>Name: </strong><?php echo $fetch['patient_name']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Age: </strong><?php echo $fetch['age']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Gender: </strong><?php echo $fetch['gender']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Contact Number: </strong><?php echo $fetch['contact_number']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Home Address: </strong><?php echo $fetch['address']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Birthdate: </strong><?php echo $fetch['address']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Occupation: </strong><?php echo $fetch['occupation']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Contact Person: </strong><?php echo $fetch['contact_person']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?></h6>
						</div>
						<div class="col-md-5">                        
							<h6><strong>Registration Date: </strong><?php echo $fetch2['registration_date']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>DOTS Facility: </strong><?php echo $fetch2['dots_facility']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Source of Patient: </strong><?php echo $fetch2['source_of_patient']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Registration Group: </strong><?php echo $fetch2['registration_group']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Bacteriological Status: </strong><?php echo $fetch2['bacteriological_status']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Classification of TB: </strong><?php echo $fetch2['classification_of_tb']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>BCG Scar: </strong><?php echo $fetch2['bcg_scar']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>History of TB: </strong><?php echo $fetch2['history']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Duration: </strong><?php echo $fetch2['duration']?></h6>
						</div>
					</div>
				</div>&nbsp;<hr>
				<h2> <strong>Direct Sputum Smear Microscopy</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">

						<thead>
							<tr>
								<th><center>Laboratory Number</center></th>
								<th><center>Examined By</center></th>
								<th><center>Date Examined</center></th>
								<th><center>Date Released</center></th>
								<th><center>Result</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
					$id = $fetch['patient_id'];
					while($fetch2 = $query->fetch_array()){
						$id = $fetch2['patient_id'];
							?>
							<tr>
								<td><center><?php echo $fetch2['laboratory_number']?></center></td>
								<td><center><?php echo $fetch2['examined_by']?></center></td>
								<td><center><?php echo $fetch2['date_examined']?></center></td>
								<td><center><?php echo $fetch2['date_released']?></center></td>
								<td><center><?php echo $fetch2['laboratory_diagnosis']?></center></td>
							</tr>
							<?php
					}
					$conn->close();
							?>
						</tbody>
					</table>
				</div>&nbsp;<hr>
				<h2> <strong>Xpert MTB/RIF</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr>
								<th><center>Date Examined</center></th>
								<th><center>Laboratory Number</center></th>
								<th><center>Visual Appearance</center></th>
								<th><center>Examined By</center></th>
								<th><center>Date Released</center></th>
								<th><center>Result</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
							$query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `xpert_id` DESC") or die(mysqli_error());
							$id = $fetch['patient_id'];
							while($fetch2 = $query->fetch_array()){
								$id = $fetch2['patient_id'];
							?>
							<tr>
								<td><center><?php echo $fetch2['date_examined']?></center></td>
								<td><center><?php echo $fetch2['laboratory_number']?></center></td>
								<td><center><?php echo $fetch2['visual_appearance']?></center></td>
								<td><center><?php echo $fetch2['examined_by']?></center></td>
								<td><center><?php echo $fetch2['date_released']?></center></td>
								<td><center><?php echo $fetch2['result']?></center></td>
							</tr>
							<?php
							}
							$conn->close();
							?>
						</tbody>
					</table>
				</div>&nbsp;<hr>


				<h2> <strong>TB Culture</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><center>Method</center></th>
								<th><center>TB Culture Laboratory</center></th>
								<th><center>TB Culture Result</center></th>
								<th><center>Remarks</center></th>
								<th><center>Examined By</center></th>
								<th><center>Date Released</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
							$query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
							$id = $fetch['patient_id'];
							while($fetch2 = $query->fetch_array()){
								$id = $fetch2['patient_id'];
							?>
							<tr>
								<td><center><?php echo $fetch2['method']?></center></td>
								<td><center><?php echo $fetch2['tb_culture_laboratory']?></center></td>
								<td><center><?php echo $fetch2['tb_culture_result']?></center></td>
								<td><center><?php echo $fetch2['remarks']?></center></td>
								<td><center><?php echo $fetch2['examined_by']?></center></td>
								<td><center><?php echo $fetch2['date_released']?></center></td>
							</tr>
							<?php
							}
							$conn->close();
							?>
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Tuberculin Skin Testing</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr>
								<th><center>Date Released</center></th>
								<th><center>Result</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
							$query = $conn->query("SELECT * FROM `tst` WHERE `patient_id` = '$_GET[id]' ORDER BY `tst_id` DESC") or die(mysqli_error());
							$id = $fetch['patient_id'];
							while($fetch2 = $query->fetch_array()){
								$id = $fetch2['patient_id'];
							?>
							<tr>
								<td><center><?php echo $fetch2['date_read']?></center></td>
								<td><center><?php echo $fetch2['result']?></center></td>
							</tr>
							<?php
							}
							$conn->close();
							?>
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Chest X-Ray</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr>
								<th><center>Chest X-ray Findings</center></th>
								<th><center>Date of Exam</center></th>
								<th><center>TBDC</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
						   $query = $conn->query("SELECT * FROM `cxr` WHERE `patient_id` = '$_GET[id]' ORDER BY `cxr_id` DESC") or die(mysqli_error());
						   $id = $fetch['patient_id'];
						   while($fetch2 = $query->fetch_array()){
							   $id = $fetch2['patient_id'];
							?>
							<tr>
								<td><center><?php echo $fetch2['cxr_findings']?></center></td>
								<td><center><?php echo $fetch2['date_of_exam']?></center></td>
								<td><center><?php echo $fetch2['tbdc']?></center></td>
							</tr>
							<?php
						   }
						   $conn->close();
							?>
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Clinical Findings</strong></h2><hr>
				<h4>Overview</h4>    
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">

						<thead>
							<tr>
								<th><center>Criteria</center></th>
								<th><center>Frequency of occurences during treatment</center></th>

							</tr>
						</thead>
						<tbody>
							<?php
							require 'config.php';
							$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
							$f = $q->fetch_array();
							$q1 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q1` = '✓'") or die (mysqli_error());
							$f1 = $q1->fetch_array();
							$q2 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q2` = '✓'") or die (mysqli_error());
							$f2 = $q2->fetch_array();
							$q3 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q3` = '✓'") or die (mysqli_error());
							$f3 = $q3->fetch_array();
							$q4 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q4` = '✓'") or die (mysqli_error());
							$f4 = $q4->fetch_array();
							$q5 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q5` = '✓'") or die (mysqli_error());
							$f5 = $q5->fetch_array();
							?>
							<tr>
								<td> Unexplained fever greater than 2 weeks</td>
								<td><center><?php echo $f1['total']?></center></td>
							</tr>
							<tr>
								<td>Unexplained cough or wheezing greater than 2 weeks</td>
								<td><center><?php echo $f2['total']?></center></td>
							</tr>
							<tr>
								<td>Unimproved general well-being</td>
								<td><center><?php echo $f3['total']?></center></td>
							</tr>
							<tr>
								<td>Poor Appetite</td>
								<td><center><?php echo $f4['total']?></center></td>
							</tr>
							<tr>
								<td>Positive PE findings for Extra-pulmonary TB</td>
								<td><center><?php echo $f5['total']?></center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>