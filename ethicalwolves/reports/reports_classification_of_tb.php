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
        <?php include_once '../js/loadchart/classification_of_tb.php'?>
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
                    <li class="#">Classification of TB</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
                                    <?php require '../require/select_year.php'?>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="panel-body">
                                                <div id="classification_of_tb" style="width: 100%; height: 425px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
                                            <div class="row">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Classification of TB Disease</th>
                                                            <th><center>Number of Patients per Category</center></th>
                                                            <th><center>View Patients</center></th>
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
            $pul = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
            $fetch1 = $pul->fetch_array();
            $ext = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
            $fetch2 = $ext->fetch_array();
            $gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
            $fetch3 = $gra->fetch_array();
                                                        ?>
                                                        <tr>
                                                            <td>Pulmonary</td>
                                                            <td><center><strong><?php echo $fetch1['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#pul"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Extra-pulmonary</td>
                                                            <td><center><strong><?php echo $fetch2['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#ext"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr class="danger">
                                                            <td><h4><strong>Grand Total</strong></h4></td>
                                                            <td><center><strong><span class="label label-danger" style="font-size:12px;"><?php echo $fetch3['total']?></span></strong></center></td>
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
            </div>
        </div>
        <div class="modal fade" id="pul" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-search-plus"></span> Classification of TB - Pulmonary | <strong> Year <?php echo $year?></strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr class="info">
                                        <th><center>TB Case No</center></th>    
                                        <th><center>Patient Name</center></th>
                                        <th><center>Registration Date</center></th>
                                        <th><center>Source of Patient</center></th>
                                        <th><center>Registration Group</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    require '../config.php';
                                                                $query2 = $conn->query("SELECT * FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
                                                                while($fetch2 = $query2->fetch_array()){
                                                                    $id = $fetch2['patient_id'];
                                                                    $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    $fetch = $query->fetch_array();
                                    ?>
                                    <tr>
                                        <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                        <td><center><?php echo $fetch['patient_name']?></center></td>
                                        <td><center><?php echo $fetch2['registration_date']?></center></td>
                                        <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                        <td><center><?php echo $fetch2['registration_group']?></center> </td>
                                    </tr>
                                    <?php
                                                                }
                                                                $conn->close();
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ext" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-search-plus"></span> Classification of TB - Extra-Pulmonary | <strong> Year <?php echo $year?></strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr class="info">
                                        <th><center>TB Case No</center></th>    
                                        <th><center>Patient Name</center></th>
                                        <th><center>Registration Date</center></th>
                                        <th><center>Source of Patient</center></th>
                                        <th><center>Registration Group</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            require '../config.php';
                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
                            while($fetch2 = $query2->fetch_array()){
                                $id = $fetch2['patient_id'];
                                $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                    ?>
                                    <tr>
                                        <td><center><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></center></td>
                                        <td><center><?php echo $fetch['patient_name']?></center></td>
                                        <td><center><?php echo $fetch2['registration_date']?></center></td>
                                        <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                        <td><center><?php echo $fetch2['registration_group']?></center> </td>
                                    </tr>
                                    <?php
                            }
                            $conn->close();
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                    </div>
                </div>
            </div>
        </div>

        <?php require 'require/logout.php'?>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_classification_of_tb.php?year='+year;
                });
            });
        </script>
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
    </body>
</html>