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
                    <?php
    $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            require 'config.php';
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
            $q1 = $conn->query("SELECT `tb_case_no` FROM `registration` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
            $f1 = $q1->fetch_array();
                    ?>
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Transaction</li>
                    <li class="#"><a href="patient_treatment_table.php">Treatment</a></li>
                    <li class="active"><strong><mark><?php echo $_GET['patient_name']?></mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Drug Preparations for <?php echo $_GET['patient_name']?></strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="#update_drug_preparations<?php echo $f['patient_id'];?>" data-target="#update_drug_preparations<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span>New Preparations</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
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
                                            $query = $conn->query("SELECT * FROM `drug_preparations` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>
                                            <tr>
                                                <td><center><?php echo $fetch['date_visited']?></center></td>
                                                <td><center><?php echo $fetch['isoniazid']?> ml</center></td>
                                                <td><center><?php echo $fetch['rifampicin']?> ml</center></td>
                                                <td><center><?php echo $fetch['pyrazinamide']?> ml</center></td>
                                                <td><center><?php echo $fetch['ethambutol']?> tab</center></td>
                                                <td><center><?php echo $fetch['streptomycin']?> ml</center></td>
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
        <?php require 'require/modals/add_drug_preparations.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script src="js/plugins/jquery/jquery.min.js"></script>
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