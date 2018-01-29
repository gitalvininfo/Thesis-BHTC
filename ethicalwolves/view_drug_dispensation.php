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
                    <li><a href="medication_dispense_table.php">Barangay Health Stations</a></li>
                    <li class="active"><strong><mark><?php echo $_GET['health_center']?></mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Medication Dispensed Log</strong></h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Number</center></th>
                                                    <th><center>Drug Name</center></th>
                                                    <th><center>Date Given</center></th>
                                                    <th><center>Quantity</center></th>
                                                    <th><center>Received By</center></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `medication_dispensation` WHERE `health_center` = '$_GET[health_center]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['dispensation_id']?></center></td>
                                                    <td><center><?php echo $fetch['medicine_name']?></center> </td>
                                                    <td><center><?php echo $fetch['date_given']?></center> </td>
                                                    <td><center><?php echo $fetch['quantity']?> boxes</center> </td>
                                                    <td><center><?php echo $fetch['received_by']?></center> </td>
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
                        <div class="col-md-4">
                            <div class="panel-group accordion">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColOne">
                                                2016
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body" id="accOneColOne">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr class="default">
                                                    <th><center>Month</center></th>
                                                    <th><center>Quantity</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'config.php';
                                                $q1 = $conn->query("SELECT *, sum(quantity) as quantity FROM `medication_dispensation` WHERE `health_center` = '$_GET[health_center]' && `year` = '2016' group by month order by `month` desc") or die(mysqli_error());
                                                while($fetch = $q1->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['month']. " " .$fetch['year']?></center></td>
                                                    <td><center><span class="label label-info label-form"><?php echo $fetch['quantity']. " boxes"?></span></center></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColTwo">
                                                2017
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body" id="accOneColTwo">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr class="default">
                                                    <th><center>Month</center></th>
                                                    <th><center>Quantity</center></th>
                                                    <th><center>View</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'config.php';
                                                $q1 = $conn->query("SELECT *, sum(quantity) as quantity FROM `medication_dispensation` WHERE `health_center` = '$_GET[health_center]' && `year` = '2017' group by month order by `month` desc") or die(mysqli_error());
                                                while($fetch = $q1->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['month']. " " .$fetch['year']?></center></td>
                                                    <td><center><span class="label label-info label-form"><?php echo $fetch['quantity']. " boxes"?></span></center></td>
                                                    <td><center>
                                                        <a href="#two<?php echo $fetch['month']?>" data-target="#two<?php echo $fetch['month']?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-search"></span></a>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColThree">
                                                2018
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body" id="accOneColThree">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr class="default">
                                                    <th><center>Month</center></th>
                                                    <th><center>Quantity</center></th>
                                                    <th><center>View</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'config.php';
                                                $q1 = $conn->query("SELECT *, sum(quantity) as quantity FROM `medication_dispensation` WHERE `health_center` = '$_GET[health_center]' && `year` = '2018' group by month order by `month` desc") or die(mysqli_error());
                                                while($fetch = $q1->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['month']. " " .$fetch['year']?></center></td>
                                                    <td><center><span class="label label-info label-form"><?php echo $fetch['quantity']. " boxes"?></span></center></td>
                                                    <td><center>
                                                        <a href="#three<?php echo $fetch['month']?>" data-target="#two<?php echo $fetch['month']?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-search"></span></a>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php
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
            </div>
        </div>
        <?php require 'require/modals/tabular_medicine_dispensed.php'?>
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