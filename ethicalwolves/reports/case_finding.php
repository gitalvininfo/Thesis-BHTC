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
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css"/>
        <link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:1010px;
                height:2000px;
                margin:10px 0px 15px 10px;
                border:0.5px solid #8f8888;
            }
        </style>
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="../assets/images/users/no-image.jpg" alt="John Doe" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="../assets/images/project_logo.png" alt="John Doe" />
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">
                                    <?php 
                                    echo $find['firstname']." ".$find['lastname'];
                                    ?>
                                </div>
                                <div class="profile-data-title">
                                    <?php 
                                    echo $find['position'];
                                    ?>
                                </div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Master File</span></a>       
                        <ul>
                            <li><a href="master_file_patient.php"><span class="fa fa-group"></span><span class="xn-text">Patient Master File</span></a></li>
                            <li><a href="master_file_medtech.php"><span class="fa fa-user-md"></span><span class="xn-text">Medical Technologist</span></a></li>
                        </ul>
                    </li> 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="../patient_examination_schedule_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Examination</span></a> </li>
                            <li> <a href="../laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                            <li> <a href="../registration_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="../patient_treatment_table.php"><span class="fa fa-user-md"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="../patient_certification_table.php"><span class="fa fa-book"></span> <span class="xn-text">Certification</span></a> </li>
                            <li> <a href="../medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li><a href="../reports.php"><span class="fa fa-file-text"></span><span class="xn-text">TB Cases Report</span></a></li>
                            <li><a href="../examination_reports_overview.php"><span class="fa fa-file-text"></span><span class="xn-text">Examination Report</span></a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>       
                        <ul>
                            <li><a href="../change_password.php"><span class="fa fa-key"></span><span class="xn-text">Update Profile</span></a></li>
                            <li><a href="../system_backup.php?id=<?php echo $find['user_id']?>&username=<?php echo $find['username']?>"><span class="fa fa-cloud-download"></span><span class="xn-text">Download Database</span></a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>   
                    </li> 
                    <li class="xn-icon-button pull-right">
                        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                   $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                                   $fetch = $query->fetch_array();
                                   $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                                   $f = $q->fetch_array();
                        ?>
                        <a href="#"><span class="fa fa-bell-o"></span></a>
                        <div class="informer informer-danger">
                            <?php echo $f['total']?>
                        </div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-flask"></span> Laboratory Requests</h3>
                                <div class="pull-right">
                                    <span class="label label-danger"><?php echo $f['total']?></span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php 
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                            while($f = $q->fetch_array()){
                                ?>
                                <a href="laboratory_request_pending.php?id=<?php echo $f['patient_id']?>" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">Patient ID: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
                                    <p>
                                        <?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?>
                                    </p>
                                </a>
                                <?php
                            }
                            $conn->close();
                                ?>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="medtech_laboratory_request.php">Show all laboratory requests</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard_medtech.php">Home</a></li>
                    <li class="active">Examination Reports</li>
                </ul>
                <!-- END BREADCRUMB -->      

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="fa fa-print"></span> Print Content</button>
                                        </div>
                                    </div>  
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div id="print">
                                        <div class="panel-body">
                                            <center><img style="height:50px;width:50px;" src="../assets/images/bc.png"> <br>
                                                <p>Bacolod City Health TB DOTS Center</p>
                                                <p><small>BBB St., Bacolod City, Philippines <br>
                                                    (034) 434 4098 <br>
                                                    cho_bacolod_city@yahoo.com</small></p>        <br> </center>                   


                                            <h6 style="font-size:13px;color:#dc4141">A. Bacteriologically-confirmed TB Cases Registered During the Year by Registration Group and Sex</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th >Classification</th>
                                                        <th colspan="2" style="width:20%"><center>New</center></th>
                                                        <th colspan="2"style="width:20%"><center>Relapse</center></th>
                                                        <th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
                                                        <th colspan="2"><center>Total</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td></td>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Pulmonary</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Extra-pulmonary</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px;color:#dc4141">B. Clinically-diagnosed TB Cases Registered During the Year by Registration Group and Sex</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th >Classification</th>
                                                        <th colspan="2" style="width:20%"><center>New</center></th>
                                                        <th colspan="2"style="width:20%"><center>Relapse</center></th>
                                                        <th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
                                                        <th colspan="2"><center>Total</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td></td>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Pulmonary</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Extra-pulmonary</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px;color:#dc4141">C. All New and Relapse TB Cases (All Forms) by Age and Sex</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th colspan="2" ><center>0-4</center></th>
                                                        <th colspan="2"><center>5-14</center></th>
                                                        <th colspan="2"><center>15-24</center></th>
                                                        <th colspan="2"><center>25-34</center></th>
                                                        <th colspan="2" ><center>35-44</center></th>
                                                        <th colspan="2"><center>45-54</center></th>
                                                        <th colspan="2"><center>55-64</center></th>
                                                        <th colspan="2"><center>>=65</center></th>
                                                        <th colspan="2" ><center>Total</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                        <th><center><strong>M</strong></center></th>
                                                        <th><center><strong>F</strong></center></th>
                                                    </tr>

                                                    <tr>
                                                        <td>New</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Relapse</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Total</td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px;color:#dc4141">D. Source of All New and Relapse TB Cases (All Forms)</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th colspan="4"><center>Source of Patient</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="with:40%">Number of All New and Relapse TB Cases (All Forms)</th>
                                                        <th style="width:20%"><center>Public Health Center</center></th>
                                                        <th style="width:20%"><center>Other Public Facilities</center></th>
                                                        <th style="width:20%"><center>Private</center></th>
                                                        <th  style="width:20%"><center>Community</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                        <td><center><strong></strong></center></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px;color:#dc4141">E. TB in Children</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Total TB Cases less than 15 years old</th>
                                                        <th><center>Number</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pulmonary</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Extra-pulmonary</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px;color:#dc4141">F. Individuals given IPT</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Number</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Children age 0-4</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                      

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins.js"></script>        
        <script type="text/javascript" src="../js/actions.js"></script>        
    </body>
</html>






