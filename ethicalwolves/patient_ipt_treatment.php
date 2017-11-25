<?php
require_once 'logincheck.php';
require ('config.php');

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- META SECTION -->
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="js/plugins/jquery/jquery.min.js"></script>
        <script src="js/jquery.canvasjs.min.js"></script>
        <?php include_once 'js/loadchart/show_weight.php'?>

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

                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
            $f = $q->fetch_array();
                        ?>
                        <a href="#"><span class="fa fa-bell-o"></span></a>
                        <div class="informer informer-danger">
                            <?php echo $f['total']?>
                        </div>
                        <div class="panel panel-info animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-flask"></span> Laboratory Requests</h3>
                                <div class="pull-right">
                                    <span class="label label-danger"><?php echo $f['total']?></span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php 
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                            while($f = $q->fetch_array()){
                                ?>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">Patient ID: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
                                    <p>
                                        <?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?>
                                    </p>
                                </a>
                                <?php
                            }
                            $conn->close();
                                ?>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="medtech_laboratory_request.php">Show all laboratory requests</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Transaction</a></li>
                    <li><a href="patient_treatment_table.php">Patient Individual Treatment</a></li>
                    <li class="active">Treatment</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START CONTEXTUAL CLASSES TABLE SAMPLE -->
                            <div class="panel panel-default tabs">
                                <?php
                                $year = date('Y');
                                if(isset($_GET['year']))
                                {
                                    $year=$_GET['year'];
                                }

                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
                                $f = $q->fetch_array();
                                $query2 = $conn->query("SELECT * FROM `treatment_record` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                $fetch = $query2->fetch_array();
                                ?>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Intensive Phase</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Clinical Findings</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Overview</a></li>
                                    <h3 class="panel-title pull-right"> <span class="fa fa-exclamation-circle"></span> <strong><?php echo $year. "-" .$f['patient_id'] . " " .$f['name']?></strong></h3>
                                </ul>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!-- START ACCORDION -->
                                                    <div class="panel-group accordion">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColOne">
                                                                        <span class="fa fa-calendar"></span> Present Days
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body" id="accOneColOne">
                                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                        $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
                                        $f = $q->fetch_array();
                                        $q2 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` where `patient_id` = '$_GET[id]' && `remarks` = 'Present'") or die(mysqli_error());
                                        $f2 = $q2->fetch_array();
                                        $q3 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                        $f3 = $q3->fetch_array();
                                                                ?>
                                                                <form role="form" class="form-horizontal" method="post">
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                                <input type="number" class="form-control" name="dosage" placeholder="Dosage Taken" required/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                                <input type="text" class="form-control datepicker" name="date_taken" placeholder="Date Taken" required/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                                <input data-toggle="tooltip" data-placement="bottom" title="Total Days Present" class="form-control" style="color:red" name="dosage" value="<?php echo $f2['total']; ?>" disabled/>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel-footer">
                                                                        <button type="submit" name="add_intensive_phase" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    </div>
                                                                    <?php require_once 'add_intensive_phase_ipt.php' ?>

                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColTwo">
                                                                        <span class="fa fa-calendar"></span> Missed Days
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body" id="accOneColTwo">
                                                                <form role="form" class="form-horizontal" method="post">
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                                <input type="text" class="form-control datepicker" name="date_absent" placeholder="Date Absent" required/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                                <input data-toggle="tooltip" data-placement="bottom" title="Total Days Missed" class="form-control" style="color:red" name="dosage" value="<?php echo $f3['total']; ?>" disabled/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-footer">
                                                                        <button type="submit" name="add_absent" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    </div>
                                                                    <?php require_once 'add_intensive_phase_ipt.php' ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END ACCORDION -->
                                                </div>


                                                <div class="col-md-8">
                                                    <!-- START DATATABLE EXPORT -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                                                            <div class="panel-body">
                                                                <table id="laboratory_request" class="table datatable">
                                                                    <thead>
                                                                        <tr class="info">
                                                                            <th>Date Taken</th>
                                                                            <th>Dosage Taken</th>
                                                                            <th>Remarks</th>
                                                                            <th>
                                                                                <center>Action</center>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` ASC ") or die(mysqli_error());
                                                                    $id = $f['patient_id'];
                                                                    while($fetch = $query->fetch_array()){
                                                                        $id = $fetch['patient_id'];
                                                                        ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $fetch['date_taken']?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $fetch['dosage']?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $fetch['remarks']?>
                                                                            </td>
                                                                            <td>
                                                                                <center>
                                                                                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal_small"><span class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="left" title="Edit"></span>  </button>
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
                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
                                                $f = $q->fetch_array();
                                                $query3 = $conn->query("SELECT * FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                                $f2 = $query3->fetch_array();
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-body scroll" style="height:400px;">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <a href="#update_clinical_ipt<?php echo $f['patient_id'];?>" data-target="#update_clinical_ipt<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-pencil-square-o"></span>Update</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="laboratory_request" class="table table-hover">
                                                            <thead>
                                                                <tr class="info">
                                                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited">
                                                                        <center>Date Visited</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Weight">
                                                                        <center>Weight</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained fever more than 2 weeks">
                                                                        <center>Question 1</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained cough or wheezing more than 2 weeks">
                                                                        <center>Question 2</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unimproved general well-being">
                                                                        <center>Question 3</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Poor appetite">
                                                                        <center>Question 4</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Positive PE findings for Extra-Pulmonary TB">
                                                                        <center>Question 5</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Side Effects">
                                                                        <center>Question 6</center>
                                                                    </th>
                                                                    <th>
                                                                        <center>Action</center>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                $query = $conn->query("SELECT * FROM `clinical_findings_ipt` WHERE `patient_id` = '$id' ORDER BY `clinical_id` DESC") or die(mysqli_error());
                                                                $id = $f['patient_id'];
                                                                while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['date_visited']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['weight']?> kgs.</center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q1']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q2']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q3']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q4']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q5']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['q6']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center><a href="#" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Edit"><span class="fa fa-pencil-square-o"></span></a></center>
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
                                        <div class="tab-pane" id="tab-third">
                                            <div class="row">
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());                                                        
                                                ?>

                                                <div class="col-md-3">
                                                    <!-- CONTACT ITEM -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body profile">
                                                            <div class="profile-image">

                                                            </div>
                                                            <div class="profile-data">
                                                                <div class="profile-data-name" style="color:#695858">Intensive Phase</div>
                                                                <div class="profile-data-title">Drug Intake</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget widget-info widget-item-icon">
                                                            <div class="widget-item-left">
                                                                <span class="fa fa-calendar"></span>
                                                            </div>
                                                            <div class="widget-data">
                                                                <?php
                                                                $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                $fetch1 = $query1->fetch_array();
                                                                ?>
                                                                <div class="widget-int num-count">
                                                                    <?php echo $fetch1['total'] ?>
                                                                </div>
                                                                <div class="widget-title">Days</div>
                                                                <div class="widget-subtitle">Drug Usage</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- CONTACT ITEM -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body profile">
                                                            <div class="profile-image">

                                                            </div>
                                                            <div class="profile-data">
                                                                <div class="profile-data-name" style="color:#695858">Drug Consumption</div>
                                                                <div class="profile-data-title">Total Dosage Given</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget widget-info widget-carousel">
                                                            <div class="owl-carousel" id="owl-example">
                                                                <div>
                                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                    $fetch2 = $query2->fetch_array();
                                                                    $q3 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` where `patient_id` = '$_GET[id]' && `remarks` = 'Present'") or die(mysqli_error());
                                                                    $f3 = $q3->fetch_array();
                                                                    $q4 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                                    $f4 = $q4->fetch_array();

                                                                    ?>
                                                                    <div class="widget-title">Intensive Phase</div>
                                                                    <div class="widget-subtitle">Drug Dosage Given</div>
                                                                    <div class="widget-int">
                                                                        <?php echo $fetch2['sum(dosage)']; ?>
                                                                    </div>
                                                                </div>
                                                                <div>

                                                                    <div class="widget-title">Intensive Phase</div>
                                                                    <div class="widget-subtitle">Total Present Days</div>
                                                                    <div class="widget-int">
                                                                        <?php echo $f3['total']; ?>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="widget-title">Continuation Phase</div>
                                                                    <div class="widget-subtitle">Total Missed Days</div>
                                                                    <div class="widget-int">
                                                                        <?php echo $f4['total']; ?>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>


        <!-- Add Clinical -->
        <?php
        $date = date('l jS \of F Y');
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="update_clinical_ipt<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-stethoscope"></span> New Clinical Findings</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="actions/clinical_findings_ipt.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="block">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                    <input data-toggle="tooltip" data-placement="right" title="Date Visited" type="text" class="form-control" name="date_visited" style="color:#000;" value="<?php echo $date ?>" disabled/> 
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Weight in kg." type="number" class="form-control" name="weight" placeholder="Weight in kg." required/> 
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>* Check the appropriate symptoms for <?php echo $fetch['name']?></h4>
                                        <h5 class="push-up-20"> 1. Unexplained fever greater than 2 weeks</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="Yes" name="q1" required/> Yes</label>
                                            </div>
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="No" name="q1" required/> No </label>
                                            </div>
                                        </div>
                                        <h5 class="push-up-20"> 2. Unexplained cough or wheezing greater than 2 weeks</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="Yes" name="q2" required/> Yes</label>
                                            </div>
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="No" name="q2" required/> No </label>
                                            </div>
                                        </div>
                                        <h5 class="push-up-20"> 3. Unimproved general well-being</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="Yes" name="q3" required/> Yes</label>
                                            </div>
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="No" name="q3" required/> No </label>
                                            </div>
                                        </div>
                                        <h5 class="push-up-20"> 4. Poor appetite</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="Yes" name="q4" required/> Yes</label>
                                            </div>
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="No" name="q4" required/> No </label>
                                            </div>
                                        </div>
                                        <h5 class="push-up-20"> 5. Positive PE findings for Extra-Pulmonary TB</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="Yes" name="q5" required/> Yes</label>
                                            </div>
                                            <div class="col-md-1">                                    
                                                <label class="check"><input type="radio" class="iradio" value="No" name="q5" required/> No </label>
                                            </div>
                                        </div>
                                        <h5 class="push-up-20"> 6. Side Effects</h5>
                                        <div class="form-group ">
                                            <div class="col-md-6 col-xs-6">
                                                <select multiple class="form-control select" id="formStatus" name="q6" required>
                                                    <option value="">Choose Side Effects</option>
                                                    <option value="Itchiness">Itchiness</option>
                                                    <option value="Skin Rashes">Skin Rashes</option>
                                                    <option value="Vomiting">Vomiting</option>
                                                    <option value="Abdominal Pain">Abdominal Pain</option>
                                                    <option value="Joint Paints">Joint Pains</option>
                                                    <option value="Numbness">Numbness</option>
                                                    <option value="Yellowing of Sclerae and skin">Yellowing of Sclerae and skin</option>
                                                    <option value="Visual Disturbance">Visual Disturbance</option>
                                                    <option value="Hearing Disturbance">Hearing Disturbance</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="add_new_clinical"><span class="fa fa-check"></span>Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        $conn->close();
        ?> 
        <!-- End Clinical -->

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
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>

</html>