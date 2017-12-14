<!-- Edit Medicine-->
<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatedata<?php echo $fetch['medicine_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-pencil-square-o"></span> Edit Medicine</h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group ">
                            <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                            <div class="col-md-8 col-xs-12">
                                <input type="hidden" class="form-control" name="medicine_id" value="<?php echo $fetch['medicine_id'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_name" value="<?php echo $fetch['medicine_name']?>" required/>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-md-3 col-xs-12 control-label">Description</label>
                            <div class="col-md-8 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Description" type="text" class="form-control" name="medicine_description" value="<?php echo $fetch['medicine_description']?>" required/>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name ="edit_medicine"><span class="fa fa-check"></span>Save</button> 
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
<!-- End of Edit Medicine-->
