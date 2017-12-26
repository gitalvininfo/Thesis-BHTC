<!-- Add Drug Preparations -->
<?php
$date = date('F j, Y, l');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="update_drug_preparations<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Drug Preparations - <?php echo $date?></h4>
            </div>
            <form role="form" class="form-horizontal" action="actions/drug_preparations.php" method="post" onsubmit="return confirm('Are you sure you want to new drug preparations?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="block">
                                <h3>Drug Preparations for <?php echo $fetch['patient_name']?></h3>
                                <h5 class="push-up-20">Isoniazid</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="top" title="Isoniazid" type="number" class="form-control" name="isoniazid" placeholder="Isoniazid" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> Rifampicin</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="top" title="Rifampicin" type="number" class="form-control" name="rifampicin" placeholder="Rifampicin" required/>
                                    </div>
                                </div><h5 class="push-up-20"> Pyrazinamide</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="top" title="Pyrazinamide" type="number" class="form-control" name="pyrazinamide" placeholder="Pyrazinamide" required/>
                                    </div>
                                </div><h5 class="push-up-20"> Ethambutol</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="top" title="Ethambutol" type="number" class="form-control" name="ethambutol" placeholder="Ethambutol" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-20"> Streptomycin</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="top" title="Streptomycin" type="number" class="form-control" name="streptomycin" placeholder="Streptomycin" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="add_drug_preparations"><span class="fa fa-check"></span>Submit</button>
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
<!-- End Drug Preparations -->

