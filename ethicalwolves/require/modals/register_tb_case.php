<!-- Register Patient -->
<?php
$year = date("Y");
$date = date('F j, Y, l');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="registerpatient<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong> <?php echo $fetch['patient_name']?> | </strong>  <?php echo $date?></h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to register this patient?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3> Source of Patient</h3>
                                    <div class="form-group">
                                        <div class="col-md-6">                                    
                                            <label class="check">
                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                <input type="radio" class="iradio" name="source_of_patient" value="Public Health Center" required/> Public Health Center</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="source_of_patient" value ="Other Government Facilities" required/> Other Government Facilities</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="source_of_patient" value="Private Hospitals" required/>Private Hospitals/Clinics/NGO's</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="source_of_patient" value="Community" required/>Community</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-12">
                                    <h3> Registration Group</h3>
                                    <div class="form-group">
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="New" required/> New</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value ="Relapse" required/> Relapse</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="Treatment After Failure" required/> Treatment After Failure</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="TALF" required/>Treatment After Loss Follow-up</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="PTOU" required/> PTOU</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="Others" required/> Others</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="registration_group" value="Transfer-in" required/> Transfer-in</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-12">
                                    <h3> Bacteriological Status</h3>
                                    <div class="form-group">
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="bacteriological_status" value="Bacteriologically Confirmed" required/> Bacteriologically Confirmed</label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check"><input type="radio" class="iradio" name="bacteriological_status" value ="Clinically Diagnosed" required/> Clinically Diagnosed</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-6">
                                    <h3> Classification of TB</h3>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="classification_of_tb" value="Pulmonary" required/> Pulmonary</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="classification_of_tb" value ="Extra-pulmonary" required/> Extra-pulmonary</label>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <h3>BCG Scar</h3>
                                    <div class="form-group">
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="radio" class="iradio" name="bcg_scar" value="Yes" required/> Yes</label>
                                        </div>
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="radio" class="iradio" name="bcg_scar" value ="No" required/> No</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-6">
                                    <h3>History of TB</h3>
                                    <div class="form-group">
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="radio" class="iradio" name="history" value="Yes" required/> Yes</label>
                                        </div>
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="radio" class="iradio" name="history" value ="No" required/> No</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-6">
                                    <h3>Duration</h3>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="duration" value="Less than 1 month" required/> Less than 1 month</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="duration" value ="1 month or more" required/> 1 month or more</label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-12">
                                    <h3>Treatment Regimen Category</h3>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <select class="form-control select"  id="formStatus"  name="treatment_regimen_category" required>
                                                <option value="">Choose Regimen...</option>
                                                <option value="Category I - 2HRZE/4HR">Category I - 2HRZE/4HR</option>
                                                <option value="Category Ia - 2HRZE/10HR">Category Ia - 2HRZE/10HR</option>
                                                <option value="Category II - 2HRZES/1HRZE/5HRE">Category II - 2HRZES/1HRZE/5HRE</option>
                                                <option value="Category IIa - 2HRZES/1HRZE/9HRE">Category IIa - 2HRZES/1HRZE/9HRE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="register_patient"><span class="fa fa-key"></span>Register</button>
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
