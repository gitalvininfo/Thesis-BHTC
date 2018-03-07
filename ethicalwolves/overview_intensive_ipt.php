<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-body">   
				<h2> <strong><mark>IPT No: <?php echo $fetch2['year']. "080" .$fetch2['ipt_no']?></mark></strong></h2><hr>
				<h4>Overview</h4>

				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body profile">
								<div class="profile-image">
									<img src="assets/images/patient.ico" alt="John Doe"/>
								</div>
								<div class="profile-data">
									<div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $_GET['name']?></strong></div>
									<div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch2['year']."" .$fetch2['ipt_no']?></strong></div>
								</div>
							</div>                                
							<div class="panel-body">                                    
								<div class="contact-info">
									<p><small style="font-size:13px;">Age</small><br/><?php echo $f['age']?> years old</p>
									<p><small style="font-size:13px;">Contact Number</small><br/><?php echo $f['emergency_no']?></p>
									<p><small style="font-size:13px;">Current Address</small><br/><?php echo $f['address']?></p>                                   
								</div>
							</div>                                
						</div>
					</div>
					<div class="col-md-5">   <br>                                             
						<h5><strong>Height: </strong><?php echo $f['height'], " cms." ?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>Gender: </strong><?php echo $f['gender']?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>Birthdate: </strong><?php echo $f['birthdate']?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>Contact Person: </strong><?php echo $f['contact_person']?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>Date IPT Started: </strong><?php echo $fetch2['date_ipt_started']?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>Date Evaluated: </strong><?php echo $fetch2['date_evaluated']?></h5>
						<hr style="margin:0px 0 5px 0;">
						<h5><strong>DOTS Facility: </strong><?php echo $fetch2['dots_facility']?></h5>
						<h5><strong>Source of Patient: </strong><?php echo $fetch2['source_of_patient']?></h5>
						<hr style="margin:0px 0 5px 0;">

						<h5><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h5>
						<hr style="margin:0px 0 5px 0;">
					</div>
				</div>
			</div>   
		</div>
		<div class="panel panel-default">
			<div class="panel-body">                            
				<div class="tocify-content">
					&nbsp;
					<?php 
	require 'config.php';
					$q1 = $conn->query("SELECT sum(dosage) FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
					$f1 = $q1->fetch_array();
					?>


					<h2><strong>Intensive Phase - <?php echo $f1['sum(dosage)']. " mg"?></strong></h2>
					<hr>
					<div class="btn-group pull-right">
						<div class="pull-left">
							<a href="#intensive<?php echo $f['patient_id'];?>" data-target="#intensive<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-default btn-md">Monthly Dosage</a>
						</div>
					</div>
					<h4>Date of Intake</h4>
					<div class="panel-body">
						<table class="table datatable">
							<thead>
								<tr class="default">
									<th><center>Date</center></th>
									<th><center>Dosage</center></th>
									<th><center>Remarks</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
								require 'config.php';
								$query = $conn->query("SELECT * FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
								$q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
								$f2 = $q2->fetch_array();
								while($fetch = $query->fetch_array()){
									if($fetch['remarks'] == 'Absent'){
										echo 
											"<tr class='danger'>
                                                            <td><center> ".$fetch['date_taken']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td><strong><center>".$fetch['remarks']."</center></strong></td>
                                                        </tr>";

									}
									else
									{
										echo
											"<tr class='success'>
                                                            <td><center> ".$fetch['date_taken']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td><strong><center>".$fetch['remarks']."</center></strong></td>
                                                        </tr>";
									}
								}
								?>
							</tbody>
						</table> 
					</div>
					<div class="panel-body">
						<h2><strong>Intensive Phase Summary - 6 months</strong></h2> <hr>
						<h4>Summary</h4>
						<div id="intensive_ipt" style="width: 100%; height: 425px"></div>
					</div>
					<!-- Follow-up Visit-->
					<h2><strong>Follow-up Visit</strong></h2><hr>
					<h4>Overview</h4>
					<div class="panel-body">
						<?php
						$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
						$q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
						$f = $q->fetch_array();
						$id=$f['patient_id'];
						?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>Follow-up Date</center></th>
									<th><center>Remarks</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
								$query = $conn->query("SELECT * FROM `follow_up_ipt` where `patient_id` = '$id'") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
								?>
								<tr>
									<td><center><?php echo $fetch['follow_up_date']?></center></td>
									<td><center><?php echo $fetch['remarks']?></center></td>
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
								$q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
								$f = $q->fetch_array();
								$q1 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' && `q1` = '✓'") or die (mysqli_error());
								$f1 = $q1->fetch_array();
								$q2 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' && `q2` = '✓'") or die (mysqli_error());
								$f2 = $q2->fetch_array();
								$q3 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' && `q3` = '✓'") or die (mysqli_error());
								$f3 = $q3->fetch_array();
								$q4 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' && `q4` = '✓'") or die (mysqli_error());
								$f4 = $q4->fetch_array();
								$q5 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' && `q5` = '✓'") or die (mysqli_error());
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
					</div>&nbsp;<hr>

				</div> 
			</div>
		</div>
	</div>
	<div class="col-md-3" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>


