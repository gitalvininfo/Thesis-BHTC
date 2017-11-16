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

            <!-- START PAGE SIDEBAR -->
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

                    <!-- START X-NAVIGATION VERTICAL -->
                    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                        <!-- TOGGLE NAVIGATION -->
                        <li class="xn-icon-button">
                            <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                        </li>
                        <li class="xn-icon-button pull-right">
                            <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                        </li> 


                    </ul>
                    <!-- END X-NAVIGATION VERTICAL -->                     

                    <!-- START BREADCRUMB -->
                    <ul class="breadcrumb push-down-0">
                        <li><a href="#">Home</a></li>
                        <li class="active">System Maintenance</li>
                    </ul>
                    <!-- END BREADCRUMB -->                

                    <!-- START CONTENT FRAME -->
                    <div class="content-frame">                                    
                        <!-- START CONTENT FRAME TOP -->
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="form-group">
                                    <button type="button" class="btn btn-info mb-control" data-box="#message-box-success"><span class="fa fa-cloud-download"></span>Download Database</button>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT FRAME TOP -->

                        <!-- START CONTENT FRAME RIGHT -->
                        <div class="content-frame">
                            <div class="list-group list-group-contacts border-bottom push-down-10">
                                <a href="#" class="list-group-item">                                 
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Dmitry Ivaniuk">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                                
                                <a href="#" class="list-group-item">                                    
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Nadia Ali">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                                                                
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Brad Pitt">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>                   
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Darth Vader">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Kim Kardashian">
                                    <span class="contacts-title"> Admin Alvin </span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Jason Statham">
                                    <span class="contacts-title">Elmer Haro</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                            
                            </div>
                        </div>
                        <!-- END CONTENT FRAME RIGHT -->

                    </div>     
                </div>
                <!-- END PAGE CONTENT FRAME -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <div class="message-box message-box-info animated fadeIn" data-sound="alert" id="message-box-success">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info-circle"></span> Backup Database</div>
                    <div class="mb-content">
                        <p>You are about to download database of BHTC-PMIS.</p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close"><span class="fa fa-cloud-download"></span> Download</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-info btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function(){
                $("#file-simple").fileinput({
                    showUpload: false,
                    showCaption: false,
                    browseClass: "btn btn-danger",
                    fileType: "any"
                });            
            });            
        </script>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/fileinput/fileinput.min.js"></script>        
        <script type="text/javascript" src="js/plugins/filetree/jqueryFileTree.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>






