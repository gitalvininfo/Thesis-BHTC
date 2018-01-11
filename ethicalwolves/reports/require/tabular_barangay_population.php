<div class="modal fade" id="brgy1" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 1 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 1' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy2" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 2 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 2' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy3" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 3 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 3' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy4" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 4 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 4' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy5" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 5 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 5' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy6" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 6 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 6' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy7" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 7 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 7' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy8" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 8 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 8' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy9" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 9 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 9' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy10" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 10 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 10' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy11" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 11 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 11' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy12" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 12 Registered TB Patient as of Year <?php echo $year?></h4>
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
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 12' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy13" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 13 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 13' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy14" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>

                <h4 class="modal-title" id="largeModalHead">Barangay 14 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 14' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy15" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 15 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 15' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy16" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 16 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 16' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy17" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 17 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 17' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy18" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 18 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 18' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy19" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 19 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 19' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy20" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 20 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 20' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy21" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 21 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 21' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy22" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 22 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 22' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy23" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 23 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 23' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy24" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 24 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 24' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy25" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 25 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 25' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy26" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 26 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 26' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy27" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 27 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 27' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy28" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 28 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 28' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy29" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 29 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 29' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy30" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 30 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 30' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy31" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 31 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 31' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy32" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 32 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 32' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy33" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 33 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 33' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy34" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 34 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 34' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy35" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 35 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 35' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy36" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 36 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 36' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy37" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 37 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 37' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy38" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 38 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 38' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy39" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 39 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 39' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy40" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 40 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Brgy 40' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="brgy41" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/villa-esperanza.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay 41 Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'brgy41' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="abcasa" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/abcasa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Abcasa Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Abcasa' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="alangilan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/alangilan.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Alangilan Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Alangilan' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="alijis" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/alijis.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Alijis Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Alijis' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><?php echo $year. "" .$fetch2['tb_case_no']?></center></td>
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
<div class="modal fade" id="banago" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/banago.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>

                <h4 class="modal-title" id="largeModalHead">Barangay Banago Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Banago' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="bata" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/bata.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Bata Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Bata' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="cabug" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/cabug.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <?php
                $year = date('Y');
                if(isset($_GET['year']))
                {
                    $year=$_GET['year'];
                }

                ?>
                <h4 class="modal-title" id="largeModalHead">Barangay Cabug Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Cabug' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="estefania" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/estefania.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Estefania Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Estefania' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="felisa" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/felisa.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Felisa Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Felisa' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="granada" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/granada.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Granada Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Granada' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="handumanan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/handumanan.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Handumanan Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Handumanan' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="lopezjaena" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/lopezjaena.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Lopez Jaena Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'lopezjaena' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="mabini" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/mabini.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Mabini Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Mabini' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="mandalagan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Mandalagan Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Mandalagan' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="mansilingan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/mansilingan.php" > See Overview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Mansilingan Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Mansilingan' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="montevista" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/montevista.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Montevista Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Montevista' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="pahanocoy" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/pahanocoy.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Pahanocoy Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Pahanocoy' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="ptataytay" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/ptataytay.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Punta Taytay Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Punta Taytay' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
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
<div class="modal fade" id="singcang" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/singcang.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Singcang Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Singcang' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="sum-ag" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/sum-ag.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Sum-ag Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Sumag' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="taculing" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/taculing.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Taculing Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Taculing' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="tangub" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/tangub.php" class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Tangub Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Tangub' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="villamonte" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/villamonte.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>

                <h4 class="modal-title" id="largeModalHead">Barangay Villamonte Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Villamonte' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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
<div class="modal fade" id="vista-alegre" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <div class="pull-left">
                        <a href="../print/vista-alegre.php"class="btn btn-info btn-sm" ><span class="fa fa-print"></span> Print Preview</a>
                    </div>
                </div>
                <h4 class="modal-title" id="largeModalHead">Barangay Vista Alegre Registered TB Patient as of Year <?php echo $year?></h4>
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
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Vista Alegre' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
                        $id = $fetch['patient_id'];
                        $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                            ?>
                            <tr>
                                <td><center><mark><?php echo $fetch2['year']. "080" .$fetch2['tb_case_no']?></mark></center></td>
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