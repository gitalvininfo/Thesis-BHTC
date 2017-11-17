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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body class="page-container-boxed">
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/project_logo.png" alt="User" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/project_logo.png" alt="User" />
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
                        <a href="dashboard_medtech.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="medtech_patient_master_file.php"><span class="fa fa-folder-open"></span> <span class="xn-text">Patient Master File</span></a>
                    </li>
                    <li>
                        <a href="medtech_laboratory_request.php"><span class="fa fa-flask"></span> <span class="xn-text">Laboratory Request</span></a>
                    </li>
                    <li>
                        <a href="reports/medtech_examination_reports.php"><span class="fa fa-bar-chart"></span> <span class="xn-text">Examination Reports</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
                    </li>
                </ul>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active">Examination Reports</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <?php $date = date("Y", strtotime("+ 8 HOURS"));?>
                                <h3 class="panel-title"><span class="fa fa-bar-chart-o"></span> Examination Reports as of <?php echo $date?></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <a href="examination_reports.php" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="TB Microscopy and GX Laboratory Examinations"><span class="fa fa-file-text"></span> DSSM and Xpert</a>
                                    </div>
                                </div>  
                            </div>
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <div class="widget widget-default widget-item-icon" onclick="location.href='reports/medtech_reports_total_examinations.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-title">Reports by</div>
                                            <div class="widget-subtitle">Total Examinations Conducted</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget widget-default widget-item-icon" onclick="location.href='reports/medtech_reports_dssm.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-title">Reports by</div>
                                            <div class="widget-subtitle">DSSM</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget widget-default widget-item-icon" onclick="location.href='reports/medtech_reports_xpert.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-title">Reports by</div>
                                            <div class="widget-subtitle">Xpert MTB/RIF</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
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
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>