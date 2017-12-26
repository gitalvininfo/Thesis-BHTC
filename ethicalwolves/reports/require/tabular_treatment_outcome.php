<div class="modal fade" id="cured" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Cured <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Cured' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="tc" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Treatment Completed <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Treatment Completed' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="died" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Died <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Died' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="failed" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Failed <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Failed' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="ltf" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Lost to Follow-up <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Lost to Follow-up' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="ne" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Not Evaluated <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Not Evaluated' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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
<div class="modal fade" id="ec" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"> Treatment Outcome - Excluded from Cohort <strong> Year <?php echo $year?></strong></h4>
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
                    $q2 = $conn->query("SELECT * FROM `treatment_record` WHERE `status` = 'Excluded from Cohort' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($f2 = $q2->fetch_array()){
                        $id = $f2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();

                            ?>
                            <tr>
                                <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['registration_date']?></center></td>
                                <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                <td><center><?php echo $fetch2['registration_group']?></center> </td>
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

