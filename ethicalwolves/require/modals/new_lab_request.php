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
                <h4 class="modal-title" id="defModalHead"><strong><span class="fa fa-plus"></span> New Laboratory Request</strong></h4>
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
                                    <label class="col-md-3 col-xs-12 control-label">Designation of Specimen Collector</label>
                                    <div class="col-md-9 col-xs-12">
                                        <div class="form-group">
                                            <select class="form-control select" id="formStatus"  name="designation" required>
                                                <option value="">Choose Designation...</option>
                                                <option value="Barangay Health Worker">Barangay Health Worker</option>
                                                <option value="Midwife">Midwife</option>
                                                <option value="Nurse">Nurse</option>
                                            </select>
                                        </div>
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
