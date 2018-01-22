<!-- Register Patient -->
<?php
$year = date("Y");
$date = date('F j, Y');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="registerpatient<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead"><strong> <?php echo $fetch['patient_name']?> </strong></h4><small>Registration Date: <?php echo $date?></small> 
            </div>
            <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to register this patient?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h5 class="push-up-1">Source of Patient</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                            <select class="form-control select" name="source_of_patient" required>
                                                <option>Select</option>
                                                <option value="Public Health Center">Public Health Center</option>
                                                <option value="Private Hospitals">Private Hospitals/Clinics/NGO's</option>
                                                <option value="Community">Community</option>
                                                <option value="Other Government Facilities">Other Government Facilities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Registration Group</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="registration_group" required>
                                                <option>Select</option>
                                                <option value="New">New</option>
                                                <option value="Relapse">Relapse</option>
                                                <option value="Treatment After Failure">Treatment After Failure</option>
                                                <option value="Treatment After Loss Follow-up">Treatment After Loss Follow-up</option>
                                                <option value="PTOU">PTOU</option>
                                                <option value="Transfer-in">Transfer-in</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Bacteriological Status</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="bacteriological_status" required>
                                                <option>Select</option>
                                                <option value="Bacteriologically Confirmed">Bacteriologically Confirmed</option>
                                                <option value="Clinically Diagnosed">Clinically Diagnosed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Classification of Tuberculosis</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="classification_of_tb" required>
                                                <option>Select</option>
                                                <option value="Pulmonary">Pulmonary</option>
                                                <option value="Extra-pulmonary">Extra-pulmonary</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">BCG Scar</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="bcg_scar" required>
                                                <option>Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="push-up-1">History of TB</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="history" required>
                                                <option>Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Duration</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="duration" required>
                                                <option>Select</option>
                                                <option value="None">None</option>
                                                <option value="Less than 1 month">Less than 1 month</option>
                                                <option value="1 month or more">1 month or more</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Treatment Regimen</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="treatment_regimen_category" required>
                                                <option>Select</option>
                                                <option value="Category I - 2HRZE/4HR">Category I - 2HRZE/4HR</option>
                                                <option value="Category Ia - 2HRZE/10HR">Category Ia - 2HRZE/10HR</option>
                                                <option value="Category II - 2HRZES/1HRZE/5HRE">Category II - 2HRZES/1HRZE/5HRE</option>
                                                <option value="Category IIa - 2HRZES/1HRZE/9HRE">Category IIa - 2HRZES/1HRZE/9HRE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Treatment Partner Name</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" placeholder="Treatment Partner Name" required/>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Designation Treatment Partner</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" id="formStatus"  name="designation_treatment_partner" required>
                                                <option value="">Choose Designation...</option>
                                                <option value="Barangay Health Worker">Barangay Health Worker</option>
                                                <option value="Midwife">Midwife</option>
                                                <option value="Nurse">Nurse</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="register_patient"><span class="fa fa-check"></span>Register</button>
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
<!-- End Register Patient -->
