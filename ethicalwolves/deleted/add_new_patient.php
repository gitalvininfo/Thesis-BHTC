<?php
require_once 'logincheck.php';
require ('config.php');
if(ISSET($_POST['add_new_patient'])){
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
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


    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$age', '$gender', '$address', '$birthdate', '$height', '$contact_number', '$province', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', '$household_member', '$household_member_age', '$date_screened')") or die(mysqli_error());
    $conn->close();
    header ('location:laboratory_request_table.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>TB DOTS Center</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
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
                            <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
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
                                    ?></div>
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
                            <li> <a href="examination_schedule.php"><span class="fa fa-calendar"></span> <span class="xn-text">Examination Schedule</span></a> </li>
                            <li> <a href="sputum_examination_table.php"><span class="fa fa-flask"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                            <li> <a href="sputum_examination_table.php"><span class="fa fa-tags"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="treatment.php"><span class="fa fa-plus-square"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="medications.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medications</span></a> </li>

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
                        <a href="home.php"><span class="fa fa-gears"></span> <span class="xn-text">Maintenance</span></a>                        
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
                    <li><a href="#">Home</a></li>
                    <li><a href="laboratory_request_table.php">Laboratory Request</a></li>
                    <li class="active">Add Laboratory Request</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->

                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->

                <!-- START JQUERY VALIDATION PLUGIN -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" class="form-horizontal" action="add_new_patient.php" method="post">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-male"></span> New Patient</strong></h3>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Name of Patient</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="patient_name"/>
                                                </div>            
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Age</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="number" class="form-control" name="age"/>
                                                </div>            
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Gender</label>
                                            <div class="col-md-3">
                                                <select class="validate[required] select" id="formStatus" name="gender" required>
                                                    <option value="">Choose option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>                           
                                            </div>   
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="address"/>
                                                </div>            
                                            </div>
                                        </div> 
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Birthdate</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" value="YYYY-MM-DD" name="birthdate">                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Height</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="height"/>
                                                </div>            
                                            </div>
                                        </div>   
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Contact Number</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="contact_number"/>
                                                </div>            
                                            </div>
                                        </div> 
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Province</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="province"/>
                                                </div>            
                                            </div>
                                        </div> 
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Occupation</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="occupation"/>
                                                </div>            
                                            </div>
                                        </div> 
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Philhealth Number</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="philhealth_no"/>
                                                </div>            
                                            </div>
                                        </div> 
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Contact Person</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="contact_person"/>
                                                </div>            
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Emergency Number</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="emergency_no"/>
                                                </div>            
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Household Member</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="text" class="form-control" name="household_member"/>
                                                </div>            
                                            </div>
                                        </div>   
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Age</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input type="number" class="form-control" name="household_member_age"/>
                                                </div>            
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <label class="col-md-3 col-xs-12 control-label">Date Screened</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" value="YYYY-MM-DD" name="date_screened">                        
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_new_patient" class="btn btn-success pull-right" onClick="noty({text: 'Patient successfully added', layout: 'topRight', type: 'success'});">Submit</button>  
                                    </div>
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






