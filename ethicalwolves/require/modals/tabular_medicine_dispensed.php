<?php
require 'config.php';

$query = $conn->query("SELECT * FROM `medication_dispensation`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="two<?php echo $fetch['month']?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defModalHead"><?php echo $fetch['month']. " " .$fetch['year']?></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>Drug Name</center></th>    
                                <th><center>Quantity</center></th>
                                <th><center>Date Given</center></th>
                                <th><center>Received By</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                      $month = $fetch['month'];
                                      $q1 = $conn->query("SELECT * FROM `medication_dispensation` WHERE `health_center` = '$_GET[health_center]' && `month` = '$month'") or die(mysqli_error());
                                      while($fetch = $q1->fetch_array()){
                            ?>
                            <tr>
                                <td><center><?php echo $fetch['medicine_name']?></center></td>
                                <td><center><span class="label label-info label-form"><?php echo $fetch['quantity']. " boxes"?></span></center></td>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['received_by']?></center></td>
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
        </div>
    </div>
</div>
<?php
                                     }
$conn->close();
?> 