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
                                  $q1 = $conn->query("SELECT *, sum(dosage) as dosage FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' group by month order by `month` desc") or die(mysqli_error());
                                  while($fetch = $q1->fetch_array()){
                                ?>
                                <tr>
                                    <td><center><?php echo $fetch['month']. " " .$fetch['year']?></center></td>
                                    <td><center><?php echo $fetch['dosage']. " mg"?></center></td>
                                </tr>
                                <?php
                                  }
                                ?>
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