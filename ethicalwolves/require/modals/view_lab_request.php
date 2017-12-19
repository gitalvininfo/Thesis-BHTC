<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `laboratory_request` ORDER BY `lab_request_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="viewdata<?php echo $fetch['lab_request_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Laboratory Request of
                    <?php echo $f['patient_name']?>
                </h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="panel panel-info">
                            <div class="panel-body profile">
                                <div class="panel-body">
                                    <div class="contact-info">
                                        <p><small style="font-size:13px;">Name of Collection Unit</small><br/>
                                            <?php echo $fetch['collection_unit']?>
                                        </p>
                                        <p><small style="font-size:13px;">Date of Request</small><br/>
                                            <?php echo $fetch['date_of_request']?>
                                        </p>
                                        <p><small style="font-size:13px;">Requesting Physician</small><br/>
                                            <?php echo $fetch['requesting_physician']?>
                                        </p>
                                        <p><small style="font-size:13px;">Date Sample 1 Collected</small><br/>
                                            <?php echo $fetch['date_sample_collected']?>
                                        </p>
                                        <p><small style="font-size:13px;">Date Sample 2 Collected</small><br/>
                                            <?php echo $fetch['date_sample_collected2']?>
                                        </p>
                                        <p><small style="font-size:13px;">Name of Sample Collector</small><br/>
                                            <?php echo $fetch['sample_collector']?>
                                        </p>
                                        <p><small style="font-size:13px;">Contact Number</small><br/>
                                            <?php echo $fetch['contact_number']?>
                                        </p>
                                        <p><small style="font-size:13px;">Reason For Examination</small><br/>
                                            <?php echo $fetch['reason_for_examination']?>
                                        </p>
                                        <p><small style="font-size:13px;">Specimen Type</small><br/>
                                            <?php echo $fetch['specimen_type']?>
                                        </p>
                                        <p><small style="font-size:13px;">Test Requested</small><br/>
                                            <?php echo $fetch['test_requested']?>
                                        </p>
                                    </div>
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
