<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `laboratory_request` ORDER BY `lab_request_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="viewdata<?php echo $fetch['lab_request_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Laboratory Request of <?php echo $f1['patient_name']?></h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h5 class="push-up-5">Name of Collection Unit</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly style="font-size:12px;font-weight:bold;color:black" readonly name="collection_unit" value="<?php echo $fetch['collection_unit']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Date of Request</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="date_of_request" value="<?php echo $fetch['date_of_request']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Requesting Physician</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="requesting_physician" value="<?php echo $fetch['requesting_physician']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Date Specimen 1 Collected</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="date_sample_collected" value="<?php echo $fetch['date_sample_collected']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Date Specimen 2 Collected</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="date_sample_collected2" value="<?php echo $fetch['date_sample_collected2']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Contact Number</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="contact_number" value="<?php echo $fetch['contact_number']?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="push-up-5">Specimen Collector</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="specimen_collector" value="<?php echo $fetch['sample_collector']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Reason for Examination</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="reason_for_examination" value="<?php echo $fetch['reason_for_examination']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Specimen Type</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="specimen_type" value="<?php echo $fetch['specimen_type']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Repeat Collection</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="repeat_collection" value="<?php echo $fetch['repeat_collection']?>"/>
                                </div>
                            </div>
                            <h5 class="push-up-20">Test Requested</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" readonly name="test_requested" value="<?php echo $fetch['test_requested']?>"/>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="modal-footer">
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
