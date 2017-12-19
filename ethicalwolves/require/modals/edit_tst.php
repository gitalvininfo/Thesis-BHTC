<!-- Edit TST-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `tst`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="updatetst<?php echo $fetch['tst_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-pencil-square-o"></span> Edit Tuberculin Skin Testing Result</h4>
            </div>
            <form role="form" id="jvalidate" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">TST Result</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input type="hidden" class="form-control" name="tst_id" value="<?php echo $fetch['tst_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Result" type="text" class="form-control" name="result" value="<?php echo $fetch['result']?>" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Date Read</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Date Read" type="text" class="form-control datepicker" value="<?php echo $fetch['date_read']?>" name="date_read" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="edit_tst"><span class="fa fa-check"></span>Save</button>
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
<!-- End Edit TST-->
