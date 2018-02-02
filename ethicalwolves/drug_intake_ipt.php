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
    $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            require 'config.php';
            $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
            $f = $q->fetch_array();
            $q1 = $conn->query("SELECT `ipt_no` FROM `registration_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
            $f1 = $q1->fetch_array();
                    ?>
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Transaction</li>
                    <li class="#"><a href="patient_treatment_table.php">Treatment</a></li>
                    <li class="active"><strong><mark><?php echo $_GET['name']?></mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#tab-first" role="tab" data-toggle="tab">Intensive Phase</a></li>
                                    <li   class="active"><a href="#tab-second" role="tab" data-toggle="tab">Overview</a></li>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="#end_treatment<?php echo $f['patient_id'];?>" data-target="#end_treatment<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-arrow-right"></span>End Treatment</a>
                                        </div>
                                    </div>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane" id="tab-first">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="panel-group accordion">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a href="#accOneColOne">
                                                                    Present Days
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="panel-body panel-body-open" id="accOneColOne">
                                                            <?php
                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                            $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
                                                            $f = $q->fetch_array();
                                                            ?>
                                                            <form role="form" class="form-horizontal" method="post" onsubmit="return confirm('Are you sure you want to add this dosage?');">
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
                                                                        <input type="number" class="form-control" name="dosage" placeholder="Dosage Taken /mg" required/>
                                                                    </div>
                                                                </div> <hr>
                                                                <h6 class="push-up-5">Drug Taken</h6>
                                                                <div class="form-group ">
                                                                    <div class="col-md-12 col-xs-12">
                                                                        <select class="form-control select" data-live-search="true" name="medicine_name" required>
                                                                            <option value="#">Select</option>
                                                                            <?php
                                                                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());

                                                                            while($fetch = $query->fetch_array()){
                                                                            ?>
                                                                            <option value="<?php echo $fetch['medicine_name'];?>"><?php echo $fetch['medicine_name'];?></option>
                                                                            <?php
                                                                            }
                                                                            ?> 
                                                                        </select>
                                                                    </div>
                                                                </div> <hr>
                                                                <button type="submit" name="add_intensive_phase" class="btn btn-info pull-right"> <span class="fa fa-check"> Save </span></button>
                                                                <?php require_once 'add_intensive_phase_ipt.php' ?>
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
                                                            <form role="form" class="form-horizontal" method="post" method="post" onsubmit="return confirm('Are you sure you want to add the missed date?');">
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
                                                                </div>
                                                                <button type="submit" name="add_absent_intensive" class="btn btn-info pull-right"> <span class="fa fa-check"> Save </span></button>
                                                                <?php require_once 'add_intensive_phase_ipt.php' ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="panel panel-info">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 442px;">
                                                        <div class="panel-body">
                                                            <table id="laboratory_request" class="table datatable">
                                                                <thead>
                                                                    <tr class="info">
                                                                        <th><center>Month</center></th>
                                                                        <th><center>Dosage</center></th>
                                                                        <th><center>Remarks</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    require 'config.php';
                                                                $query = $conn->query("SELECT * FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` ASC ") or die(mysqli_error());

                                                                while($fetch = $query->fetch_array()){
                                                                    if($fetch['remarks'] == 'Absent'){
                                                                        echo 
                                                                            "<tr>
                                                            <td><center> ".$fetch['month']. " ".$fetch['day']. "</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#f4b29e;'><strong><center> ".$fetch['remarks']." </center></strong></td>
                                                        </tr>";

                                                                    }
                                                                    else
                                                                    {
                                                                        echo
                                                                            "<tr>
                                                            <td><center> ".$fetch['month']." ".$fetch['day']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#cdf2f7;'><strong><center> ".$fetch['remarks']." </center></strong></td>
                                                        </tr>";
                                                                    }
                                                                }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab-second">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <div id="intensive_ipt" style="width: 100%; height: 425px"></div>
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
        <?php require 'require/modals/end_treatment_ipt.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>

</html>