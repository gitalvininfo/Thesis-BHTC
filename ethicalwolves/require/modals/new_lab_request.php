<!-- New Lab Request -->
<?php

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="new_lab_request<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="largeModalHead"><strong>New Laboratory Request</strong></h4>
			</div>
			<form id="labrequest" role="form" class="form-horizontal" action="actions/add_laboratory_request.php" method="post" onsubmit="return confirm('Are you sure you want to add this laboratory request?');">
				<div class="modal-body">
					<div class="row">
						<div class="panel-body">
							<div class="col-md-12">
								<div class="col-md-6">
									<h5 class="push-up-1">Name of Collection Unit</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
											<select class="form-control select" data-live-search="true" name="collection_unit" required>
												<option>Select</option>
												<option value="Abcasa Barangay Health Station">Abcasa Barangay Health Station</option>
												<option value="Alangilan Barangay Health Station">Alangilan Barangay Health Station</option>
												<option value="Alijis Barangay Health Station">Alijis Barangay Health Station</option>
												<option value="Banago Barangay Health Station">Banago Barangay Health Station</option>
												<option value="Bata Barangay Health Station">Bata Barangay Health Station</option>
												<option value="Cabug Barangay Health Station">Cabug Barangay Health Station</option>
												<option value="Estefania Barangay Health Station">Estefania Barangay Health Station</option>
												<option value="Felisa Barangay Health Station">Felisa Barangay Health Station</option>
												<option value="Granada Barangay Health Station">Granada Barangay Health Station</option>
												<option value="Handumanan Barangay Health Station">Handumanan Barangay Health Station</option>
												<option value="Lopez Jaena Health Plus">Lopez Jaena Health Plus</option>
												<option value="Mabini Health Plus">Mabini Health Plus</option>
												<option value="Mandalagan Barangay Health Station">Mandalagan Barangay Health Station</option>
												<option value="Mansilingan Barangay Health Station">Mansilingan Barangay Health Station</option>
												<option value="Montevista Barangay Health Station">Montevista Barangay Health Station</option>
												<option value="Pahanocoy Barangay Health Station">Pahanocoy Barangay Health Station</option>
												<option value="Punta Taytay Barangay Health Station">Punta Taytay Barangay Health Station</option>
												<option value="Singcang Barangay Health Station">Singcang Barangay Health Station</option>
												<option value="Sum-ag Barangay Health Station">Sum-ag Barangay Health Station</option>
												<option value="Taculing Barangay Health Station">Taculing Barangay Health Station</option>
												<option value="Tangub Barangay Health Station">Tangub Barangay Health Station</option>
												<option value="Villa Esperanza Barangay Health Station">Villa Esperanza Barangay Health Station</option>
												<option value="Villamonte Barangay Health Station">Villamonte Barangay Health Station</option>
												<option value="Vista Alegre Barangay Health Station">Vista Alegre Barangay Health Station</option>
											</select>
										</div>
									</div>
									<h5 class="push-up-1">Date of Request</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input data-toggle="tooltip" data-placement="bottom" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" />
										</div>
									</div>
									<h5 class="push-up-1">Name of Requesting Physician</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input data-toggle="tooltip" data-placement="bottom" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" />
										</div>
									</div>
									<h5 class="push-up-1">Date Specimen 1 Collected</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input data-toggle="tooltip" data-placement="bottom" title="Date Sample 1 Collected" type="text" class="form-control datepicker" name="date_sample_collected" required/>
										</div>
									</div>
									<h5 class="push-up-1">Date Specimen 2 Collected</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input data-toggle="tooltip" data-placement="bottom" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected2"/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h5 class="push-up-1">Name of Specimen Collector</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<input data-toggle="tooltip" data-placement="bottom" title="Name of Specimen Collector" type="text" class="form-control" name="sample_collector" required/>
										</div>
									</div>
									<h5 class="push-up-1">Designation of Specimen Collector</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<select class="form-control select" id="formStatus"  name="designation" required>
												<option value="">Select</option>
												<option value="Barangay Health Worker">Barangay Health Worker</option>
												<option value="Midwife">Midwife</option>
												<option value="Nurse">Nurse</option>
											</select>
										</div>
									</div>
									<h5 class="push-up-1">Reason for Examination</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<select class="form-control select" id="formStatus"  name="reason_for_examination" required>
												<option value="">Select</option>
												<option value="Diagnostic">Diagnositc</option>
												<option value="Baseline">Baseline</option>
												<option value="Follow-up">Follow-up</option>
											</select>
										</div>
									</div>
									<h5 class="push-up-1">Repeat Collection</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<select class="form-control select" id="formStatus"  name="repeat_collection" required>
												<option value="">Select</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<h5 class="push-up-1">Test Requested</h5>
									<div class="form-group ">
										<div class="col-md-12 col-xs-12">
											<select class="form-control select" id="formStatus"  name="test_requested" data-live-search="true" required>
												<option>Select</option>
												<option value="DSSM">Direct Sputum Smear Microscopy</option>
												<option value="Xpert MTB/RIF">Xpert MTB/RIF</option>
												<option value="TB Culture">TB Culture</option>
												<option value="Drug Susceptible Testing">Drug Susceptible Testing</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>                        
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
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
<!-- End New Lab Request -->
