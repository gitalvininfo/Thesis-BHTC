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
        <?php include_once '../js/loadchart/medtech_dst.php'?>
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
                    <li><a href="../examination_reports_overview.php">Examination Reports</a></li>
                    <li class="active"><?php echo "DST Year ". $year?> </li>
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
                                                <div id="dst" style="width: 100%; height: 425px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr class="danger">
                                                                <th colspan="3">Resistant</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Drugs</th>
                                                                <th><center>Number of Patients with Resistant</center></th>
                                                                <th><center>View Patients</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $ami = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f1 = $ami->fetch_array();
            $cap = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f2 = $cap->fetch_array();
            $eth = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f3 = $eth->fetch_array();
            $iso = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f4 = $iso->fetch_array();
            $kan = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f5 = $kan->fetch_array();
            $lev = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f6 = $lev->fetch_array();
            $pyr = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f7 = $pyr->fetch_array();
            $rif = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f8 = $rif->fetch_array();
            $str = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
            $f9 = $str->fetch_array();

                                                            ?>
                                                            <tr>
                                                                <td>Amikacin</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#ami"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Capreomycin</td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#cap"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ethambutol</td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#eth"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Isoniazid</td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#iso"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kanamycin</td>
                                                                <td><center><strong><?php echo $f5['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#kan"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Levofloxacin</td>
                                                                <td><center><strong><?php echo $f6['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#lev"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pyrazinamide</td>
                                                                <td><center><strong><?php echo $f7['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#pyr"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Rifampicin</td>
                                                                <td><center><strong><?php echo $f8['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#rif"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Streptomycin</td>
                                                                <td><center><strong><?php echo $f9['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#str"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr class="warning">
                                                                <th colspan="3">Susceptible</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Drugs</th>
                                                                <th><center>Number of Patients with Susceptible</center></th>
                                                                <th><center>View Patients</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $ami = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f1 = $ami->fetch_array();
                                                                    $cap = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f2 = $cap->fetch_array();
                                                                    $eth = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f3 = $eth->fetch_array();
                                                                    $iso = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f4 = $iso->fetch_array();
                                                                    $kan = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f5 = $kan->fetch_array();
                                                                    $lev = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f6 = $lev->fetch_array();
                                                                    $pyr = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f7 = $pyr->fetch_array();
                                                                    $rif = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f8 = $rif->fetch_array();
                                                                    $str = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                                                                    $f9 = $str->fetch_array();

                                                            ?>
                                                            <tr>
                                                                <td>Amikacin</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sami"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Capreomycin</td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#scap"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ethambutol</td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#seth"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Isoniazid</td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#siso"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kanamycin</td>
                                                                <td><center><strong><?php echo $f5['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#skan"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Levofloxacin</td>
                                                                <td><center><strong><?php echo $f6['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#slev"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pyrazinamide</td>
                                                                <td><center><strong><?php echo $f7['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#spyr"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Rifampicin</td>
                                                                <td><center><strong><?php echo $f8['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#srif"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Streptomycin</td>
                                                                <td><center><strong><?php echo $f9['total']?></strong></center></td>
                                                                <td><center>
                                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sstr"><span class="fa fa-search"></span></button>
                                                                    </center>
                                                                </td>
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
        </div>
        <?php require 'require/tabular_dst.php'?>
        <?php require 'require/logout.php'?>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_dst.php?year='+year;
                });
            });
        </script>
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