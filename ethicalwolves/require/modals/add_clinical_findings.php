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
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-stethoscope"></span> New Clinical Findings - <?php echo $date?></h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/clinical_findings.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="block">
                                <div class="form-group ">
                                    <label class="col-md-1 col-xs-12 control-label">Weight</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Weight in kg." type="number" class="form-control" name="weight" placeholder="Weight in kg." required/>
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
                                <div class="form-group">
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Itchiness"/> Itchiness</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Skin Rashes"/> Skin Rashes</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Vomiting"/> Vomiting</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Abnormal Pain"/> Abnormal Pain</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Joint Paints"/> Joint Paints</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Numbness"/> Numbness</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Yellowing of Sclerae and skin"/> Yellowing of Sclerae and skin</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Visual Disturbance"/> Visual Disturbance</label>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <label class="check"><input type="checkbox" class="icheckbox" name="q6" value="Hearing Disturbance"/> Hearing Disturbance</label>
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
