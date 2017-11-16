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
                        <a href="index.html">TB DOTS Center</a>
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
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Master File</span></a>
                        <ul>
                            <li> <a href="master_file_patient.php"><span class="fa fa-folder"></span> <span class="xn-text">Patient Lists</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Users</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Drug Medication</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Patients Archive</span></a> </li>

                        </ul>              
                    </li>      
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="sputum_examination_table.php"><span class="fa fa-flask"></span> <span class="xn-text">TB Examination</span></a> </li>
                            <li> <a href="medications.php"><span class="fa fa-tint"></span> <span class="xn-text">Medications</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-medkit"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-times"></span> <span class="xn-text">Remove Patient</span></a> </li>
                        </ul>              
                    </li>                

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Statistical Reports</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="fa fa-group"></span><span class="xn-text">Patient Population</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="fa fa-tint"></span><span class="xn-text">Drugs Dispensation</span></a></li>

                        </ul>
                    </li>                    


                </ul>
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
                    <li><a href="master_file_patient.php">Patients Table</a></li>
                    <li class="active">Patient Overview</li>
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
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="add_patient.php" class=" btn btn-info"><span class="fa fa-print"></span> Print Preview </a>  
                                        </div>
                                    </div>  
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
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">                                   
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <span class="fa fa-folder-open"></span> <strong>Microscopy Results</strong>
                                                    </h4>
                                                    <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                    </ul>

                                                </div>                                
                                                <div class="panel-body panel-body-table">    
                                                    <table class="table table-bordered">
                                                        <thead> 
                                                            <tr class="success">
                                                                <th>Laboratory Number</th>
                                                                <th>Date Collected</th>
                                                                <th>Visual Appearance</th>
                                                                <th>Reading</th>
                                                                <th>Laboratory Diagnosis</th>
                                                                <th>Examined By</th>
                                                                <th>Date Released</th>
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
                                                                <td><?php echo $fetch['laboratory_diagnosis']?></td>
                                                                <td><?php echo $fetch['examined_by']?></td>
                                                                <td><?php echo $fetch['date_released']?></td>				
                                                            </tr>
                                                            <?php
                                                                   }
                                                                   $conn->close();
                                                            ?>
                                                        </tbody>
                                                    </table>   
                                                    <div class="panel-footer"></div>   
                                                </div>     
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <span class="fa fa-folder-open"></span> <strong>Xpert MTB Results</strong>
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
                                                            <th>Examined By</th>
                                                            <th>Date Released</th>



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
                                                            <td><?php echo $fetch['reading']?></td>	
                                                            <td><?php echo $fetch['examined_by']?></td>	
                                                            <td><?php echo $fetch['date_released']?></td>	

                                                        </tr>
                                                        <?php
                                                        }
                                                        $conn->close();
                                                        ?>
                                                    </tbody>
                                                </table>   
                                                <div class="panel-footer"><button class="btn btn-info pull-right"> <span class="fa fa-print"> Print</span></button></div>   
                                            </div>                                
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <span class="fa fa-folder-open"></span> <strong>TB Culture Results</strong>
                                                </h4>
                                                <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                </ul>
                                            </div>                                
                                            <div class="panel-body panel-body-table" id="accOneColThree">
                                                <table id="customers2" class="table table-bordered">

                                                    <thead> 
                                                        <tr class="success">
                                                            <th>Laboratory Number</th>
                                                            <th>Date Collected</th>
                                                            <th>Date Received</th>
                                                            <th>TB Culture Result</th>
                                                            <th>Remarks</th>
                                                            <th>Examined By</th>
                                                            <th>Reviewed By</th>
                                                            <th>Date Released</th>


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
                                                            <td><?php echo $fetch['remarks']?></td>	
                                                            <td><?php echo $fetch['examined_by']?></td>	
                                                            <td><?php echo $fetch['reviewed_by']?></td>
                                                            <td><?php echo $fetch['date_released']?></td>					
                                                        </tr>
                                                        <?php
                                                        }
                                                        $conn->close();
                                                        ?>
                                                    </tbody>
                                                </table>   
                                                <div class="panel-footer"><button class="btn btn-info pull-right"> <span class="fa fa-print"> Print</span></button></div>   
                                            </div>     

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-fifth">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <span class="fa fa-folder-open"></span> <strong>TB Culture Results</strong>
                                                </h4>
                                                <ul class="panel-controls" style="margin:0px 10px 0px -100px 0px;">
                                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                </ul>
                                            </div>                                
                                            <div class="panel-body panel-body-table" id="accOneColThree">
                                                <table id="customers2" class="table table-bordered">

                                                    <thead> 
                                                        <tr class="success">
                                                            <th>TB Culture Laboratory</th>
                                                            <th>DST Laboatory</th>
                                                            <th>Method</th>
                                                            <th>Date Collected</th>
                                                            <th>Date Coll</th>
                                                            <th>Examined By</th>
                                                            <th>Reviewed By</th>
                                                            <th>Date Released</th>


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
                                                            <td><?php echo $fetch['remarks']?></td>	
                                                            <td><?php echo $fetch['examined_by']?></td>	
                                                            <td><?php echo $fetch['reviewed_by']?></td>
                                                            <td><?php echo $fetch['date_released']?></td>					
                                                        </tr>
                                                        <?php
                                                        }
                                                        $conn->close();
                                                        ?>
                                                    </tbody>
                                                </table>   
                                                <div class="panel-footer"><button class="btn btn-info pull-right"> <span class="fa fa-print"> Print</span></button></div>   
                                            </div>     

                                        </div>
                                    </div>

                                </div>



                            </div>                                                   
                            <!-- END TABS -->                        
                        </div> 


                    </div>   
                </div>
            </div> 
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









