<!-- Edit Treatment Partner-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `registration`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatepartner<?php echo $fetch['tb_case_no'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Update Treatment Partner</h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post" onsubmit="return confirm('Are you sure you want to this treatment partner?');">
                <div class="modal-body">
                    <div class="panel-body">
                        <h5 class="push-up-1">Treatment Partner Name</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input type="hidden" class="form-control" name="tb_case_no" value="<?php echo $fetch['tb_case_no'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" value="<?php echo $fetch['treatment_partner_name']?>" required/>
                            </div>
                        </div>
                        <h5 class="push-up-1">Treatment Regimen</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" name="designation_treatment_partner" required>
                                    <option value="<?php echo $fetch['designation_treatment_partner']?>"><?php echo $fetch['designation_treatment_partner']?></option>
                                    <option value="Barangay Health Worker">Barangay Health Worker</option>
                                    <option value="Midwife">Midwife</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Others">Others</option>
                                </select>
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
