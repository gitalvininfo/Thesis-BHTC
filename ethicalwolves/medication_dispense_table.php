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
                    <li class="active">Medication Dispensed</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Medication Dispensed</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="lab_request" class="table datatable">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Health Center</center></th>
                                                    <th><center>View Dispensation</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
            $fetch = $query->fetch_array();
                                                ?>
                                                <tr>
                                                    <td>Abcasa Barangay Health Station</td>
                                                    <td><center>
                                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#abcasa"><span class="fa fa-arrow-right"></span></button></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alangilan Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Alijis Barangay Health Station</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#alijis"><span class="fa fa-arrow-right"></span></button></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Banago Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Bata Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Cabug Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Estefania Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Felisa Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Granada Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Handumanan Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Lopez Jaena Health Plus</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Mabini Health Plus</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Mandalagan Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Mansilingan Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Montevista Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Pahanocoy Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Punta Taytay Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Singcang Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sum-ag Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Taculing Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tangub Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Villa Esperanza Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Villamonte Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Vista Alegre Barangay Health Station</td>
                                                    <td></td>
                                                </tr>
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
        <?php require 'require/view_dispensation.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>