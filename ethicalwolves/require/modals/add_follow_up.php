<!-- New Family Member-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="follow_up<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Follow-up Visit</h4>
            </div>
            <form role="form" id="jvalidate" class="form-horizontal" action="actions/add_follow_up.php" method="post" onsubmit="return confirm('Are you sure you want to add this new follow-up date?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <h5 class="push-up-1">Follow-up Date</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <input type="text" class="form-control datepicker" name="follow_up_date" data-toggle="tooltip" data-placement="bottom" title="Follow-up Date" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Remarks</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <textarea class="form-control" rows="3" name="remarks" data-toggle="tooltip" data-placement="bottom" title="Remarks"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="add_follow_up"><span class="fa fa-check"></span>Save</button>
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
<!-- End Family Member-->
