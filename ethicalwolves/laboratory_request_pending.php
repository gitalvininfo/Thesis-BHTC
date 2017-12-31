<?php
require_once 'logincheck.php';
require ('config.php');

$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
$f = $q->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">

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
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
                    </li>

                </ul>
                <ul class="breadcrumb">
                    <li><a href="dashboard_medtech.php">Home</a></li>
                    <li><a href="medtech_laboratory_request.php">Laboratory Request</a></li>
                    <li class="active">Confirm Laboratory Request</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
    $q1 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
            $f1 = $q1->fetch_array();
                            ?>
                            <div class="panel panel-info">
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Laboratory Requests of <strong> <?php echo $f1['patient_name']?></strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php
    $q1 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                            $f1 = $q1->fetch_array();
                                            $id = $f1['patient_id'];
                                            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `status` DESC") or die(mysqli_error());
                                            while ($f = $q->fetch_array()) 
                                            {
                                                if($f['status'] == 'Pending'){
                                                    echo "<textarea  style = color:#000;font-size:13px;height:68px;' disabled = 'disabled' class = 'form-control'>Date Requested:    ".$f['date_of_request']."                                                                                                                                                                                                                             Test Requested:     ".$f['test_requested']."                                                                                                                                                                                                                   Requesting Physician: ".$f['requesting_physician']."</textarea><br/><a class = 'btn btn-danger' href = 'examination_result_form.php?patient_id=".$_GET['id']."&lab_request_id=".$f['lab_request_id']."&patient_name=".$f1['patient_name']."'><span class = 'fa fa-pencil-square-o'></span> Confirm</a><br /><br />";
                                                }
                                                else{
                                                    echo "<textarea  style = color:#000;font-size:13px;height:68px;' disabled = 'disabled' class = 'form-control'> Date Requested:    ".$f['date_of_request']."                                                                                   
 Test Requested:     ".$f['test_requested']."         
 Requesting Physician: ".$f['requesting_physician']."</textarea><br /><a class = 'btn btn-info' disabled = 'disabled'><span class = 'glyphicon glyphicon-check'></span>Done</a><br /><br />";
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Laboratory Request History</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                                    <div class="panel-body">
                                        <table id="laboratory_request" class="table table-hover">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Date Requested</center></th>
                                                    <th><center>Status</center></th>
                                                    <th><center>View Record</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                $query = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['date_of_request']?></center></td>
                                                    <td><center><strong><?php echo $fetch['status']?></strong></center></td>
                                                    <td>
                                                        <center>
                                                            <a href="#viewdata<?php echo $fetch['lab_request_id'];?>" data-toggle="modal" data-target="#viewdata<?php echo $fetch['lab_request_id'];?>" class="btn btn-info btn-sm" ><span class="fa fa-search"></span> </a>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php require 'require/modals/view_lab_request_history.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>

</html>