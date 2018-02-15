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
        <?php include_once '../js/loadchart/annual_population.php'?>
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
                    <li class="active"><strong><mark>Annual Population</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">

                                        <div class="row">
                                            <div class="panel-body">
                                                <div id="annual_population" style="width: 100%; height: 425px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 455px;">
                                            <div class="row">
                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Year</th>
                                                            <th><center>Number of Patients Registererd per Year</center></th>
                                                            <th><center>View Patients</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
    $year = date('Y');
            require '../config.php';
            $q1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2013'") or die(mysqli_error());
            $fetch1 = $q1->fetch_array();
            $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2014'") or die(mysqli_error());
            $fetch2 = $q2->fetch_array();
            $q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2015'") or die(mysqli_error());
            $fetch3 = $q3->fetch_array();
            $q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2016'") or die(mysqli_error());
            $fetch4 = $q4->fetch_array();
            $q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2017'") or die(mysqli_error());
            $fetch5 = $q5->fetch_array();
            $q6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2018'") or die(mysqli_error());
            $fetch6 = $q6->fetch_array();
            $q7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2019'") or die(mysqli_error());
            $fetch7 = $q7->fetch_array();
            $q8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2020'") or die(mysqli_error());
            $fetch8 = $q8->fetch_array();
            $q9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2021'") or die(mysqli_error());
            $fetch9 = $q9->fetch_array();
            $q10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2022'") or die(mysqli_error());
            $fetch10 = $q10->fetch_array();
            $q11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2023'") or die(mysqli_error());
            $fetch11 = $q11->fetch_array();
            $q12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2024'") or die(mysqli_error());
            $fetch12 = $q12->fetch_array();
            $q13 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2025'") or die(mysqli_error());
            $fetch13 = $q13->fetch_array();

                                                        ?>
                                                        <tr>
                                                            <td>2013</td>
                                                            <td><center><strong><?php echo $fetch1['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2013">View Record</button>
                                                                </center></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2014</td>
                                                            <td><center><strong><?php echo $fetch2['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2014">View Record</button>
                                                                </center></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2015</td>
                                                            <td><center><strong><?php echo $fetch3['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2015">View Record</button>
                                                                </center></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2016</td>
                                                            <td><center><strong><?php echo $fetch4['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2016">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2017</td>
                                                            <td><center><strong><?php echo $fetch5['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2017">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018</td>
                                                            <td><center><strong><?php echo $fetch6['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2018">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2019</td>
                                                            <td><center><strong><?php echo $fetch7['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2019">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2020</td>
                                                            <td><center><strong><?php echo $fetch8['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2020">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2021</td>
                                                            <td><center><strong><?php echo $fetch9['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2021">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022</td>
                                                            <td><center><strong><?php echo $fetch10['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2022">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2023</td>
                                                            <td><center><strong><?php echo $fetch11['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2023">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2024</td>
                                                            <td><center><strong><?php echo $fetch12['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2024">View Record</button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2025</td>
                                                            <td><center><strong><?php echo $fetch13['total']?></strong></center></td>
                                                            <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#2025">View Record</button>
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
        <?php require 'require/tabular_annual_population.php'?>
        <?php require 'require/logout.php'?>
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
<!-- -->