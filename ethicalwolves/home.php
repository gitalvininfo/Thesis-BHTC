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
        <?php include_once 'js/loadchart/barangay_population.php'?>
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
                    <li class="active">Dashboard</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget widget-info widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div> 
                                        <?php
    $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending' && `year` = '$year'") or die(mysqli_error());
            $f = $q->fetch_array();
            $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$year'") or die(mysqli_error());
            $fetch = $q2->fetch_array();
            $q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$year'") or die(mysqli_error());
            $fetch2 = $q3->fetch_array();
            $q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
            $fetch3 = $q4->fetch_array();
            $q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
            $fetch4 = $q5->fetch_array();
            $q6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New' && `year` = '$year'") or die(mysqli_error());
            $fetch5 = $q6->fetch_array();
            $q7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse' && `year` = '$year'") or die(mysqli_error());
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
    $q = $conn->query("SELECT COUNT(*) as total FROM `user` where `position` = 'Medical Technologist'") or die(mysqli_error());
                                            $f = $q->fetch_array();
                                    ?>
                                    <div class="widget-int num-count">
                                        <?php echo $f['total']?>
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
                            <div class="widget widget-info widget-item-icon" onclick="location.href='patient_treatment_table.php';"style="cursor:pointer;">
                                <div class="widget-item-left">
                                    <span class="fa fa-male"></span>
                                </div>
                                <div class="widget-data">
                                    <?php
    $year = date('Y');
                                        if(isset($_GET['year']))
                                        {
                                            $year=$_GET['year'];
                                        }
                                        $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` where `year` = '$year'") or die(mysqli_error());
                                        $f2 = $q2->fetch_array();
                                    ?>
                                    <div class="widget-int num-count">
                                        <?php echo $f2['total'] ?>
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
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-info widget-item-icon" onclick="location.href='patient_treatment_table.php';"style="cursor:pointer;">
                                <div class="widget-item-left">
                                    <span class="fa fa-heartbeat"></span>
                                </div>
                                <div class="widget-data">
                                    <?php
    $year = date('Y');
                                        if(isset($_GET['year']))
                                        {
                                            $year=$_GET['year'];
                                        }
                                        $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration_ipt` where `year` = '$year'") or die(mysqli_error());
                                        $f2 = $q2->fetch_array();
                                    ?>
                                    <div class="widget-int num-count">
                                        <?php echo $f2['total'] ?>
                                    </div>
                                    <div class="widget-title">IPT Patients</div>
                                    <div class="widget-subtitle">Currently in Treatment</div>
                                </div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                            <!-- END WIDGET REGISTRED -->

                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong> <span class="fa fa-bar-chart"></span> Population per Barangay</strong></h3>
                                    <?php require 'require/select_year.php'?>
                                </div>
                                <div class="panel-body">
                                    <div id="barangay_population" style="width: 100%; height: 400px"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require 'require/logout.php'?>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'home.php?year='+year;
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