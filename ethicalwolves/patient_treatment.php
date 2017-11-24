<?php
require_once 'logincheck.php';
require ('config.php');
if(ISSET($_POST['add_treatment_details'])){
    $treatment_regimen_category = $_POST['treatment_regimen_category'];
    $bcg_scar = $_POST['bcg_scar'];
    $weight = $_POST['weight'];
    $treatment_partner_name = $_POST['treatment_partner_name'];
    $designation_treatment_partner = $_POST['designation_treatment_partner'];
    $date_treatment_started = $_POST['date_treatment_started'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `treatment_record` VALUES('', '$treatment_regimen_category', '$bcg_scar', '$weight', '$treatment_partner_name', '$designation_treatment_partner', '$date_treatment_started', '$patient_id')") or die(mysqli_error());
    header ('location:patient_treatment_table.php');
    $conn->close();
}
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
        <script src = "js/jquery.canvasjs.min.js"></script>
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
                                   $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
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
                            $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
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
                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                $f = $q->fetch_array();
                                $query2 = $conn->query("SELECT * FROM `treatment_record` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                $fetch = $query2->fetch_array();
                                ?>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Intensive Phase</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Continuation Phase</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Clinical Findings</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">Drug Preparations</a></li>
                                    <li><a href="#tab-sixth" role="tab" data-toggle="tab">Overview</a></li>
                                    <h3 class="panel-title pull-right"> <span class="fa fa-exclamation-circle"></span> <strong><?php echo $f['patient_name']?></strong></h3>
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
                                        $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                        $f = $q->fetch_array();
                                        $q2 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Present'") or die(mysqli_error());
                                        $f2 = $q2->fetch_array();
                                        $q3 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
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
                                                                    <?php require_once 'add_intensive_phase.php' ?>

                                                                </form>
                                                            </div>                                
                                                        </div>
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColTwo">
                                                                        <span class="fa fa-calendar"></span> Absent Days
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
                                                                    <?php require_once 'add_intensive_phase.php' ?>

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
                                                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` ASC ") or die(mysqli_error());
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
                                                <div class="col-md-4">
                                                    <!-- START ACCORDION -->        
                                                    <div class="panel-group accordion">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColThree">
                                                                        <span class="fa fa-calendar"></span> Present Days
                                                                    </a>
                                                                </h4>
                                                            </div>                                
                                                            <div class="panel-body" id="accOneColThree">
                                                                <?php
                                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                                $f = $q->fetch_array();
                                                                $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                $f2 = $q2->fetch_array();
                                                                $q3 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
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
                                                                                <input data-toggle="tooltip" data-placement="bottom" title="Total Dosage Taken" class="form-control" style="color:red" name="dosage" value="<?php echo $f2['sum(dosage)']; ?>" disabled/>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel-footer">
                                                                        <button type="submit" name="add_continuation_phase" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    </div>
                                                                    <?php require_once 'add_continuation_phase.php' ?>

                                                                </form>
                                                            </div>                                
                                                        </div>
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColFour">
                                                                        <span class="fa fa-calendar"></span> Absent Days
                                                                    </a>
                                                                </h4>
                                                            </div>                                
                                                            <div class="panel-body" id="accOneColFour">
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
                                                                    <?php require_once 'add_continuation_phase.php' ?>

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
                                                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `continuation_phase_id` DESC ") or die(mysqli_error());
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
                                        <div class="tab-pane" id="tab-third">
                                            <div class="row">
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                $f = $q->fetch_array();
                                                $query3 = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                                $f2 = $query3->fetch_array();
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-body scroll" style="height:400px;">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <button class="btn btn-default" data-toggle="modal" data-target="#modal_basic">Show Weight</button>
                                                                    <a href="clinical_findings.php?id=<?php echo $f['patient_id']?>&patient_name=<?php echo $f['patient_name']?>" class="btn btn-sm btn-info" ><span class="fa fa-pencil-square-o"></span>Update </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="laboratory_request" class="table table-hover">
                                                            <thead>
                                                                <tr class="info">
                                                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited"><center>Date Visited</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Weight"><center>Weight</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained fever more than 2 weeks"><center>Question 1</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained cough or wheezing more than 2 weeks"><center>Question 2</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unimproved general well-being"><center>Question 3</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Poor appetite"><center>Question 4</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Positive PE findings for Extra-Pulmonary TB"><center>Question 5</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Side Effects"><center>Question 6</center></th>
                                                                    <th><center>Action</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                       $query = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$id' ORDER BY `clinical_id` DESC") or die(mysqli_error());
                                                                       $id = $f['patient_id'];
                                                                       while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <center> <?php echo $fetch['date_visited']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['weight']?> kgs.</center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q1']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q2']?></center> 
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q3']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q4']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q5']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['q6']?></center>
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
                                        <div class="tab-pane" id="tab-fourth">
                                            <div class="row">
                                                <?php
                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                $f = $q->fetch_array();
                                                $query3 = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                                $f2 = $query3->fetch_array();
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-body scroll" style="height:400px;">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <a href="drug_preparations.php?id=<?php echo $f['patient_id']?>&patient_name=<?php echo $f['patient_name']?>" class="btn btn-sm btn-info"><span class="fa fa-pencil-square-o"></span>Drug Preparations </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="laboratory_request" class="table table-hover">
                                                            <thead>
                                                                <tr class="info">
                                                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited"><center>Date</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Isoniazid [H] 10mg/kg (200mg/5ml)"><center>Isoniazid [H]</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Rifampicin [R] 15mg/kg (200mg/5ml)"><center>Rifampicin [R]</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Pyrazinamide [Z] 30mg/kg (250mg/5ml)"><center>Pyrazinamide [Z]</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Ethambutol [E] 20mg/kg (400mg tab)"><center>Ethambutol [E]</center></th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Streptomycin [S] 15mg/kg"><center>Streptomycin [S]</center></th>
                                                                    <th><center>Action</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                       $query = $conn->query("SELECT * FROM `drug_preparations` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                                                       $id = $f['patient_id'];
                                                                       while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <center> <?php echo $fetch['date']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['isoniazid']?> kgs.</center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['rifampicin']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['pyrazinamide']?></center> 
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['ethambutol']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['streptomycin']?></center>
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
                                        <div class="tab-pane" id="tab-sixth">
                                            <div class="row">
                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                    $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());                                                        
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
                                                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
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
                                                                <div class="profile-data-name" style="color:#695858">Continuation Phase</div>
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
                                                                    $query2 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                    $fetch2 = $query2->fetch_array();
                                                                ?>
                                                                <div class="widget-int num-count">
                                                                    <?php echo $fetch2['total']; ?>
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
                                                                    $query2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                    $fetch2 = $query2->fetch_array();
                                                                    $query3 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                    $fetch3= $query3->fetch_array();
                                                                    ?>                                 
                                                                    <div class="widget-title">Intensive Phase</div>                                                                        
                                                                    <div class="widget-subtitle">Drug Dosage Given</div>
                                                                    <div class="widget-int"><?php echo $fetch2['sum(dosage)']; ?></div>
                                                                </div>
                                                                <div>                                    
                                                                    <div class="widget-title">Continuation Phase</div>
                                                                    <div class="widget-subtitle">Drug Dosage Given</div>
                                                                    <div class="widget-int"><?php echo $fetch3['sum(dosage)']; ?></div>
                                                                </div>
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
                                                                <div class="profile-data-name" style="color:#695858">Missed Drug Intake</div>
                                                                <div class="profile-data-title">Total Missed Days</div>
                                                            </div>
                                                        </div>                                
                                                        <div class="widget widget-danger widget-carousel">
                                                            <div class="owl-carousel" id="owl-example">
                                                                <div> 
                                                                    <?php
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $q3 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                                    $f3 = $q3->fetch_array();
                                                                    $q4 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                                    $f4 = $q4->fetch_array();
                                                                    ?>                                 
                                                                    <div class="widget-title">Intensive Phase</div>
                                                                    <div class="widget-subtitle">Total Missed Days</div>
                                                                    <div class="widget-int"><?php echo $f3['total']; ?></div>
                                                                </div>
                                                                <div>                                    
                                                                    <div class="widget-title">Continuation Phase</div>
                                                                    <div class="widget-subtitle">Total Missed Days</div>
                                                                    <div class="widget-int"><?php echo $f4['total']; ?></div>
                                                                </div>
                                                            </div>                            
                                                        </div> 
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
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
    
        <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    </div>
                    <div class="modal-body">
                        <div id="show_weight" style="width: 100%; height: 400px"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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