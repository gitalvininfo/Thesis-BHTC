<!-- Edit Treatment Partner-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `treatment_record`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatepartner<?php echo $fetch['treatment_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-pencil-square-o"></span> Update Treatment Partner</h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group ">
                            <label class="col-md-4 col-xs-12 control-label">Treatment Partner Name</label>
                            <div class="col-md-8 col-xs-12">
                                <input type="hidden" class="form-control" name="treatment_id" value="<?php echo $fetch['treatment_id'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" value="<?php echo $fetch['treatment_partner_name']?>" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-md-4 col-xs-12 control-label">Designation</label>
                            <div class="col-md-8 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Designation of Treatment Partner" type="text" class="form-control" name="designation_treatment_partner" value="<?php echo $fetch['designation_treatment_partner']?>" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name ="edit_treatment_partner"><span class="fa fa-check"></span>Save</button> 
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
<!-- End of Edit Treatment Partner-->
