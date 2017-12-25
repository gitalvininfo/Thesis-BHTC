<!-- Add Clinical -->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($f = $query->fetch_array()){
?>
<div id="continuation<?php echo $f['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Continuation Phase - Monthly Dosage Given</h4>
            </div>
            <form role="form" class="form-horizontal" method="post">
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr class="default">
                                    <th><center>Month</center></th>
                                    <th><center>Dosage Given</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  require 'config.php';
                                  $q1 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'January'") or die(mysqli_error());
                                  $f1 = $q1->fetch_array();
                                  $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'February'") or die(mysqli_error());
                                  $f2 = $q2->fetch_array();
                                  $q3 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'March'") or die(mysqli_error());
                                  $f3 = $q3->fetch_array();
                                  $q4 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'April'") or die(mysqli_error());
                                  $f4 = $q4->fetch_array();
                                  $q5 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'May'") or die(mysqli_error());
                                  $f5 = $q5->fetch_array();
                                  $q6 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'June'") or die(mysqli_error());
                                  $f6 = $q6->fetch_array();
                                  $q7 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'July'") or die(mysqli_error());
                                  $f7 = $q7->fetch_array();
                                  $q8 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'August'") or die(mysqli_error());
                                  $f8 = $q8->fetch_array();
                                  $q9 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'September'") or die(mysqli_error());
                                  $f9 = $q9->fetch_array();
                                  $q10 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'October'") or die(mysqli_error());
                                  $f10 = $q10->fetch_array();
                                  $q11 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'November'") or die(mysqli_error());
                                  $f11 = $q11->fetch_array();
                                  $q12 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'December'") or die(mysqli_error());
                                  $f12 = $q12->fetch_array();
                                ?>
                                <tr>
                                    <td><center>January</center></td>
                                    <td><center><?php echo $f1['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>February</center></td>
                                    <td><center><?php echo $f2['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>March</center></td>
                                    <td><center><?php echo $f3['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>April</center></td>
                                    <td><center><?php echo $f4['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>May</center></td>
                                    <td><center><?php echo $f5['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>June</center></td>
                                    <td><center><?php echo $f6['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>July</center></td>
                                    <td><center><?php echo $f7['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>August</center></td>
                                    <td><center><?php echo $f8['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>September</center></td>
                                    <td><center><?php echo $f9['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>October</center></td>
                                    <td><center><?php echo $f10['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>November</center></td>
                                    <td><center><?php echo $f11['sum(dosage)']. " mg"?></center></td>
                                </tr>
                                <tr>
                                    <td><center>December</center></td>
                                    <td><center><?php echo $f12['sum(dosage)']. " mg"?></center></td>
                                </tr>

                            </tbody>
                        </table> 
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
<!-- End Clinical -->