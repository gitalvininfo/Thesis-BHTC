<!-- Register IPT -->
<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="registeript<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong> <?php echo $fetch['name']?> </strong> </h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to register this IPT case?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h5 class="push-up-1">Diagnosis</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                            <select class="form-control select" name="diagnosis" required>
                                                <option>Select</option>
                                                <option value="TB Infection">TB Infection</option>
                                                <option value="TB Exposure">TB Exposure</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Source of Patient</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="source_of_patient" required>
                                                <option>Select</option>
                                                <option value="Public Health Center">Public Health Center</option>
                                                <option value="Private Hospitals/Clinics/NGO's">Private Hospitals/Clinics/NGO's</option>
                                                <option value="Community">Community</option>
                                                <option value="Other Government Facilities">Other Government Facilities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Treatment Partner Name</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" placeholder="Treatment Partner Name" required/>
                                        </div>
                                    </div>
                                    <h5 class="push-up-1">Designation of Treatment Partner</h5>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select" name="designation_treatment_partner" required>
                                                <option>Select</option>
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
                    <button type="submit" class="btn btn-info" name="register_patient_ipt"><span class="fa fa-check"></span>Register</button>
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
<!-- End Register IPT -->
