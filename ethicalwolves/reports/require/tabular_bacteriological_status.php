<div class="modal fade" id="bc" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">Bacteriological Status - Bacteriologically Confirmed | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>
                                <th><center>Patient Name</center></th>
                                <th><center>Registration Date</center></th>
                                <th><center>Source of Patient</center></th>
                                <th><center>Registration Group</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center></td>
                                <td><center><?php echo $fetch2['registration_group']?></center></td>
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
<div class="modal fade" id="cd" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">Bacteriological Status - Bacteriologically Confirmed | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th>
                                    <center>TB Case No</center>
                                </th>
                                <th>
                                    <center>Patient Name</center>
                                </th>
                                <th>
                                    <center>Registration Date</center>
                                </th>
                                <th>
                                    <center>Source of Patient</center>
                                </th>
                                <th>
                                    <center>Registration Group</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                            ?>
                            <tr>
                                <td>
                                    <center>
                                        <?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo $fetch['patient_name']?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo $fetch2['registration_date']?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo $fetch2['source_of_patient']?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo $fetch2['registration_group']?>
                                    </center>
                                </td>
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
