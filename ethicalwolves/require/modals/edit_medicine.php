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
                        <h5 class="push-up-1">Medicine Name</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input type="hidden" class="form-control" name="medicine_id" value="<?php echo $fetch['medicine_id'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_name" value="<?php echo $fetch['medicine_name']?>"/>
                            </div>
                        </div>
                        <h5 class="push-up-1">Medicine Description</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <textarea data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_description" placeholder="Medicine description"><?php echo $fetch['medicine_description']?></textarea>
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
