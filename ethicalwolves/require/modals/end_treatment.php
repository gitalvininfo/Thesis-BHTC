<!-- Add Clinical -->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="end_treatment<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Treatment Outcome</h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/end_treatment.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="block">
                             <h3>Choose Treatment Outcome for <?php echo $fetch['patient_name']?></h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required/>
                                        <label class="check"><input type="radio" class="iradio" name="status" value ="Cured" required/> Cured</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value ="Treatment Completed" required/> Treatment Completed</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Died" required/> Died</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Failed" required/> Failed</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Lost to followup" required/> Lost to Follow-up</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Not Evaluated" required/> Not Evaluated</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Excluded from Cohort" required/> Excluded from Cohort</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="end_treatment"><span class="fa fa-check"></span>Save</button>
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
