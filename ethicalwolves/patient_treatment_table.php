<?php
require_once 'logincheck.php';
require ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>BHTC-PMIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/project_logo.png" alt="John Doe" />
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">
                                    <?php 
                                    echo $find['firstname']." ".$find['lastname'];
                                    ?>
                                </div>
                                <div class="profile-data-title">
                                    <?php 
                                    echo $find['position'];
                                    ?>
                                </div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Master File</span></a>       
                        <ul>
                            <li><a href="master_file_patient.php"><span class="fa fa-group"></span><span class="xn-text">Patient Master File</span></a></li>
                            <li><a href="master_file_medtech.php"><span class="fa fa-user-md"></span><span class="xn-text">Medical Technologist</span></a></li>
                        </ul>
                    </li> 

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="patient_examination_schedule_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Examination</span></a> </li>
                            <li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                            <li> <a href="registration_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="patient_treatment_table.php"><span class="fa fa-user-md"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="patient_certification_table.php"><span class="fa fa-book"></span> <span class="xn-text">Certification</span></a> </li> <!--- examination_schedule.php -->
                            <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li><a href="reports.php"><span class="fa fa-file-text"></span><span class="xn-text">TB Cases Report</span></a></li>
                            <li><a href="examination_reports_overview.php"><span class="fa fa-file-text"></span><span class="xn-text">Examination Report</span></a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>       
                        <ul>
                            <li><a href="change_password.php"><span class="fa fa-key"></span><span class="xn-text">Update Profile</span></a></li>
                            <li><a href="system_backup.php?id=<?php echo $find['user_id']?>&username=<?php echo $find['username']?>"><span class="fa fa-cloud-download"></span><span class="xn-text">Download Database</span></a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="page-content">
               <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Transaction</li>
                    <li class="active">Patient Individual Treatment</li>
                </ul>
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-group"></span> Patient Individual Treatment</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    </ul>   
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table class="table datatable">

                                            <thead> 
                                                <tr class="info">
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Gender</center></th>
                                                    <th><center>Birthdate</center></th>
                                                    <th><center>Home Address</center></th>
                                                    <th><center>Contact Number</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                $query = $conn->query("SELECT * FROM `patient` where `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                    if($fetch['treatment_partner'] == 'Done'){
                                                        echo 
                                                            "<tr>
                                                            <td><center><strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']." </center></td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td><center> <a disabled='disabled' class = 'btn btn-info btn-sm' href='treatment_details.php?id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-user-md'></span></a> 
                                                            <a class = 'btn btn-info btn-sm' href='patient_treatment.php? id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-search'></span>View Treatment</a>
                                                            </center></td>
                                                        </tr>";

                                                    }
                                                    else
                                                    {
                                                        echo
                                                            "<tr>
                                                            <td><center><strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']." </center></td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td><center> <a data-toggle='tooltip' data-placement='left' title='Treatment Partner' class = 'btn btn-info btn-sm' href='treatment_details.php?id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-user-md'></span></a> 
                                                            <a class = 'btn btn-info btn-sm' href='patient_treatment.php? id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-search'></span>View Treatment</a>
                                                            </center></td>
                                                        </tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                        </div>

                    </div>         
                    <!-- END PAGE CONTENT WRAPPER -->
                </div>            
                <!-- END PAGE CONTENT -->

            </div>
        </div>

        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-danger btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






