						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<div class="btn-group pull-right">
										<div class="pull-left">
										</div>
									</div>
								</div>
								<div id="print">
									<div class="panel-body">
										<?php
										require '../config.php';
										$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
										$find = $query->fetch_array();
										?>
										<h3><center>Summary for Barangay <?php echo $_GET['id']?> Year <?php echo $year?></center></h3>           <hr>
										<h6><mark>A. Treatment Outcome</mark></h6>
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
										?>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>Currently in Treatment</center></th>
													<th ><center>Cured</center></th>
													<th ><center>Treatment Completed</center></th>
													<th><center>Died</center></th>
													<th ><center>Failed</center></th>
													<th ><center>Lost to Follow-up</center></th>
													<th ><center>Not Evaluated</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><center><?php echo $f8['total']?></center></td>
													<th><center><strong><?php echo $f1['total']?></strong></center></th>
													<th><center><strong><?php echo $f2['total']?></strong></center></th>
													<th><center><strong><?php echo $f3['total']?></strong></center></th>
													<th><center><strong><?php echo $f4['total']?></strong></center></th>
													<th><center><strong><?php echo $f5['total']?></strong></center></th>
													<th><center><strong><?php echo $f6['total']?></strong></center></th>
												</tr>
											</tbody>
										</table>
										<h6><mark>B. Registration Group</mark></h6>
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
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>New</center></th>
													<th ><center>Relapse</center></th>
													<th ><center>Treatment After Loss to Follow-up</center></th>
													<th><center>Treatment After Failure</center></th>
													<th ><center>Previous Treatment Outcone Unknown</center></th>
													<th ><center>Transfer-in</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th><center><strong><?php echo $f1['total']?></strong></center></th>
													<th><center><strong><?php echo $f2['total']?></strong></center></th>
													<th><center><strong><?php echo $f3['total']?></strong></center></th>
													<th><center><strong><?php echo $f4['total']?></strong></center></th>
													<th><center><strong><?php echo $f5['total']?></strong></center></th>
													<th><center><strong><?php echo $f6['total']?></strong></center></th>
												</tr>
											</tbody>
										</table>
										<h6><mark>C. Source of Patient</mark></h6>
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
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>Public Health Center</center></th>
													<th ><center>Private Hospitals</center></th>
													<th ><center>Community</center></th>
													<th><center>Other Government Facilities</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th><center><strong><?php echo $f1['total']?></strong></center></th>
													<th><center><strong><?php echo $f2['total']?></strong></center></th>
													<th><center><strong><?php echo $f3['total']?></strong></center></th>
													<th><center><strong><?php echo $f4['total']?></strong></center></th>
												</tr>
											</tbody>
										</table>
										<h6><mark>D. Bacteriological Status</mark></h6>
										<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$bac = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.bacteriological_status = 'Bacteriologically Confirmed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
														$f1 = $bac->fetch_array();
														$cli = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.bacteriological_status = 'Clinically Diagnosed'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
														$f2 = $cli->fetch_array();
										?>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>Bacteriologically Confirmed</center></th>
													<th ><center>Clinically Diagnosed</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th><center><strong><?php echo $f1['total']?></strong></center></th>
													<th><center><strong><?php echo $f2['total']?></strong></center></th>
												</tr>
											</tbody>
										</table>
										<h6><mark>E. Classfication of TB Disease</mark></h6>
										<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$pul = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.classification_of_tb = 'Pulmonary'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
														$f1 = $pul->fetch_array();
														$ext = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.classification_of_tb = 'Extra-pulmonary'  && registration.year = '$_GET[year]' && patient.barangay = '$_GET[id]'") or die(mysqli_error());
														$f2 = $ext->fetch_array();
										?>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>Pulmonary</center></th>
													<th ><center>Extra-Pulmonary</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th><center><strong><?php echo $f1['total']?></strong></center></th>
													<th><center><strong><?php echo $f2['total']?></strong></center></th>
												</tr>
											</tbody>
										</table>

										<h6 style="float:left"></h6><br><br>
										<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
										<h6 style="float:left">Approved by:</h6>
									</div>
								</div>
							</div>
						</div>