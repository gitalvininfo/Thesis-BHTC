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
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="laboratory_request_table.php">Laboratory Request</a></li>
                    <li class="active">Add Laboratory Request</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <?php
    require 'config.php';
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
                                    ?>
                                    <h3 class="panel-title"><strong>Laboratory Requests of <?php echo $f['patient_name']?></strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="#new_lab_request<?php echo $f['patient_id'];?>" data-target="#new_lab_request<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span>New Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="laboratory_request" class="table table-hover">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Date Requested</center></th>
                                                    <th><center>Requesting Physician</center></th>
                                                    <th><center>Reason for Examination</center></th>
                                                    <th><center>Specimen</center></th>
                                                    <th><center>Specimen Collector</center></th>
                                                    <th><center>Test Requested</center></th>
                                                    <th><center>Status</center></th>
                                                    <th><center>Action</center></th>
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
                                                    <td><center><?php echo $fetch['requesting_physician']?></center></td>
                                                    <td><center><?php echo $fetch['reason_for_examination']?></center></td>
                                                    <td><center><?php echo $fetch['specimen_type']?> </center></td>
                                                    <td><center><?php echo $fetch['sample_collector']?> </center></td>
                                                    <td><center> <?php echo $fetch['test_requested']?> </center></td>
                                                    <td><center><strong><?php echo $fetch['status']?></strong></center></td>
                                                    <td>
                                                        <center><a href="#viewdata<?php echo $fetch['lab_request_id'];?>" data-toggle="modal" data-target="#viewdata<?php echo $fetch['lab_request_id'];?>" class="btn btn-info btn-sm"><span class="fa fa-search"></span> </a>
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

        <?php require 'require/modals/view_lab_request.php'?>
        <?php require 'require/modals/new_lab_request.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {
                    requesting_physician: {
                        required: true,
                        minlength: 2,
                        maxlength: 30
                    },
                    password: {
                        required: true,
                        minlength: 5,
                        maxlength: 10
                    },
                    're-password': {
                        required: true,
                        minlength: 5,
                        maxlength: 10,
                        equalTo: "#password2"
                    },
                    age: {
                        required: true,
                        min: 18,
                        max: 100
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    date: {
                        required: true,
                        date: true
                    },
                    credit: {
                        required: true,
                        creditcard: true
                    },
                    site: {
                        required: true,
                        url: true
                    }
                }
            });
        </script>
    </body>

</html>