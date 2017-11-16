<?php
require_once 'logincheck.php';
require ('config.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- META SECTION -->
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <!-- EOF CSS INCLUDE -->
    </head>

    <body>
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
              <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
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
                            <li> <a href="master_file_patient.php"><span class="fa fa-folder"></span> <span class="xn-text">Patient</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Users</span></a> </li>
                            <li> <a href="master_file_medtech.php"><span class="fa fa-folder"></span> <span class="xn-text">Medical Technologist</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Patients Archive</span></a> </li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="patient_examination_schedule.php"><span class="fa fa-calendar"></span> <span class="xn-text">Examination Schedule</span></a> </li>
                            <li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">New Patient</span></a> </li>
                            <li> <a href="registration_table.php"><span class="fa fa-tags"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="examination_schedule.php"><span class="fa fa-plus-square"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="fa fa-group"></span><span class="xn-text">Patient Population</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="fa fa-tint"></span><span class="xn-text">Drugs Dispensation</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="system_backup.php"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>
                    </li>


                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END X-NAVIGATION -->


            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
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
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Transaction</li>
                    <li class="active">Patient Registration</li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                            $f = $q->fetch_array();
                            ?>
                            <form role="form" class="form-horizontal" method="post">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-plus"></span> Patient Registration</strong></h3>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">TB Case Number</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="tb_case_no" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Registration Date</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" value="YYYY-MM-DD" name="registration_date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">DOTS Facility</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="dots_facility" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Source of Patient</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="source_of_patient" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Public Health Center">Public Health Center</option>
                                                    <option value="Other Government Facilities/Hospitals">Other Government Facilities/Hospitals</option>
                                                    <option value="Private Hospitals/Clinics/Physicians/NGO's">Private Hospitals/Clinics/Physicians/NGO's</option>
                                                    <option value="Community">Community</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Registration Group</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="registration_group" required>
                                                    <option value="">Choose option</option>
                                                    <option value="New">New</option>
                                                    <option value="Relapse">Relapse</option>
                                                    <option value="Treatment After Failure">Treatment After Failure</option>
                                                    <option value="TALF">TALF</option>
                                                    <option value="PTOU">PTOU</option>
                                                    <option value="Transfer-in">Transfer-in</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Diagnosis</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="diagnosis" required>
                                                    <option value="">Choose option</option>
                                                    <option value="TB Disease">TB Disease</option>
                                                    <option value="TB Infection, for IPT">TB Infection, for IPT</option>
                                                    <option value="TB Exposior, for IPT">TB Exposior, for IPT</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Bacteriological Status</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="bacteriological_status" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Bacterilogically Confirmed">Bacteriologically Confirmed</option>
                                                    <option value="Clinically Diagnosed">Clinically Diagnosed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Classification of TB Disease</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="classification_of_tb" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Pulmonary">Pulmonary</option>
                                                    <option value="Extra-pulmonary">Extra-pulmonary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">BCG Scar</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="bcg_scar" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="NO">No</option>
                                                    <option value="Doubtful">Doubtful</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">History of Anti-TB Drug Intake</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="history" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Duration</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="duration" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Less than 1 month">Less than 1 month</option>
                                                    <option value="1 month or more">1 month or more</option>
                                                    <option value="Not applicable">Not applicable</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <input type="submit" name="register_patient" class="btn btn-success pull-right" value="Submit" />
                                    </div>
                                    <?php require_once 'register_patient.php'?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
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
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <!-- NOTIFICATIONS -->
        <script type='text/javascript' src='js/plugins/noty/jquery.noty.js'></script>
        <script type='text/javascript' src='js/plugins/noty/layouts/topCenter.js'></script>
        <script type='text/javascript' src='js/plugins/noty/layouts/topLeft.js'></script>
        <script type='text/javascript' src='js/plugins/noty/layouts/topRight.js'></script>
        <script type='text/javascript' src='js/plugins/noty/themes/default.js'></script>
        <!-- END PAGE PLUGINS -->

        <!-- END SCRIPTS -->

    </body>

</html>