<!-- Edit IPT -->
<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updateipt<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Update Personal Information</h4>
            </div>
            <form id="ipt" role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Name</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="name" value="<?php echo $fetch['name']?>" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Age</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" value="<?php echo $fetch['age']?>" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-xs-12 control-label">Gender</label>
                                    <div class="col-md-9">                                        
                                        <select class="form-control select" name="gender">
                                            <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-xs-12 control-label">Address</label>
                                    <div class="col-md-9 col-xs-12">                                            
                                        <textarea class="form-control" rows="3" name="address" data-toggle="tooltip" data-placement="bottom" title="Complete Home Address"><?php echo $fetch['address']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Emergency No.</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" value="<?php echo $fetch['emergency_no']?>" required/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Birthdate</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']?>" name="birthdate" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="edit_ipt"><span class="fa fa-pencil-square-o"></span>Update</button>
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
<!-- End IPT -->
