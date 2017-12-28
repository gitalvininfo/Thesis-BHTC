<div class="modal fade" id="abcasa" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead"> Barangay Abcasa </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>Drug Name</center></th>
                                <th><center>Date Given</center></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `medication_dispensation` WHERE `health_center` = 'Abcasa Barangay Health Station' ORDER BY `dispensation_id` DESC") or die(mysqli_error());
                            while($fetch = $query->fetch_array()){
                            ?>
                            <tr>
                                <td><center><?php echo $fetch['medicine_name']?></center> </td>
                                <td><center><?php echo $fetch['date_given']?></center> </td>
                            </tr>
                            <?php
                            }
                            $conn->close();
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
<div class="modal fade" id="alijis" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Alijis Barangay Health Station </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>Dispensation Number</center></th>
                                <th><center>Drug Name</center></th>
                                <th><center>Date Given</center></th>
                                <th><center>Quantity</center></th>
                                <th><center>Received By</center></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `medication_dispensation` WHERE `health_center` = 'Alijis Barangay Health Station' ORDER BY `dispensation_id` DESC") or die(mysqli_error());
                            while($fetch = $query->fetch_array()){
                            ?>
                            <tr>
                                <td><center><?php echo $fetch['dispensation_id']?></center></td>
                                <td><center><?php echo $fetch['medicine_name']?></center> </td>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']. ", " .$fetch['year']?></center> </td>
                                <td><center><?php echo $fetch['quantity']?> boxes</center> </td>
                                <td><center><?php echo $fetch['received_by']?></center> </td>
                            </tr>
                            <?php
                            }
                            $conn->close();
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