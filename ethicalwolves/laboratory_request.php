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
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/project_logo.png" alt="John Doe" />
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
                            <li> <a href="patient_examination_schedule_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Examination</span></a> </li>
                            <li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                            <li> <a href="registration_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="patient_treatment_table.php"><span class="fa fa-user-md"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="patient_certification_table.php"><span class="fa fa-book"></span> <span class="xn-text">Certification</span></a> </li> <!--- examination_schedule.php -->
                            <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li><a href="reports.php"><span class="fa fa-file-text"></span><span class="xn-text">TB Cases Report</span></a></li>
                            <li><a href="examination_reports_overview.php"><span class="fa fa-file-text"></span><span class="xn-text">Examination Report</span></a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>       
                        <ul>
                            <li><a href="change_password.php"><span class="fa fa-key"></span><span class="xn-text">Update Profile</span></a></li>
                            <li><a href="system_backup.php?id=<?php echo $find['user_id']?>&username=<?php echo $find['username']?>"><span class="fa fa-cloud-download"></span><span class="xn-text">Download Database</span></a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="page-content">
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
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="laboratory_request_table.php">Laboratory Request</a></li>
                    <li class="active">Add Laboratory Request</li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <form role="form" class="form-horizontal" method="post">
                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                   $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                   $f = $q->fetch_array();
                                ?>
                                <div class="panel panel-info">
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong> <span class="fa fa-file-text"></span> Laboratory Request Form</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control select" data-live-search="true" name="collection_unit" required >
                                                        <option>Name of Collection Unit</option>
                                                        <option value="Bata Health Center">Bata Health Center</option>
                                                        <option value="Sum-ag Health Center">Sum-ag Health Center</option>
                                                        <option value="Estefania Health Center">Estefania Health Center</option>
                                                        <option value="Banago Health Center">Banago Health Center</option>
                                                        <option value="Handumanan Health Center">Handumanan Health Center</option>
                                                        <option value="Taculing Health Center">Taculing Health Center</option>
                                                        <option value="Villamonte Health Center">Villamonte Health Center</option>
                                                        <option value="Taculing Health Center">Taculing Health Center</option>
                                                        <option value="Singcang-Airport Health Center">Singcang-Airport Health Center</option>
                                                        <option value="Pta. Taytay Health Center">Pta. Taytay Health Center</option>
                                                        <option value="Montevista Health Center">Montevista Health Center</option>
                                                        <option value="Mansilingan Health Center">Mansilingan Health Center</option>
                                                        <option value="Mandalagan Health Center">Mandalagan Health Center</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input  data-toggle="tooltip" data-placement="right" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" placeholder="Date of Request" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" placeholder="Requesting Physician" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected" placeholder="Date Sample 1 Collected" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected2" placeholder="Date Sample 2 Collected" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Name of Sample Collector" type="text" class="form-control" name="sample_collector" placeholder="Name of Sample Collector" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" placeholder="Contact Number" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="reason_for_examination" required >
                                                        <option value="">Reason for Examination</option>
                                                        <option value="Diagnostic">Diagnostic</option>
                                                        <option value="Baseline">Baseline</option>
                                                        <option value="Follow-up">Follow-up</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="specimen_type" required >
                                                        <option value="">Specimen Type</option>
                                                        <option value="Sputum">Sputum</option>
                                                        <option value="Urine">Urine</option>
                                                        <option value="Blood">Blood</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="repeat_collection" required >
                                                        <option value="">Repeat Collection</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="test_requested" required >
                                                        <option value="">Test Requested</option>
                                                        <option value="DSSM">DSSM</option>
                                                        <option value="Xpert MTB/RIF">Xpert MTB/RIF</option>
                                                        <option value="TB Culture">TB Culture</option>
                                                        <option value="Drug Susceptible Testing">Drug Susceptible Testing</option>
                                                        <option value="Tuberculin Skin Testing">Tuberculin Skin Testing</option>
                                                        <option value="Chest X-ray">Chest X-ray</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_laboratory_request" class="btn btn-info pull-right"><span class="fa fa-check"> Submit </span></button>
                                    </div>
                                    <?php require_once 'add_laboratory_request.php' ?>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> <strong>Laboratory Request History of <?php echo $f['patient_name']?></strong></h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="laboratory_request" class="table table-hover">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Date Requested</center></th>
                                                    <th><center>Reason</center></th>
                                                    <th><center>Specimen</center></th>
                                                    <th><center>Test</center></th>
                                                    <th><center>Status</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['date_of_request']?></center></td>
                                                    <td><center><?php echo $fetch['reason_for_examination']?></center></td>
                                                    <td><center><?php echo $fetch['specimen_type']?></center></td>
                                                    <td><center><?php echo $fetch['test_requested']?></center></td>
                                                    <td><center><strong><?php echo $fetch['status']?></strong></center></td>
                                                    <td>
                                                        <center>
                                                            <button name="<?php echo $fetch['lab_request_id']; ?>" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_small-<?php echo $fetch['lab_request_id']; ?>"><span class="fa fa-pencil-square-o"></span>  </button>
                                                            <a href="#viewdata<?php echo $fetch['lab_request_id'];?>" data-toggle="modal" data-target="#viewdata<?php echo $fetch['lab_request_id'];?>" class="btn btn-info btn-sm"><span class="fa fa-search"></span> </a>
                                                        </center>
                                                    </td>
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
        </div>
        <div class="modal" id="modal_small-<?php echo $fetch['lab_request_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-file-text"></span> Laboratory Request</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="laboratory_request_table.php" method="post">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                        $id = $f['patient_id'];
                        $fetch = $query->fetch_array();
                        ?>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Name of Collection Unit" type="text" class="form-control" name="collection_unit" value="<?php echo $fetch['collection_unit']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">

                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" value="<?php echo $fetch['date_of_request']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" value="<?php echo $fetch['requesting_physician']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date Sample Collected" type="text" class="form-control datepicker" name="date_sample_collected" value="<?php echo $fetch['date_sample_collected']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Sample Collector" type="text" class="form-control" name="sample_collector" value="<?php echo $fetch['sample_collector']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" value="<?php echo $fetch['contact_number']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Reason for Examination" type="text" class="form-control" name="reason_for_examination" value="<?php echo $fetch['reason_for_examination']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Specimen Type" type="text" class="form-control" name="specimen_type" value="<?php echo $fetch['specimen_type']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Repeat Collection" type="text" class="form-control" name="repeat_collection" value="<?php echo $fetch['repeat_collection']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Test Requested" type="text" class="form-control" name="test_requested" value="<?php echo $fetch['test_requested']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                   $query = $conn->query("SELECT * FROM `laboratory_request` ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                                                   while($fetch = $query->fetch_array()){
        ?>
        <div id="viewdata<?php echo $fetch['lab_request_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> Laboratory Request of <?php echo $f['patient_name']?></h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="panel panel-info">
                                    <div class="panel-body profile">
                                        <div class="panel-body">                                    
                                            <div class="contact-info">
                                                <p><small style="font-size:13px;">Name of Collection Unit</small><br/><?php echo $fetch['collection_unit']?></p>
                                                <p><small style="font-size:13px;">Date of Request</small><br/><?php echo $fetch['date_of_request']?></p>
                                                <p><small style="font-size:13px;">Requesting Physician</small><br/><?php echo $fetch['requesting_physician']?></p>
                                                <p><small style="font-size:13px;">Date Sample 1 Collected</small><br/><?php echo $fetch['date_sample_collected']?></p>
                                                <p><small style="font-size:13px;">Date Sample 2 Collected</small><br/><?php echo $fetch['date_sample_collected2']?></p>
                                                <p><small style="font-size:13px;">Name of Sample Collector</small><br/><?php echo $fetch['sample_collector']?></p>
                                                <p><small style="font-size:13px;">Contact Number</small><br/><?php echo $fetch['contact_number']?></p>
                                                <p><small style="font-size:13px;">Reason For Examination</small><br/><?php echo $fetch['reason_for_examination']?></p>
                                                <p><small style="font-size:13px;">Specimen Type</small><br/><?php echo $fetch['specimen_type']?></p>
                                                <p><small style="font-size:13px;">Test Requested</small><br/><?php echo $fetch['test_requested']?></p>
                                            </div>
                                        </div>    
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php
                                                   }
                                                   $conn->close();
        ?> 


        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-danger btn-lg">Yes</a>
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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>