<div class="modal fade" id="2013" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2013</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2013'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2014" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2014</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2014'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2015" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2015</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2015'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2016" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2016</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2016'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2017" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2017</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2017'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2018" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2018</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2018'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2019" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2019</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2019'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2020" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2020</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2020'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2021" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2021</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2021'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2022" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2022</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2022'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2023" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2023</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2023'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2024" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2024</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2024'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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
<div class="modal fade" id="2025" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead"><span class="fa fa-list-alt"></span> List of patients registered in <strong>Year 2025</strong></h4>
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
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `year` = '2025'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();

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

