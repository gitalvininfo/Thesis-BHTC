<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['add_new_clinical'])){
    $date_visited = $_POST['date_visited'];
    $weight = $_POST['weight'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $patient_id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `clinical_findings` VALUES('', '$date_visited', '$weight', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new clinical findings!');</script>";
    echo "<script>document.location='patient_treatment_table.php'</script>";
}
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
                            <li><a href="charts-nvd3.html"><span class="fa fa-tint"></span><span class="xn-text">Examination Report</span></a></li>
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
                    <li><a href="#">Transaction</a></li>
                    <li><a href="patient_treatment_table.php">Patient Individual Treatment</a></li>
                    <li class="active">Treatment</li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                   $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                   $f = $q->fetch_array();
                                   $q2 = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                   $f2 = $q2->fetch_array();
                            ?>
                            <form role="form" class="form-horizontal" method="post">
                                <div class="panel panel-info">
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong> <span class="fa fa-user-md"></span> Clinical Findings</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="block">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input  data-toggle="tooltip" data-placement="left" title="Date Visited" type="text" class="form-control datepicker" name="date_visited" placeholder="Date Visited" required/> 
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Weight in kg." type="number" class="form-control" name="weight" placeholder="Weight in kg." required/> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h3>* Check the appropriate symptoms for <?php echo $f['patient_name']?></h3>
                                                <h5 class="push-up-20"> 1. Unexplained fever greater than 2 weeks</h5>
                                                <div class="form-group">
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" name="q1" required/> Yes</label>
                                                    </div>
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="No" name="q1" required/> No </label>
                                                    </div>
                                                </div>
                                                <h5 class="push-up-20"> 2. Unexplained cough or wheezing greater than 2 weeks</h5>
                                                <div class="form-group">
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" name="q2" required/> Yes</label>
                                                    </div>
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="No" name="q2" required/> No </label>
                                                    </div>
                                                </div>
                                                <h5 class="push-up-20"> 3. Unimproved general well-being</h5>
                                                <div class="form-group">
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" name="q3" required/> Yes</label>
                                                    </div>
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="No" name="q3" required/> No </label>
                                                    </div>
                                                </div>
                                                <h5 class="push-up-20"> 4. Poor appetite</h5>
                                                <div class="form-group">
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" name="q4" required/> Yes</label>
                                                    </div>
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="No" name="q4" required/> No </label>
                                                    </div>
                                                </div>
                                                <h5 class="push-up-20"> 5. Positive PE findings for Extra-Pulmonary TB</h5>
                                                <div class="form-group">
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" name="q5" required/> Yes</label>
                                                    </div>
                                                    <div class="col-md-1">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="No" name="q5" required/> No </label>
                                                    </div>
                                                </div>
                                                <h5 class="push-up-20"> 6. Side Effects</h5>
                                                <div class="form-group ">
                                                    <div class="col-md-6 col-xs-6">
                                                        <select multiple class="form-control select" id="formStatus" name="q6" required>
                                                            <option value="">Choose Side Effects</option>
                                                            <option value="Itchiness">Itchiness</option>
                                                            <option value="Skin Rashes">Skin Rashes</option>
                                                            <option value="Vomiting">Vomiting</option>
                                                            <option value="Abdominal Pain">Abdominal Pain</option>
                                                            <option value="Joint Pains">Joint Pains</option>
                                                            <option value="Numbness">Numbness</option>
                                                            <option value="Yellowing of Sclerae and skin">Yellowing of Sclerae and skin</option>
                                                            <option value="Visual Disturbance">Visual Disturbance</option>
                                                            <option value="Hearing Disturbance">Hearing Disturbance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_new_clinical" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                    </div>
                                    <?php require_once 'clinical_findings.php' ?>
                                </div>
                            </form>
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
                        <h5 class="modal-title" id="smallModalHead"><span class="fa fa-flask"></span> Laboratory Request</h5>
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
        <!-- MESSAGE BOX-->
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
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>