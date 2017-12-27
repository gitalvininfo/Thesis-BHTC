<!-- Resistant-->
<div class="modal fade" id="ami" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Amikacin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `amikacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="cap" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Capreomycin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `capreomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="eth" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Ethambutol - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `ethambutol` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="iso" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Isoniazid - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `isoniazid` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="kan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Kanamycin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `kanamycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="lev" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Levofloxacin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `levofloxacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="pyr" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Pyrazinamide - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `pyrazinamide` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="rif" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Rifampicin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `rifampicin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="str" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Streptomycin - Resistant</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `streptomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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




<!--Susceptible -->

<div class="modal fade" id="sami" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Amikacin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `amikacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="scap" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Capreomycin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `capreomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="seth" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Ethambutol - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `ethambutol` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="siso" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Isoniazid - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `isoniazid` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="skan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Kanamycin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `kanamycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="slev" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Levofloxacin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `levofloxacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="spyr" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Pyrazinamide - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `pyrazinamide` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="srif" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Rifampicin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `rifampicin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
<div class="modal fade" id="sstr" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span style="color:red"><strong>Streptomycin - Susceptible</strong></span> | <strong> Year <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="info">
                                <th><center>TB Case No</center></th>  
                                <th><center>Patient Name</center></th>
                                <th><center>DST Laboratory</center></th>
                                <th><center>Date Received</center></th>
                                <th><center>Examined By</center></th>
                                <th><center>Reviewed By</center></th>
                                <th><center>Date Released</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require '../config.php';
                    $query2 = $conn->query("SELECT * FROM `dst_examination` WHERE `streptomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
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
                                <td><center><?php echo $fetch2['date_received']?></center></td>
                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                <td><center><?php echo $fetch2['reviewed_by']?></center></td>
                                <td><center><?php echo $fetch2['date_released']?></center></td>
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