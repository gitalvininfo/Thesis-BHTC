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
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <?php
    $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            require 'config.php';
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
            $query2 = $conn->query("SELECT * FROM `treatment_record` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
            $fetch = $query2->fetch_array();
            $q1 = $conn->query("SELECT `tb_case_no` FROM `registration` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
            $f1 = $q1->fetch_array();
                    ?>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Transaction</a></li>
                    <li><a href="patient_treatment_table.php">Patient Individual Treatment</a></li>
                    <li class="active"><?php echo $f['patient_name']?></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Intensive Phase</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Continuation Phase</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Clinical Findings</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">Drug Preparations</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">Overview</a></li>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="#end_treatment<?php echo $f['patient_id'];?>" data-target="#end_treatment<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-arrow-right"></span>End Treatment</a>
                                        </div>
                                    </div>
                                </ul>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 480px;">
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
                                                                        Present Days
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
                                                                    <h6 class="push-up-5">Date Taken</h6>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control select" name="month" data-live-search="true">
                                                                                <option>Month</option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                                <option value="July">July</option>
                                                                                <option value="August">August</option>
                                                                                <option value="September">September</option>
                                                                                <option value="October">October</option>
                                                                                <option value="November">November</option>
                                                                                <option value="December">December</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <select class="form-control select" name="day" data-live-search="true">
                                                                                <option>Day</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                                <option value="18">18</option>
                                                                                <option value="19">19</option>
                                                                                <option value="20">20</option>
                                                                                <option value="21">21</option>
                                                                                <option value="22">22</option>
                                                                                <option value="23">23</option>
                                                                                <option value="24">24</option>
                                                                                <option value="25">25</option>
                                                                                <option value="26">26</option>
                                                                                <option value="27">27</option>
                                                                                <option value="28">28</option>
                                                                                <option value="29">29</option>
                                                                                <option value="30">30</option>
                                                                                <option value="31">31</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-5">Dosage</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input type="number" class="form-control" name="dosage" placeholder="Dosage Taken" required/>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-5">Total Days Present</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input class="form-control" style="font-size:15px;font-weight:bold;color:black" name="remarks" value="<?php echo $f2['total']. " days" ?>" readonly/>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="add_intensive_phase" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    <?php require_once 'require/add_intensive_phase.php' ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColTwo">
                                                                        Missed Days
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body" id="accOneColTwo">
                                                                <form role="form" class="form-horizontal" method="post">
                                                                    <h6 class="push-up-5">Missed Date</h6>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control select" name="month" data-live-search="true">
                                                                                <option>Month</option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                                <option value="July">July</option>
                                                                                <option value="August">August</option>
                                                                                <option value="September">September</option>
                                                                                <option value="October">October</option>
                                                                                <option value="November">November</option>
                                                                                <option value="December">December</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <select class="form-control select" name="day" data-live-search="true">
                                                                                <option>Day</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                                <option value="18">18</option>
                                                                                <option value="19">19</option>
                                                                                <option value="20">20</option>
                                                                                <option value="21">21</option>
                                                                                <option value="22">22</option>
                                                                                <option value="23">23</option>
                                                                                <option value="24">24</option>
                                                                                <option value="25">25</option>
                                                                                <option value="26">26</option>
                                                                                <option value="27">27</option>
                                                                                <option value="28">28</option>
                                                                                <option value="29">29</option>
                                                                                <option value="30">30</option>
                                                                                <option value="31">31</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-20">Total Days Missed</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input  class="form-control" style="font-size:15px;font-weight:bold;color:red" name="dosage" value="<?php echo $f3['total']. " days" ?>" disabled/>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="add_absent" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    <?php require_once 'require/add_intensive_phase.php' ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END ACCORDION -->
                                                </div>


                                                <div class="col-md-8">
                                                    <!-- START DATATABLE EXPORT -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 440px;">
                                                            <div class="panel-body">
                                                                <table id="laboratory_request" class="table datatable">
                                                                    <thead>
                                                                        <tr class="info">
                                                                            <th><center>Month</center></th>
                                                                            <th><center>Day</center></th>
                                                                            <th><center>Dosage</center></th>
                                                                            <th><center>Remarks</center></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                                   $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` ASC ") or die(mysqli_error());

                                                                                   while($fetch = $query->fetch_array()){

                                                                        ?>
                                                                        <tr>
                                                                            <td><center><?php echo $fetch['month']?></center></td>
                                                                            <td><center><?php echo $fetch['day']?></center></td>
                                                                            <td><center><?php echo $fetch['dosage']?></center></td>
                                                                            <td><center><?php echo $fetch['remarks']?></center></td>
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
                                                                        Present Days
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body" id="accOneColThree">
                                                                <?php
                                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                                $f = $q->fetch_array();
                                                                $q2 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Present'") or die(mysqli_error());
                                                                $f2 = $q2->fetch_array();
                                                                $q3 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                                $f3 = $q3->fetch_array();
                                                                ?>
                                                                <form role="form" class="form-horizontal" method="post">
                                                                    <h6 class="push-up-5">Date Taken</h6>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control select" name="month" data-live-search="true">
                                                                                <option>Month</option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                                <option value="July">July</option>
                                                                                <option value="August">August</option>
                                                                                <option value="September">September</option>
                                                                                <option value="October">October</option>
                                                                                <option value="November">November</option>
                                                                                <option value="December">December</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <select class="form-control select" name="day" data-live-search="true">
                                                                                <option>Day</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                                <option value="18">18</option>
                                                                                <option value="19">19</option>
                                                                                <option value="20">20</option>
                                                                                <option value="21">21</option>
                                                                                <option value="22">22</option>
                                                                                <option value="23">23</option>
                                                                                <option value="24">24</option>
                                                                                <option value="25">25</option>
                                                                                <option value="26">26</option>
                                                                                <option value="27">27</option>
                                                                                <option value="28">28</option>
                                                                                <option value="29">29</option>
                                                                                <option value="30">30</option>
                                                                                <option value="31">31</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-5">Dosage</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input type="number" class="form-control" name="dosage" placeholder="Dosage Taken" required/>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-5">Total Days Present</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input class="form-control" style="font-size:15px;font-weight:bold;color:black" name="remarks" value="<?php echo $f2['total']. " days" ?>" readonly/>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="add_continuation_phase" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    <?php require_once 'require/add_continuation_phase.php' ?>

                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#accOneColFour">
                                                                        Missed Days
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-body" id="accOneColFour">
                                                                <form role="form" class="form-horizontal" method="post">
                                                                    <h6 class="push-up-5">Missed Date</h6>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control select" name="month" data-live-search="true">
                                                                                <option>Month</option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                                <option value="July">July</option>
                                                                                <option value="August">August</option>
                                                                                <option value="September">September</option>
                                                                                <option value="October">October</option>
                                                                                <option value="November">November</option>
                                                                                <option value="December">December</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <select class="form-control select" name="day" data-live-search="true">
                                                                                <option>Day</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                                <option value="18">18</option>
                                                                                <option value="19">19</option>
                                                                                <option value="20">20</option>
                                                                                <option value="21">21</option>
                                                                                <option value="22">22</option>
                                                                                <option value="23">23</option>
                                                                                <option value="24">24</option>
                                                                                <option value="25">25</option>
                                                                                <option value="26">26</option>
                                                                                <option value="27">27</option>
                                                                                <option value="28">28</option>
                                                                                <option value="29">29</option>
                                                                                <option value="30">30</option>
                                                                                <option value="31">31</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> <hr>
                                                                    <h6 class="push-up-20">Total Days Missed</h6>
                                                                    <div class="form-group ">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <input  class="form-control" style="font-size:15px;font-weight:bold;color:red" name="dosage" value="<?php echo $f3['total']. " days" ?>" disabled/>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="add_absent" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                                    <?php require_once 'require/add_continuation_phase.php' ?>

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
                                                                            <th><center>Month</center></th>
                                                                            <th><center>Day</center></th>
                                                                            <th><center>Dosage</center></th>
                                                                            <th><center>Remarks</center></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                                   $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `continuation_phase_id` ASC ") or die(mysqli_error());

                                                                                   while($fetch = $query->fetch_array()){

                                                                        ?>
                                                                        <tr>
                                                                            <td><center><?php echo $fetch['month']?></center></td>
                                                                            <td><center><?php echo $fetch['day']?></center></td>
                                                                            <td><center><?php echo $fetch['dosage']?></center></td>
                                                                            <td><center><?php echo $fetch['remarks']?></center></td>
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
                                                $id = $f['patient_id'];
                                                $query3 = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                                                $f2 = $query3->fetch_array();
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-body scroll" style="height:400px;">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">  /   - Present |  0  - Absent</h3>
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <a href="#update_clinical<?php echo $f['patient_id'];?>" data-target="#update_clinical<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span>New Findings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="laboratory_request" class="table table-hover">
                                                            <thead>
                                                                <tr class="info">
                                                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited">
                                                                        <center>Date</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Weight">
                                                                        <center>Weight</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained fever more than 2 weeks">
                                                                        <center>Fever more than 2 weeks</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained cough or wheezing more than 2 weeks">
                                                                        <center>Cough more than 2 weeks</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Unimproved general well-being">
                                                                        <center>Unimproved general well-being</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Poor appetite">
                                                                        <center>Poor Appetite</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Positive PE findings for Extra-Pulmonary TB">
                                                                        <center>PE Findings</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Side Effects">
                                                                        <center>Side Effects</center>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                $query = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$id' ORDER BY `clinical_id` DESC") or die(mysqli_error());
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
                                                                    <td >
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
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-body scroll" style="height:400px;">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <a href="#update_drug_preparations<?php echo $f['patient_id'];?>" data-target="#update_drug_preparations<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span>New Preparations</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="laboratory_request" class="table table-hover">
                                                            <thead>
                                                                <tr class="info">
                                                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited">
                                                                        <center>Date</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Isoniazid [H] 10mg/kg (200mg/5ml)">
                                                                        <center>Isoniazid [H]</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Rifampicin [R] 15mg/kg (200mg/5ml)">
                                                                        <center>Rifampicin [R]</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Pyrazinamide [Z] 30mg/kg (250mg/5ml)">
                                                                        <center>Pyrazinamide [Z]</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Ethambutol [E] 20mg/kg (400mg tab)">
                                                                        <center>Ethambutol [E]</center>
                                                                    </th>
                                                                    <th data-toggle="tooltip" data-placement="top" title="Streptomycin [S] 15mg/kg">
                                                                        <center>Streptomycin [S]</center>
                                                                    </th>
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
                                                                        <center>
                                                                            <?php echo $fetch['date_visited']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['isoniazid']?></center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['rifampicin']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['pyrazinamide']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['ethambutol']?>
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <?php echo $fetch['streptomycin']?>
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
                                        <div class="tab-pane" id="tab-fifth">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <?php
                                                    require 'config.php';
                                                    $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());                                                        
                                                    ?>
                                                    <div class="col-md-3">
                                                        <!-- CONTACT ITEM -->
                                                        <div class="panel panel-default">
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
                                                        <div class="panel panel-default">
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
                                                        <div class="panel panel-default">
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
                                                                        <div class="widget-int">
                                                                            <?php echo $fetch2['sum(dosage)']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="widget-title">Continuation Phase</div>
                                                                        <div class="widget-subtitle">Drug Dosage Given</div>
                                                                        <div class="widget-int">
                                                                            <?php echo $fetch3['sum(dosage)']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END CONTACT ITEM -->
                                                    </div>
                                                    <div class="col-md-3">
                                                        <!-- CONTACT ITEM -->
                                                        <div class="panel panel-default">
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
                </div>
            </div>
        </div>
        <?php require 'require/modals/end_treatment.php'?>
        <?php require 'require/modals/add_clinical_findings.php'?>
        <?php require 'require/modals/add_drug_preparations.php'?>
        <?php require 'require/logout.php'?>
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