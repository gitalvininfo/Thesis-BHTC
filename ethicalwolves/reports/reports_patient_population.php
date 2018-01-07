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
        <?php include_once '../js/loadchart/patient_population.php'?>
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
                    <li class="active"><strong><mark>Monthly Population</mark></strong></li>
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
                                                <div id="patient_population" style="width: 100%; height: 400px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                            <div class="row">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-left">
                                                        <div class="btn-group">
                                                            <a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Filter By <span class="caret"></span></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#" onclick="openWin()">Patient Type</a></li>
                                                                <li><a href="#" onclick="pGender()">Patient Gender</a></li>
                                                                <li><a href="#" onclick="pQuarter()">Population Quarterly</a></li>                                                    
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Month</th>
                                                            <th><center>Number of Patients Registererd per Month</center></th>
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
            $qjan = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
            $fjan = $qjan->fetch_array();
            $qfeb = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
            $ffeb = $qfeb->fetch_array();
            $qmar = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
            $fmar = $qmar->fetch_array();
            $qapr = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
            $fapr = $qapr->fetch_array();
            $qmay = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
            $fmay = $qmay->fetch_array();
            $qjun = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
            $fjun = $qjun->fetch_array();
            $qjul = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
            $fjul = $qjul->fetch_array();
            $qaug = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
            $faug = $qaug->fetch_array();
            $qsep = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
            $fsep = $qsep->fetch_array();
            $qoct = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
            $foct = $qoct->fetch_array();
            $qnov = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
            $fnov = $qnov->fetch_array();
            $qdec = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
            $fdec = $qdec->fetch_array();
            $gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
            $grat = $gra->fetch_array();
                                                        ?>
                                                        <tr>
                                                            <td><strong>January</strong></td>
                                                            <td><center><strong><?php echo $fjan['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#jan"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>February</strong></td>
                                                            <td><center><strong><?php echo $ffeb['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#feb"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>March</strong></td>
                                                            <td><center><strong><?php echo $fmar['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mar"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>April</strong></td>
                                                            <td><center><strong><?php echo $fapr['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#apr"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>May</strong></td>
                                                            <td><center><strong><?php echo $fmay['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#may"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>June</strong></td>
                                                            <td><center><strong><?php echo $fjun['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#jun"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>July</strong></td>
                                                            <td><center><strong><?php echo $fjul['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#jul"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>August</strong></td>
                                                            <td><center><strong><?php echo $faug['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#aug"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>September</strong></td>
                                                            <td><center><strong><?php echo $fsep['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sep"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>October</strong></td>
                                                            <td><center><strong><?php echo $foct['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#oct"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>November</strong></td>
                                                            <td><center><strong><?php echo $fnov['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#nov"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>December</strong></td>
                                                            <td><center><strong><?php echo $fdec['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#dec"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr class="danger">
                                                            <td><h3><strong>Grand Total</strong></h3></td>
                                                            <td><center><strong><span class="label label-danger" style="font-size:15px;"><?php echo $grat['total']?></span></strong></center></td>
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

        <?php require 'require/tabular_monthly_population.php'?>
        <?php require 'require/logout.php'?>
        <script>
            function openWin() {
                myWindow = window.open("filter/monthly_population_children.php?year=<?php echo $year?>", "", "width=800, height=650");
            }
            function pGender() {
                myWindow = window.open("filter/monthly_population_gender.php?year=<?php echo $year?>", "", "width=800, height=650");
            }
            function pQuarter() {
                myWindow = window.open("filter/quarter_population.php?year=<?php echo $year?>", "", "width=800, height=650");
            }
        </script>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_patient_population.php?year='+year;
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