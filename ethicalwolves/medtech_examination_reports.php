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
            <?php require 'require/medtech_sidebar.php'?>
            <div class="page-content">
                <?php require 'require/medtech_header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><strong><mark>Examination Reports</mark></strong></li>
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="widget widget-default widget-item-icon" onclick="location.href='reports/medtech_reports_dst.php';" style="cursor:pointer;">
                                        <div class="widget-item-left">
                                            <span class="fa fa-bar-chart"></span>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count">
                                                BHTC
                                            </div>
                                            <div class="widget-title">Reports by</div>
                                            <div class="widget-subtitle">Drug Susceptible Test</div>
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
        <?php require 'require/logout.php'?>
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