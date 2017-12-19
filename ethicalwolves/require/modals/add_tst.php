<!-- New TST-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="new_tst<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> Tuberculin Skin Testing Result</h4>
            </div>
            <form role="form" id="jvalidate" class="form-horizontal" action="actions/add_tst.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Name</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Result" type="text" class="form-control" name="result" placeholder="TST Result" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Date Read</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Date Read" type="text" class="form-control datepicker" value="Date Read" name="date_read" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="add_tst"><span class="fa fa-check"></span>Save</button>
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
<!-- End TST-->
