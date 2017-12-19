<?php
require_once 'logincheck.php';
require ('config.php');
if(ISSET($_POST['add_treatment_details'])){
    $treatment_partner_name = $_POST['treatment_partner_name'];
    $designation_treatment_partner = $_POST['designation_treatment_partner'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `treatment_record` VALUES('', '$treatment_partner_name', '$designation_treatment_partner', 'Currently in Treatment', 'Done', '$patient_id')") or die(mysqli_error());

    $conn->query("UPDATE `patient` SET `treatment_partner` = 'Done' WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added Treatment Details');</script>";
    echo "<script>document.location='patient_treatment_table.php'</script>";

}
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Transaction</li>
                    <li><a href="patient_treatment_table.php">Patient Individual Treatment</a></li>
                    <li class="active">Treatment Details</li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-7">
                            <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
                            ?>
                            <form role="form" class="form-horizontal" method="post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-user-md"></span> Treatment Details</strong></h3>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Treatment Partner</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Treatment Partner Name" type="text" class="form-control" name="treatment_partner_name" placeholder="Treatment Partner Name" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Designation</label>
                                            <div class="col-md-9 col-xs-12">
                                                <select class="form-control select" id="formStatus"  name="designation_treatment_partner" required>
                                                    <option value="">Choose Designation...</option>
                                                    <option value="Barangay Health Worker">Barangay Health Worker</option>
                                                    <option value="Midwife">Midwife</option>
                                                    <option value="Nurse">Nurse</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_treatment_details" class="btn btn-info pull-right"><span class="fa fa-check"></span>Submit</button>
                                    </div>
                                    <?php require_once 'treatment_details.php' ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <?php require 'require/logout.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>