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
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php include_once 'js/loadchart/weight.php'?>

    </head>

    <body>
        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Reports</li>
                    <li><a href="patient_record_report.php">Patient Record Reports</a></li>
                    <li class="active">Individual Record</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" class="form-horizontal" method="post">
                                <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $id = $fetch['patient_id'];
            $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
                                ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong><?php echo $fetch2['status']?></strong></h3>
                                        <div class="btn-group pull-right">
                                            <div class="pull-left">
                                                <a href="print/overall.php?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-default btn-sm">Print</a>
                                                <a href="patient_record_report.php" class="btn btn-default btn-sm">Back</a>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="panel-body">
                                        <?php require 'require/exam_treatment_report.php'?>
                                    </div>
                                </div>
                            </form>
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
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
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