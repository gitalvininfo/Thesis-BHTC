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
                    <li class="#">Patient Population</li>
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
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong> <span class="fa fa-bar-chart"></span> Patient Montly Population</strong></h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="patient_population" style="width: 100%; height: 375px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 456px;">
                                            <div class="row">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Month</th>
                                                            <th><center>Number of Patients Registererd per Month</center></th>
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
                                                        ?>
                                                        <tr>
                                                            <td>January</td>
                                                            <td><center><strong><?php echo $fjan['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>February</td>
                                                            <td><center><strong><?php echo $ffeb['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>March</td>
                                                            <td><center><strong><?php echo $fmar['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>April</td>
                                                            <td><center><strong><?php echo $fapr['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>May</td>
                                                            <td><center><strong><?php echo $fmay['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>June</td>
                                                            <td><center><strong><?php echo $fjun['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>July</td>
                                                            <td><center><strong><?php echo $fjul['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>August</td>
                                                            <td><center><strong><?php echo $faug['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>September</td>
                                                            <td><center><strong><?php echo $fsep['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>October</td>
                                                            <td><center><strong><?php echo $foct['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>November</td>
                                                            <td><center><strong><?php echo $fnov['total']?></strong></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>December</td>
                                                            <td><center><strong><?php echo $fdec['total']?></strong></center></td>
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
        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="../logout.php" class="btn btn-danger btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_patient_population.php?year='+year;
                });
            });
        </script>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
    </body>
</html>


<!-- -->