<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['register_patient'])){
    $tb_case_no = $_POST['tb_case_no'];
    $registration_date = $_POST['registration_date'];
    $dots_facility = $_POST['dots_facility'];
    $source_of_patient = $_POST['source_of_patient'];
    $registration_group = $_POST['registration_group'];
    $diagnosis = $_POST['diagnosis'];
    $bacteriological_status = $_POST['bacteriological_status'];
    $classification_of_tb = $_POST['classification_of_tb'];
    $bcg_scar = $_POST['bcg_scar'];
    $history = $_POST['history'];
    $duration = $_POST['duration'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `registration` VALUES('$tb_case_no', '$registration_date', '$dots_facility', '$source_of_patient', '$registration_group', '$diagnosis', '$bacteriological_status', '$classification_of_tb', '$bcg_scar', '$history', '$duration', '$patient_id')") or die(mysqli_error());
    header("location:registration_table.php");
    $conn->close();
}

if(ISSET($_POST['add_new_patient'])){
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $barangay = $_POST['barangay'];
    $birthdate = $_POST['birthdate'];
    $height = $_POST['height'];
    $contact_number = $_POST['contact_number'];
    $province = $_POST['province'];
    $occupation = $_POST['occupation'];
    $philhealth_no = $_POST['philhealth_no'];
    $contact_person = $_POST['contact_person'];
    $emergency_no = $_POST['emergency_no'];
    $household_member = $_POST['household_member'];
    $household_member_age = $_POST['household_member_age'];
    $date_screened = $_POST['date_screened'];
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$age', '$gender', '$address', '$barangay', '$birthdate', '$height', '$contact_number', '$province', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', '$household_member', '$household_member_age', '$date_screened', 'Unregister', 'Pending', '$year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Patient!');</script>";
    echo "<script>document.location='registration_table.php'</script>";  

}
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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>

    <body>
        <!-- START PAGE CONTAINER -->
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
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

                    <li class="xn-icon-button pull-right">
                        <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
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
                                <a href="#" class="list-group-item">
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
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="#">Transaction</li>
                    <li class="#">Registration</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> Patient Registration</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#new_patient"><span class="fa fa-plus"></span> New Patient </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="lab_request" class="table datatable">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Gender</center></th>
                                                    <th><center>Birthdate</center></th>
                                                    <th><center>Home Address</center></th>
                                                    <th><center>Contact Number</center></th>
                                                    <th>
                                                        <center>Action</center>
                                                    </th>
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
                                                $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                    if($fetch['status'] == 'Registered'){  
                                                        echo 
                                                            "<tr>
                                                            <td><center><strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']." </center></td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td></td>
                                                            </tr>";
                                                    }
                                                    else {
                                                        echo 
                                                            "<tr>
                                                            <td><center> <strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']."</center> </td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td><center> <a class = 'btn btn-danger btn-sm' href='registration_form.php?id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-pencil-square-o'></span> Register</a> </center></td>
                                                            </tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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
        <!-- New Patient -->
        <div class="modal fade" id="new_patient" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-male"></span> Patient Information</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="registration_table.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Name" type="text" class="form-control" name="patient_name" placeholder="Patient Name" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Age" type="number" class="form-control" name="age" placeholder="Age" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="">Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Complete Home Address" type="text" class="form-control" name="address" placeholder="Complete Home Address" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                                    
                                                <select class="form-control select" data-live-search="true" name="barangay">
                                                    <option>Choose Barangay</option>
                                                    <option value="Brgy. Abcasa">Brgy. Abcasa</option>
                                                    <option value="Brgy. Alangilan">Brgy. Alangilan</option>
                                                    <option value="Brgy. Alijis">Brgy. Alijis</option>
                                                    <option value="Brgy. Banago">Brgy. Banago</option>
                                                    <option value="Brgy. Bata">Brgy. Bata</option>
                                                    <option value="Brgy. Cabug">Brgy. Cabug </option>
                                                    <option value="Brgy. Estefania ">Brgy. Estefania</option>
                                                    <option value="Brgy. Felisa">Brgy. Felisa</option>
                                                    <option value="Brgy. Granada ">Brgy. Granada</option>
                                                    <option value="Brgy. Handumanan">Brgy. Handumanan</option>
                                                    <option value="Brgy. Lopez Jaena">Brgy. Lopez Jaena</option>
                                                    <option value="Brgy. Mabini">Brgy. Mabini</option>
                                                    <option value="Brgy. Mandalagan">Brgy. Mandalagan</option>
                                                    <option value="Brgy. Mansilingan">Brgy. Mansilingan</option>
                                                    <option value="Brgy. Montevista">Brgy. Montevista</option>
                                                    <option value="Brgy. Pahanocoy">Brgy. Pahanocoy</option>
                                                    <option value="Brgy. Punta Taytay ">Brgy. Punta Taytay</option>
                                                    <option value="Brgy. Singcang">Brgy. Singcang</option>
                                                    <option value="Brgy. Sumag ">Brgy. Sum-ag</option>
                                                    <option value="Brgy. Taculing">Brgy. Taculing</option>
                                                    <option value="Brgy. Tangub">Brgy. Tangub</option>
                                                    <option value="Brgy. Villa Esperanza">Brgy. Villa Esperanza</option>
                                                    <option value="Brgy. Villamonte">Brgy. Villamonte</option>
                                                    <option value="Brgy. Vista Alegre">Brgy. Vista Alegre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Birthdate" type="text" class="form-control datepicker" value="Birthdate" name="birthdate" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Height" type="text" class="form-control" name="height" placeholder="Height" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" placeholder="Contact Number" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Province" type="text" class="form-control" name="province" placeholder="Province" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Occupation * optional" type="text" class="form-control" name="occupation" placeholder="Occupation" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Philhealth Number * optional" type="text" class="form-control" name="philhealth_no" placeholder="Philhealth Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Contact Person" type="text" class="form-control" name="contact_person" placeholder="Contact Person" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Emergency Number" type="text" class="form-control" name="emergency_no" placeholder="Emergency Number" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Household Member" type="text" class="form-control" name="household_member" placeholder="Household Member" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Household Age" type="number" class="form-control" name="household_member_age" placeholder="Household Member Age" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Date Screened" type="text" class="form-control datepicker" value="Date Screened" name="date_screened" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="add_new_patient"><span class="fa fa-check"></span>Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New Patient -->

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
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        
    </body>
</html>