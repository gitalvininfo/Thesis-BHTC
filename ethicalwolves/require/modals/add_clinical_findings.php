<!-- Add Clinical -->
<?php
$date = date('F j, Y, l');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="update_clinical<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-stethoscope"></span> New Clinical Findings</h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/clinical_findings.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="block">
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                            <input data-toggle="tooltip" data-placement="right" title="Date Visited" type="text" class="form-control" name="date_visited" style="color:#000;" value="<?php echo $date ?>" readonly/> 
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Weight in kg." type="number" class="form-control" name="weight" placeholder="Weight in kg." required/> 
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>* Check the appropriate symptoms for <?php echo $f['patient_name']?></h4>
                                <h5 class="push-up-20"> 1. Unexplained fever greater than 2 weeks</h5>
                                <div class="form-group">
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="/" name="q1" required/> Yes</label>
                                    </div>
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="0" name="q1" required/> No </label>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> 2. Unexplained cough or wheezing greater than 2 weeks</h5>
                                <div class="form-group">
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="/" name="q2" required/> Yes</label>
                                    </div>
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="0" name="q2" required/> No </label>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> 3. Unimproved general well-being</h5>
                                <div class="form-group">
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="/" name="q3" required/> Yes</label>
                                    </div>
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="0" name="q3" required/> No </label>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> 4. Poor appetite</h5>
                                <div class="form-group">
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="/" name="q4" required/> Yes</label>
                                    </div>
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="0" name="q4" required/> No </label>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> 5. Positive PE findings for Extra-Pulmonary TB</h5>
                                <div class="form-group">
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="/" name="q5" required/> Yes</label>
                                    </div>
                                    <div class="col-md-1">                                    
                                        <label class="check"><input type="radio" class="iradio" value="0" name="q5" required/> No </label>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> 6. Side Effects</h5>
                                <div class="form-group ">
                                    <div class="col-md-6 col-xs-6">
                                        <select multiple class="form-control select" id="formStatus" name="q6" required>
                                            <option value="">Choose Side Effects</option>
                                            <option value="Itchiness">Itchiness</option>
                                            <option value="Skin Rashes">Skin Rashes</option>
                                            <option value="Vomiting">Vomiting</option>
                                            <option value="Abdominal Pain">Abdominal Pain</option>
                                            <option value="Joint Paints">Joint Pains</option>
                                            <option value="Numbness">Numbness</option>
                                            <option value="Yellowing of Sclerae and skin">Yellowing of Sclerae and skin</option>
                                            <option value="Visual Disturbance">Visual Disturbance</option>
                                            <option value="Hearing Disturbance">Hearing Disturbance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="add_new_clinical"><span class="fa fa-check"></span>Submit</button>
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
<!-- End Clinical -->
