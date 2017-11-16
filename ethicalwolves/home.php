<?php
require_once 'logincheck.php';
require ('config.php');
$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
$f = $q->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php include_once 'js/loadchart/registration_group.php'?>
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
                        <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>       
                        <ul>
                            <li><a href="medicine_table.php"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
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
                            <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li> <a href="patient_certification_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Certification</span></a> </li>
                            <li><a href="examination_reports_overview.php"><span class="fa fa-file-text"></span><span class="xn-text">Examination Report</span></a></li>
                            <li><a href="reports.php"><span class="fa fa-file-text"></span><span class="xn-text">TB Cases Report</span></a></li>

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
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                   $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                                   $fetch = $query->fetch_array();
                                   $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                                   $f = $q->fetch_array();
                        ?>
                        <a href="#"><span class="fa fa-bell-o"></span></a>
                        <div class="informer informer-danger">
                            <?php echo $f['total']?>
                        </div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-spinner"></span> Pending Laboratory Requests</h3>
                                <div class="pull-right">
                                    <span class="label label-danger"><?php echo $f['total']?></span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php 
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                            while($f = $q->fetch_array()){
                                ?>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">Patient ID: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
                                    <p>
                                        <?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?>
                                    </p>
                                </a>
                                <?php
                            }
                            $conn->close();
                                ?>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="laboratory_request_table.php">Show all laboratory requests</a>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="widget widget-info widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div> 
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                        $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                                        $f = $q->fetch_array();
                                        $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed'") or die(mysqli_error());
                                        $fetch = $q2->fetch_array();
                                        $q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed'") or die(mysqli_error());
                                        $fetch2 = $q3->fetch_array();
                                        $q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary'") or die(mysqli_error());
                                        $fetch3 = $q4->fetch_array();
                                        $q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary'") or die(mysqli_error());
                                        $fetch4 = $q5->fetch_array();
                                        $q6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New'") or die(mysqli_error());
                                        $fetch5 = $q6->fetch_array();
                                        $q7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse'") or die(mysqli_error());
                                        $fetch6 = $q7->fetch_array();
                                        ?>                                   
                                        <div class="widget-title">Pending</div>                                                                        
                                        <div class="widget-subtitle">Laboratory Request</div>
                                        <div class="widget-int"><?php echo $f['total']?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Status</div>
                                        <div class="widget-subtitle">Bacteriologically Confirmed</div>
                                        <div class="widget-int"><?php echo $fetch['total']?> </div>

                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Status</div>
                                        <div class="widget-subtitle">Clinically Diagnosed</div>
                                        <div class="widget-int"><?php echo $fetch2['total']?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">TB Classification</div>
                                        <div class="widget-subtitle">Pulmonary</div>
                                        <div class="widget-int"><?php echo $fetch3['total']?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">TB Classification</div>
                                        <div class="widget-subtitle">Extra-Pulmonary</div>
                                        <div class="widget-int"><?php echo $fetch4['total']?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Registration Group</div>
                                        <div class="widget-subtitle">New</div>
                                        <div class="widget-int"><?php echo $fetch5['total']?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Registration Group</div>
                                        <div class="widget-subtitle">Relapse</div>
                                        <div class="widget-int"><?php echo $fetch6['total']?></div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->

                        </div>
                        <div class="col-md-3">
                            <div class="widget widget-info widget-item-icon" onclick="location.href='master_file_medtech.php';" style="cursor:pointer;">
                                <div class="widget-item-left">
                                    <span class="fa fa-user-md"></span>
                                </div>
                                <div class="widget-data">
                                    <?php
    $queryCount = "
                                    SELECT COUNT(*) AS total
                                    FROM user WHERE `position` = 'Medical Technologist'";
                                            $query = mysqli_query($conn, $queryCount);
                                            $row = mysqli_fetch_object($query);
                                    ?>
                                    <div class="widget-int num-count">
                                        <?php echo $row->total; ?>
                                    </div>
                                    <div class="widget-title">Physician</div>
                                    <div class="widget-subtitle">In the system</div>
                                </div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-info widget-item-icon" onclick="location.href='master_file_patient.php';"style="cursor:pointer;">
                                <div class="widget-item-left">
                                    <span class="fa fa-male"></span>
                                </div>
                                <div class="widget-data">
                                    <?php
                                    $queryCount = "
                                    SELECT COUNT(*) AS total
                                    FROM registration";
                                    $query = mysqli_query($conn, $queryCount);
                                    $row = mysqli_fetch_object($query);
                                    ?>
                                    <div class="widget-int num-count">
                                        <?php echo $row->total; ?>
                                    </div>
                                    <div class="widget-title">TB Patients</div>
                                    <div class="widget-subtitle">Currently Registered</div>
                                </div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                            <!-- END WIDGET REGISTRED -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET CLOCK -->

                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong> <span class="fa fa-pie-chart"></span> Registration Group</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    </ul>   
                                </div>
                                <div class="panel-body">

                                    <div id="registration_group" style="width: 100%; height: 400px"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        

        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
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
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
       <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>