<!DOCTYPE html>
<?php
require_once 'logincheck.php';
require ('config.php');

$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
$f = $q->fetch_array();

?>

<html lang="eng">

    <head>
        <!-- META SECTION -->
        <title>
            <?php 

            if ($f['total'] > 0)   {
                echo '(';    
                echo $f['total']; 
                echo ') BHTC-PMIS';
            }
            else 
                echo 'BHTC-PMIS'
            ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="js/plugins/jquery/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/loadchart/medtech_examination_category.php'?>
    </head>
    <body class="page-container-boxed">
        <?php 
                $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
            $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/medtech_sidebar.php'?>
            <div class="page-content">
                <?php require 'require/medtech_header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                            <div class="col-md-3">

                                <!-- START WIDGET SLIDER -->
                                <div class="widget widget-default widget-carousel">
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
                                    </div>                            
                                    <div class="widget-controls">                                
                                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                    </div>                             
                                </div>         
                                <!-- END WIDGET SLIDER -->

                            </div>
                            <div class="col-md-3">

                                <!-- START WIDGET SLIDER -->
                                <div class="widget widget-default widget-carousel">
                                    <div class="owl-carousel" id="owl-example">
                                        <div> 
                                            <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `test_requested` = 'DSSM'") or die(mysqli_error());
                                                $f = $q->fetch_array();
                                                $q2 = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `test_requested` = 'Xpert MTB/RIF'") or die(mysqli_error());
                                                $fetch = $q2->fetch_array();
                                                $q3 = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `test_requested` = 'TB Culture'") or die(mysqli_error());
                                                $fetch2 = $q3->fetch_array();
                                                $q4 = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `test_requested` = 'Drug Susceptible Testing'") or die(mysqli_error());
                                                $fetch3 = $q4->fetch_array();
                                                $q5 = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `test_requested` = 'Tuberculin Skin Testing'") or die(mysqli_error());
                                                $fetch4 = $q5->fetch_array();
                                            ?>                                   
                                            <div class="widget-title">Test Requested</div>                                                                        
                                            <div class="widget-subtitle">DSSM</div>
                                            <div class="widget-int"><?php echo $f['total']?></div>
                                        </div>
                                        <div>                                    
                                            <div class="widget-title">Test Requested</div>
                                            <div class="widget-subtitle">Xpert MTB/RIF</div>
                                            <div class="widget-int"><?php echo $fetch['total']?> </div>

                                        </div>
                                        <div>                                    
                                            <div class="widget-title">Test Requested</div>
                                            <div class="widget-subtitle">TB Culture</div>
                                            <div class="widget-int"><?php echo $fetch2['total']?></div>
                                        </div>
                                        <div>                                    
                                            <div class="widget-title">Test Requested</div>
                                            <div class="widget-subtitle">Drug Susceptible Testing</div>
                                            <div class="widget-int"><?php echo $fetch3['total']?></div>
                                        </div>
                                        <div>                                    
                                            <div class="widget-title">Test Requested</div>
                                            <div class="widget-subtitle">Tuberculin Skin Testing</div>
                                            <div class="widget-int"><?php echo $fetch4['total']?></div>
                                        </div>
                                    </div>                            
                                    <div class="widget-controls">                                
                                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                    </div>                             
                                </div>         
                                <!-- END WIDGET SLIDER -->

                            </div>
                            <div class="col-md-3">
                                <!-- START WIDGET REGISTRED -->
                                <div class="widget widget-default widget-item-icon" onclick="location.href='medtech_patient_master_file.php';" style="cursor:pointer;">
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
                                        <div class="widget-subtitle">Currently in Treatment</div>
                                    </div>
                                    <div class="widget-controls">
                                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                    </div>
                                </div>
                                <!-- END WIDGET REGISTRED -->

                            </div>
                            <div class="col-md-3">

                                <!-- START WIDGET CLOCK -->
                                <div class="widget widget-default widget-padding-sm">
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
                                        <?php require 'require/select_year.php'?>
                                    </div>
                                    <div class="panel-body">
                                        <div id="examination" style="width: 100%; height: 400px"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php require 'require/logout.php'?>
        </div>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'dashboard_medtech.php?year='+year;
                });
            });
        </script>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>

</html>