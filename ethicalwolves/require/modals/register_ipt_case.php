<!-- Register IPT -->
<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="registeript<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong> <?php echo $fetch['name']?> </strong> </h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to register this IPT case?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3> Date Evaluated</h3>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                            <input data-toggle="tooltip" data-placement="bottom" title="Date Evaluated" type="text" class="form-control datepicker" name="date_evaluated" required/>
                                        </div>
                                    </div>
                                    <h3> Date IPT Started</h3>
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <input data-toggle="tooltip" data-placement="bottom" title="Date IPT Started" type="text" class="form-control datepicker"  name="date_ipt_started" required/>
                                        </div>
                                    </div>
                                    <h3> Choose Diagnosis</h3>
                                    <div class="form-group">
                                        <div class="col-md-12">                                        
                                            <select class="form-control select" name="diagnosis" required>
                                                <option>Choose Diagnosis...</option>
                                                <option value="TB Infection">TB Infection</option>
                                                <option value="TB Exposure">TB Exposure</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="register_patient_ipt"><span class="fa fa-key"></span>Register</button>
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
<!-- End Register IPT -->
