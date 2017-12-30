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
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="js/plugins/jquery/jquery.min.js"></script>
        <script src="js/jquery.canvasjs.min.js"></script>
        <?php require 'js/loadchart/intensive_phase_ipt.php'?>

    </head>
    <body>
        <?php 
    $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $id = $fetch['patient_id'];
            $query2 = $conn->query("SELECT * FROM `registration_ipt` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
                    ?>
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li><a href="master_file_patient.php">Patient Master File</a></li>
                    <li class="active"><?php echo $fetch['name']?></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                </div>
                                <div class="panel-body">                                    
                                    <div class="col-md-5">      
                                        <br>                                          
                                        <h6><strong>Name: </strong><?php echo $fetch['name']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Age: </strong><?php echo $fetch['age']. " years old"?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Gender: </strong><?php echo $fetch['gender']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Birthdate: </strong><?php echo $fetch['address']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Home Address: </strong><?php echo $fetch['address']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                    </div>
                                    <div class="col-md-5">      
                                        <br>    <br>                                      
                                        <h6><strong>Date Evaluated: </strong><?php echo $fetch2['date_evaluated']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Date IPT Started: </strong><?php echo $fetch2['date_ipt_started']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Treatment Partner: </strong><?php echo $fetch2['treatment_partner_name']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                        <h6><strong>Designation of Treatment Partner: </strong><?php echo $fetch2['designation_treatment_partner']?></h6>
                                        <hr style="margin:0px 0 5px 0;">
                                    </div>
                                </div>   
                            </div>
                            <hr>
                            <?php require 'overview_intensive_ipt.php'?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
        <script>
            $(function() {
                var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
            });
        </script>
    </body>
</html>