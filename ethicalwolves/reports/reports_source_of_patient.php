<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="../js/plugins/jquery/jquery.min.js"></script>
        <script src = "../js/jquery.canvasjs.min.js"></script>
        <?php include_once '../js/loadchart/source_of_patient.php'?>
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
                    <li><a href="../home.php">Home</a></li>
                    <li class="#">Reports</li>
                    <li><a href="../reports.php">TB Cases Report</a></li>
                    <li class="#">Source of Patient</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <select id="pyear" class="validate[required] select" data-style="btn-danger" data-live-search="true">
                                                <option>Please Select Year...</option>
                                                <option value="<?php 
    if(isset($_GET['year'])){
        $value=$_GET['year']; 
        echo $value;
    }
                                   else{
                                       echo date('Y');
                                   }
                                                               ?>">
                                                    <?php 
                                                    if(isset($_GET['year'])){
                                                        $value=$_GET['year']; 
                                                        echo $value;
                                                    }
                                                    else{
                                                        echo date('Y');
                                                    }
                                                    ?></option>
                                                <?php
                                                for($y=2015; $y<=2020; $y++){
                                                ?>
                                                <option value="<?php echo $y ?>"><?php echo $y; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="panel-body">
                                                <div id="source_of_patient" style="width: 100%; height: 425px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
                                            <div class="row">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Source of Patient</th>
                                                            <th><center>Number of Patients per Category</center></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $year = date('Y');
                                                        if(isset($_GET['year']))
                                                        {
                                                            $year=$_GET['year'];
                                                        }
                                                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                        $phc = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Public Health Center' && `year` = '$year'") or die(mysqli_error());
                                                        $fetch1 = $phc->fetch_array();
                                                        $oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Other Government Facilities' && `year` = '$year'") or die(mysqli_error());
                                                        $fetch2 = $oth->fetch_array();
                                                        $pri = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Private Hospitals' && `year` = '$year'") or die(mysqli_error());
                                                        $fetch3 = $pri->fetch_array();
                                                        $com = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Community' && `year` = '$year'") or die(mysqli_error());
                                                        $fetch4 = $com->fetch_array();
                                                        $gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
                                                        $fetch5 = $gra->fetch_array();                                                     
                                                        ?>
                                                        <tr>
                                                            <td>Public Health Center</td>
                                                            <td><center><strong><?php echo $fetch1['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other Government Facilities/Hospital</td>
                                                            <td><center><strong><?php echo $fetch2['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Private Hospitals/Clinics/Physicians/NGO's</td>
                                                            <td><center><strong><?php echo $fetch3['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Community</td>
                                                            <td><center><strong><?php echo $fetch4['total']?></strong></center></td>
                                                        </tr>
                                                        <tr class="danger">
                                                        <td><h4><strong>Grand Total</strong></h4></td>
                                                        <td><center><strong><span class="label label-danger" style="font-size:12px;"><?php echo $fetch5['total']?></span></strong></center></td>
                                                        <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'require/logout.php'?>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_source_of_patient.php?year='+year;
                });
            });
        </script>
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
    </body>
</html>