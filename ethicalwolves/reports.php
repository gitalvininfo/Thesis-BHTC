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
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
               <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Reports</li>
                    <li class="active">TB Cases Report</li>

                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <?php $date = date("Y", strtotime("+ 8 HOURS"));?>
                                <h3 class="panel-title"><span class="fa fa-bar-chart-o"></span> <strong>Reports as of Year <?php echo $date?></strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <a href="reports/case_finding.php" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Case Finding of Drug-Susceptible TB Cases and IPT"><span class="fa fa-file-text"></span> Case Finding</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_registration_group.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports by</div>
                                            <div class="widget-title">Registration Group</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_bacteriological_status.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Bacteriological Status</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_source_of_patient.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Source of Patient</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_classification_of_tb.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-pie-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Classification of TB</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_patient_population.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-bar-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Monthly Population</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_annual_population.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-bar-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Annual Population</div>
                                            <div class="widget-controls">
                                                <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget widget-info widget-item-icon" onclick="location.href='reports/reports_barangay_population.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-bar-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-subtitle">Reports By</div>
                                            <div class="widget-title">Barangay Population</div>
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