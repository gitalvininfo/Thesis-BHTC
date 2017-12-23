<div class="modal fade" id="t" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>[T] - MTB detected, Rifampicin resistance not detected</strong></span>| <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Visual Apperance</center></th>
                                <th><center>Reading</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Result</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `result` = 'T' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                <td><center><?php echo $fetch2['reading']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
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
<div class="modal fade" id="rr" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>[RR] - MTB detected, Rifampicin resistance detected</strong></span>| <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Visual Apperance</center></th>
                                <th><center>Reading</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Result</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `result` = 'RR' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                <td><center><?php echo $fetch2['reading']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
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
<div class="modal fade" id="ti" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>[TI] - MTB detected, Rifampicin resistance indeterminate</strong></span>| <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Visual Apperance</center></th>
                                <th><center>Reading</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Result</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `result` = 'TI' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                <td><center><?php echo $fetch2['reading']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
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
<div class="modal fade" id="n" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>[N] - MTB not detected</strong></span>| <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Visual Apperance</center></th>
                                <th><center>Reading</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Result</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `result` = 'N' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                <td><center><?php echo $fetch2['reading']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
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
<div class="modal fade" id="i" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>[I] - Invalid / No Result</strong></span>| <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>Date Examined</center></th>
                                <th><center>Visual Apperance</center></th>
                                <th><center>Reading</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Result</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `result` = 'I' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                <td><center><?php echo $fetch2['reading']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['result']?></center></td>
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


