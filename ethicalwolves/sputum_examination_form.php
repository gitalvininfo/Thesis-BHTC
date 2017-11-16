<?php
require_once 'logincheck.php';
require ('config.php');
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
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css"/>
        <!-- EOF CSS INCLUDE -->                  
    </head>
    <body>
        <?php

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
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->


                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="sputum_examination_table.php">Laboratory Request</a></li>
                    <li class="active">Examinations</li>
                </ul>
                <!-- END BREADCRUMB -->             

                <!-- PAGE CONTENT WRAPPER -->

                <!-- START JQUERY VALIDATION PLUGIN -->

                <div class="page-content-wrap">

                    <div class="row">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $q = $conn->query("SELECT * FROM `itr` WHERE `itr_no` = '$_GET[id]' && `lastname` = '$_GET[lastname]'") or die(mysqli_error());
                        $fetch = $q->fetch_array();
                        ?>

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Microscopy</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Xpert MTB</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">TB Culture</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">DST</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <form role="form" class="form-horizontal"method="post">

                                            <div class="panel-body">                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">ITR_NO</label>
                                                    <div class="col-md-6 col-xs-12">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                        </div>                                            
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">First name</label>
                                                    <div class="col-md-6 col-xs-12">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control" name="firstname" value="<?php echo $fetch['firstname']?>" disabled/>
                                                        </div>                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Last name</label>
                                                    <div class="col-md-6 col-xs-12">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control" name="lastname" value="<?php echo $fetch['lastname']?>" disabled/>
                                                        </div>                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Birthdate</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']?>" name="birthdate" disabled>                        
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Age</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                            <input type="text" class="form-control" name="age" value="<?php echo $fetch['age']?>" disabled/>
                                                        </div>            
                                                    </div>
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Address</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                            <input type="text" class="form-control" name="address" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                        </div>            
                                                    </div>
                                                </div>


                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Civil Status</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                            <input type="text" class="form-control" name="address" value="<?php echo $fetch['civil_status']?>" disabled/>
                                                        </div>            
                                                    </div>
                                                </div>                

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                            <input type="text" class="form-control" name="address" value="<?php echo $fetch['gender']?>" disabled/>
                                                        </div>            
                                                    </div>
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 col-xs-12 control-label">Enrollment date</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" class="form-control datepicker" value="<?php echo $fetch['enrollment_date']?>" name="enrollment_date" disabled>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">   

                                            </div>

                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">                                   
                                            <form role="form" class="form-horizontal" method="post" enctype = "multi-part/form-data">
                                                <div class="panel-body">                                                                       
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">TB Case No.</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collection Unit</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collection_unit"/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date of Request</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_of_request">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Requesting Physician</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="requesting_physician" />
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Reason for Examination</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="reason_for_examination" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Diagnostic">Diagnostic</option>
                                                                <option value = "Baseline">Baseline</option>
                                                                <option value = "Follow-up">Follow-up</option>

                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Specimen Type</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="specimen_type" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Examined</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_examined">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Sample Collected</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_sample_collected">                        
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collector</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collector" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Contact Number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="contact_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">laboratory_number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Visual Appearance</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="visual_appearance" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Reading</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="reading" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Laboratory Diagnosis</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_diagnosis" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Examined by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Released</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released">                </div>  
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Result</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="result" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Positive">Positive - 1</option>
                                                                <option value = "Negative">Negative - 0</option>
                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="panel-footer">
                                                        <button type="submit" name="add_dssm" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_dssm.php' ?>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <div class="row">                                   
                                            <form role="form" class="form-horizontal" method="post" enctype = "multi-part/form-data">
                                                <div class="panel-body">                                                                       
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">TB Case No.</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collection Unit</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collection_unit"/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date of Request</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_of_request">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Requesting Physician</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="requesting_physician" />
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Reason for Examination</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="reason_for_examination" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Diagnostic">Diagnostic</option>
                                                                <option value = "Baseline">Baseline</option>
                                                                <option value = "Follow-up">Follow-up</option>

                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Specimen Type</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="specimen_type" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Examined</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_examined">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Sample Collected</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_sample_collected">                        
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collector</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collector" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Contact Number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="contact_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">laboratory_number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Visual Appearance</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="visual_appearance" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Reading</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="reading" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Examined by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Released</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released">                </div>  
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Result</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="result" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Positive">Positive - 1</option>
                                                                <option value = "Negative">Negative - 0</option>
                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="panel-footer">
                                                        <button type="submit" name="add_gene_expert" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_gene_expert.php' ?>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <div class="row">                                   
                                            <form role="form" class="form-horizontal" method="post" enctype = "multi-part/form-data">
                                                <div class="panel-body">                                                                       
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">TB Case No.</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collection Unit</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collection_unit"/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date of Request</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_of_request">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Requesting Physician</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="requesting_physician" />
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Reason for Examination</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="reason_for_examination" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Diagnostic">Diagnostic</option>
                                                                <option value = "Baseline">Baseline</option>
                                                                <option value = "Follow-up">Follow-up</option>

                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Specimen Type</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="specimen_type" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Examined</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_examined">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Sample Collected</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_sample_collected">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Sample Received</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_sample_received"> 
                                                            </div>  
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Collector</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="name_of_collector" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Contact Number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="contact_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Laboratory_number</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_number" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Released</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released">                </div>  
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">TB Culture Result</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="tb_culture_result" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Positive">Positive - 1</option>
                                                                <option value = "Negative">Negative - 0</option>
                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Examined by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Remarks</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="remarks" />
                                                            </div>                                            
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Reviewed by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="reviewed_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="panel-footer">
                                                        <button type="submit" name="add_tb_culture" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_tb_culture.php' ?>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                    <div class="tab-pane" id="tab-fifth">
                                        <div class="row">                                   
                                            <form role="form" class="form-horizontal" method="post" enctype = "multi-part/form-data">
                                                <div class="panel-body">                                                                     
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">TB Case No.</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                            </div>                                                
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">TB Culture Laboratory</label>
                                                        <div class="col-md-6 col-xs-12">                                          <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input type="text" class="form-control" name="tb_culture_laboratory"/>
                                                            </div>                                                
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">DST Laboratory</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="dst_laboratory" />
                                                            </div>                                                
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Collected</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_collected">                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Received</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_received">                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Isoniazid (H)</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="isoniazid"/>
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Rifampicin (R)</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="rifampicin" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Ethambutol (E)</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="ethambutol" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Streptomycin (S)</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="streptomycin" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Pyrazinamide (Z)</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="Pyrazinamide" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <hr>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Examined by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Remarks</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="remarks" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Reviewed by</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="reviewed_by" />
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Released</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released">                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <button type="submit" name="add_dst" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_dst.php' ?>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>

                                </div>
                            </div>                                              
                            <!-- END TABS -->    
                            <div class="panel panel-default">
                                <div class="panel-group accordion">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="fa fa-tint"></span> Sputum Examination Results</h3>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColOne">
                                                    <span class="fa fa-folder-open"></span> Microscopy Results
                                                </a>
                                            </h4>
                                            <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                            </ul>

                                        </div>                                
                                        <div class="panel-body panel-body-table" id="accOneColOne">
                                            <table id="customers2" class="table table-bordered table-striped">

                                                <thead> 
                                                    <tr class="success">
                                                        <th>Laboratory Number</th>
                                                        <th>Date Collected</th>
                                                        <th>Visual Appearance</th>
                                                        <th>Reading</th>
                                                        <th>Laboratory Diagnosis</th>


                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                   $query = $conn->query("SELECT * FROM `dssm_examination` WHERE `itr_no` = '$_GET[id]' ORDER BY `sputum_id` DESC") or die(mysqli_error());
                                                                   while($fetch = $query->fetch_array()){
                                                                       $id = $fetch['itr_no'];
                                                    ?>                                      
                                                    <tr>
                                                        <td><?php echo $fetch['laboratory_number']?></td>
                                                        <td><?php echo $fetch['date_sample_collected']?></td>	
                                                        <td><?php echo $fetch['visual_appearance']?></td>	
                                                        <td><?php echo $fetch['reading']?></td>	
                                                        <td><span class="label label-danger"><?php echo $fetch['laboratory_diagnosis']?></span></td>				
                                                    </tr>
                                                    <?php
                                                                   }
                                                                   $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>   
                                            <div class="panel-footer"><button class="btn btn-info pull-right"> <span class="fa fa-folder-open"> View Details</span></button></div>   
                                        </div>     

                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColTwo">
                                                    <span class="fa fa-folder-open"></span> Xpert MTB Results
                                                </a>
                                            </h4>
                                            <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                            </ul>
                                        </div>                                
                                        <div class="panel-body panel-body-table" id="accOneColTwo">
                                            <table id="customers2" class="table table-bordered table-striped">

                                                <thead> 
                                                    <tr class="success">
                                                        <th>Laboratory Number</th>
                                                        <th>Date Collected</th>
                                                        <th>Visual Appearance</th>
                                                        <th>Reading</th>



                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                    $query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `itr_no` = '$_GET[id]' ORDER BY `sputum_id` DESC") or die(mysqli_error());
                                                    while($fetch = $query->fetch_array()){
                                                        $id = $fetch['itr_no'];
                                                    ?>                                      
                                                    <tr>
                                                        <td><?php echo $fetch['laboratory_number']?></td>
                                                        <td><?php echo $fetch['date_sample_collected']?></td>	
                                                        <td><?php echo $fetch['visual_appearance']?></td>	
                                                        <td><span class="label label-danger"><?php echo $fetch['reading']?></span></td>	

                                                    </tr>
                                                    <?php
                                                    }
                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>   
                                        </div>                                
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColThree">
                                                    <span class="fa fa-folder-open"></span> TB Culture Results
                                                </a>
                                            </h4>
                                            <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                            </ul>
                                        </div>                                
                                        <div class="panel-body panel-body-table" id="accOneColThree">
                                            <table id="customers2" class="table table-bordered table-striped">
                                                <thead> 
                                                    <tr class="success">
                                                        <th>Laboratory Number</th>
                                                        <th>Date Collected</th>
                                                        <th>Date Received</th>
                                                        <th>TB Culture Result</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                    $query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `itr_no` = '$_GET[id]' ORDER BY `sputum_id` DESC") or die(mysqli_error());
                                                    while($fetch = $query->fetch_array()){
                                                        $id = $fetch['itr_no'];
                                                    ?>                                      
                                                    <tr>
                                                        <td><?php echo $fetch['laboratory_number']?></td>
                                                        <td><?php echo $fetch['date_sample_collected']?></td>	
                                                        <td><?php echo $fetch['date_sample_received']?></td>	
                                                        <td><?php echo $fetch['tb_culture_result']?></td>	
                                                        <td><span class="label label-danger"><?php echo $fetch['remarks']?></span></td>				
                                                    </tr>
                                                    <?php
                                                    }
                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>   
                                            <div class="panel-footer"><button class="btn btn-info pull-right"> <span class="fa fa-folder-open"> View Details</span></button></div>   
                                        </div>     

                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColFour">
                                                    <span class="fa fa-folder-open"></span> DST Results - First Line Drug mcg/mL
                                                </a>
                                            </h4>
                                            <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                            </ul>
                                        </div>                                
                                        <div class="panel-body panel-body-table" id="accOneColFour">
                                            <table id="customers2" class="table table-bordered table-striped">

                                                <thead> 
                                                    <tr class="success">
                                                        <th>Drugs</th>
                                                        <th>Results</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                    $query = $conn->query("SELECT * FROM `dst_examination` WHERE `itr_no` = '$_GET[id]' ORDER BY `sputum_id` DESC") or die(mysqli_error());
                                                    while($fetch = $query->fetch_array()){
                                                        $id = $fetch['itr_no'];
                                                    ?>   
                                                    <tr>
                                                        <td>Isoniazid (H)</td>
                                                        <td><span class="label label-danger"><?php echo $fetch ['isoniazid']?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rifampicin (R)</td>
                                                        <td><span class="label label-danger"><?php echo $fetch ['rifampicin']?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ethambutol (E)</td>
                                                        <td><span class="label label-danger"><?php echo $fetch ['ethambutol']?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Streptomycin (S)</td>
                                                        <td><span class="label label-danger"><?php echo $fetch ['streptomycin']?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pyrazinamide (Z)</td>
                                                        <td><span class="label label-danger"><?php echo $fetch ['pyrazinamide']?></span></td>
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

                    <!-- END PAGE CONTENT -->
                </div>

                <!-- END PAGE CONTAINER -->

                <!-- MESSAGE BOX-->
                <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
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



        <!-- END SCRIPTS -->          

    </body>
</html>






