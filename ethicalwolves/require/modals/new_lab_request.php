<!-- New Lab Request -->
<?php

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="new_lab_request<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-plus"></span> New Laboratory Request</h4>
            </div>
            <form id="labrequest" role="form" class="form-horizontal" action="actions/add_laboratory_request.php" method="post" onsubmit="return confirm('Are you sure you want to add this laboratory request?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="block">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Collection Unit</label>
                                    <div class="col-md-9">   
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <select class="form-control select" data-live-search="true" name="collection_unit" required>
                                            <option>Name of Collection Unit</option>
                                            <option value="Bata Health Center">Bata Health Center</option>
                                            <option value="Sum-ag Health Center">Sum-ag Health Center</option>
                                            <option value="Estefania Health Center">Estefania Health Center</option>
                                            <option value="Banago Health Center">Banago Health Center</option>
                                            <option value="Handumanan Health Center">Handumanan Health Center</option>
                                            <option value="Taculing Health Center">Taculing Health Center</option>
                                            <option value="Villamonte Health Center">Villamonte Health Center</option>
                                            <option value="Taculing Health Center">Taculing Health Center</option>
                                            <option value="Singcang-Airport Health Center">Singcang-Airport Health Center</option>
                                            <option value="Pta. Taytay Health Center">Pta. Taytay Health Center</option>
                                            <option value="Montevista Health Center">Montevista Health Center</option>
                                            <option value="Mansilingan Health Center">Mansilingan Health Center</option>
                                            <option value="Mandalagan Health Center">Mandalagan Health Center</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Date of Request</label>
                                    <div class="col-md-9 col-xs-12">         
                                        <input data-toggle="tooltip" data-placement="right" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" placeholder="Date of Request" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Requesting Physician</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="right" title="Requesting Physician" placeholder="Requesting Physician" type="text" class="form-control" name="requesting_physician" />
                                    </div>

                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Date Specimen 1 Collected</label>
                                    <div class="col-md-9 col-xs-12">         
                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 1 Collected" type="text" class="form-control datepicker" name="date_sample_collected" placeholder="Date Sample 1 Collected" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Date Specimen 2 Collected </label>
                                    <div class="col-md-9 col-xs-12">         
                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected2" placeholder="Date Sample 2 Collected"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Specimen Collector</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="right" title="Name of Specimen Collector" placeholder="Name of Specimen Collector" type="text" class="form-control" name="sample_collector" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Contact Number</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="right" title="Contact Number" placeholder="Contact Number" type="text" class="form-control" name="contact_number" required/>
                                    </div>
                                </div><hr>
                                <div class="col-md-12">
                                    <h6> Reason for Examination</h6>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="reason_for_examination" value="Diagnostic" required/> Diagnostic
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="reason_for_examination" value="Baseline" required/> Baseline
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="reason_for_examination" value="Follow-up" required/> Follow-up
                                            </label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-6">
                                    <h6> Specimen Type</h6>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="specimen_type" value="Sputum" required/> Sputum
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="specimen_type" value="Others" required/> Others
                                            </label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-6">
                                    <h6> Repeat Collection</h6>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="repeat_collection" value="Yes" required/> Yes
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="repeat_collection" value="No" required/> No
                                            </label>
                                        </div>
                                    </div><hr>
                                </div>
                                <div class="col-md-12">
                                    <h6> Test Requested</h6>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="test_requested" value="DSSM" required/> DSSM
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="test_requested" value="Xpert MTB/RIF" required/> Xpert MTB/RIF
                                            </label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="test_requested" value="TB Culture" required/> TB Culture
                                            </label>
                                        </div>
                                        <div class="col-md-6">                                    
                                            <label class="check">
                                                <input type="radio" class="iradio" name="test_requested" value="Drug Susceptible Testing" required/> Drug Susceptible Testing
                                            </label>
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
