<div class="modal fade" id="dssm" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of Patients Conducted with Direct Sputum Smear Miscroscopy | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Laboratory Diagnosis</center></th>
                                <th><center>Examined By</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dssm_examination` WHERE `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $q1 = $conn->query("SELECT  `year`, `tb_case_no` FROM `registration` WHERE `patient_id` = '$id' && `year` = '$year'") or die(mysqli_error());
                        $f1 = $q1->fetch_array();
                            ?>
                            <tr>
                                <td><center><?php echo $f1['year']. "-". "080". "-" .$f1['tb_case_no']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date_examined']?></center></td>
                                <td><center><?php echo $fetch2['laboratory_diagnosis']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
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
<div class="modal fade" id="xpert" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of Patients Conducted with Xpert MTB/RIF | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Result</center></th>
                                <th><center>Examined By</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $q1 = $conn->query("SELECT  `year`, `tb_case_no` FROM `registration` WHERE `patient_id` = '$id' && `year` = '$year'") or die(mysqli_error());
                        $f1 = $q1->fetch_array();
                            ?>
                            <tr>
                                <td><center><?php echo $f1['year']. "-". "080". "-" .$f1['tb_case_no']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date_examined']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
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
<div class="modal fade" id="tbculture" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of Patients Conducted with TB Culture | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>TB Culture Result</center></th>
                                <th><center>Date Released</center></th>
                                <th><center>Examined By</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $q1 = $conn->query("SELECT  `year`, `tb_case_no` FROM `registration` WHERE `patient_id` = '$id' && `year` = '$year'") or die(mysqli_error());
                        $f1 = $q1->fetch_array();
                            ?>
                            <tr>
                                <td><center><?php echo $f1['year']. "-". "080". "-" .$f1['tb_case_no']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['tb_culture_result']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
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
<div class="modal fade" id="dst" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of Patients Conducted with Drug Susceptible Test | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Method</center></th>
                                <th><center>Remarks</center></th>
                                <th><center>Examined By</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $q1 = $conn->query("SELECT  `year`, `tb_case_no` FROM `registration` WHERE `patient_id` = '$id' && `year` = '$year'") or die(mysqli_error());
                        $f1 = $q1->fetch_array();
                            ?>
                            <tr>
                                <td><center><?php echo $f1['year']. "-". "080". "-" .$f1['tb_case_no']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['dst_laboratory']?></center></td>
                                <td><center><?php echo $fetch2['method']?></center></td>
                                <td><center><?php echo $fetch2['remarks']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
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
