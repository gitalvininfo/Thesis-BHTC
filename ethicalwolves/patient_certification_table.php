<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['register_patient'])){
    $tb_case_no = $_POST['tb_case_no'];
    $registration_date = $_POST['registration_date'];
    $dots_facility = $_POST['dots_facility'];
    $source_of_patient = $_POST['source_of_patient'];
    $registration_group = $_POST['registration_group'];
    $diagnosis = $_POST['diagnosis'];
    $bacteriological_status = $_POST['bacteriological_status'];
    $classification_of_tb = $_POST['classification_of_tb'];
    $bcg_scar = $_POST['bcg_scar'];
    $history = $_POST['history'];
    $duration = $_POST['duration'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `registration` VALUES('$tb_case_no', '$registration_date', '$dots_facility', '$source_of_patient', '$registration_group', '$diagnosis', '$bacteriological_status', '$classification_of_tb', '$bcg_scar', '$history', '$duration', '$patient_id')") or die(mysqli_error());
    header("location:registration_table.php");
    $conn->close();
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
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Reports</li>
                    <li class="active">Certification</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> Patient Certification</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="lab_request" class="table datatable">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Gender</center></th>
                                                    <th><center>Birthdate</center></th>
                                                    <th><center>Home Address</center></th>
                                                    <th><center>Contact Number</center></th>
                                                    <th>
                                                        <center>Action</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $id = $fetch['patient_id'];
                $q2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                $reg = $q2->fetch_array();
                                                ?>
                                                <tr>
                                                    <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                    <td><center><?php echo $fetch['gender']?></center></td>
                                                    <td><center><?php echo $fetch['birthdate']?></center></td>
                                                    <td><center><?php echo $fetch['address']?></center></td>
                                                    <td><center><?php echo $fetch['contact_number']?></center></td>
                                                    <td>
                                                        <center>
                                                            <a href="patient_certification.php?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Print Preview"><span class="fa fa-print"></span> Print Preview</a>
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
        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
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
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>