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
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Patient Lists</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Users</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Drug Medication</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-folder"></span> <span class="xn-text">Patients Archive</span></a> </li>

                        </ul>              
                    </li>      
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="patient_table.php"><span class="fa fa-flask"></span> <span class="xn-text">Sputum Examination</span></a> </li>
                            <li> <a href="patient_table.php"><span class="fa fa-male"></span> <span class="xn-text">Enroll Patient</span></a> </li>
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
                    <li><a href="patient_table.php">Patients Table</a></li>
                    <li class="active">Drug Medications</li>
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
                        <div class="col-md-6">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient Information</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Drug Medications</a></li>
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
                                                        <label class="col-md-3 col-xs-12 control-label">ITR NO</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="itr_no" value="<?php echo $fetch['itr_no']?>" disabled/>
                                                            </div>                                                
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Drug Medication</label>
                                                        <div class="col-md-3">
                                                            <select class="validate[required] select" name="drugs" required>
                                                                <option value = "">Select an option</option>
                                                                <option value = "Amoxicillin and Clavulanic Acid">Amoxicillin and Clavulanic Acid</option>
                                                                <option value = "CAPREOMYCIN">CAPREOMYCIN</option>
                                                                <option value = "CIPROFLOXACIN">CIPROFLOXACIN</option>
                                                                <option value = "CLARITHROMYCIN">CLARITHROMYCIN</option>
                                                                <option value = "AMIKACIN">AMIKACIN</option>
                                                                <option value = "CLOFFAZIMINE">CLOFFAZIMINE</option>
                                                                <option value = "CYCLOSERINE">CYCLOSERINE</option>
                                                                <option value = "ETHAMBUTOL">ETHAMBUTOL</option>
                                                                <option value = "ETHIONAMIDE">ETHIONAMIDE</option>
                                                                <option value = "GATIFLOXACIN">GATIFLOXACIN</option>
                                                                <option value = "ISONIAZID">ISONIAZID</option>
                                                                <option value = "KANAMYCIN">KANAMYCIN</option>
                                                                <option value = "LEVOFLOXACIN">LEVOFLOXACIN</option>
                                                                <option value = "MOXIFLOXACIN">MOXIFLOXACIN</option>
                                                                <option value = "OFLOXACIN">OFLOXACIN</option>
                                                                <option value = "P-AMINOSALICYLIC ACID">P-AMINOSALICYLIC ACID</option>
                                                                <option value = "PROTHIONAMIDE">PROTHIONAMIDE</option>
                                                                <option value = "PROTHIONAMIDE">PYRAZINAMIDE</option>
                                                                <option value = "PYRIDOXINE">PYRIDOXINE</option>
                                                                <option value = "RIFABUTINE">RIFABUTINE</option>
                                                                <option value = "RIFAMPICIN">RIFAMPICIN</option>
                                                                <option value = "STREPTOMYCIN">STREPTOMYCIN</option>
                                                                <option value = "TERIZIDONE">TERIZIDONE</option>
                                                                <option value = "THIOACETAZONE">THIOACETAZONE</option>
                                                                <option value = "VIOMYCIN">VIOMYCIN</option>					
                                                            </select>                           
                                                        </div>                        
                                                    </div>      

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Dosage</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="dosage" />
                                                            </div>                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Unit</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                                <input type="text" class="form-control" name="unit" />
                                                            </div>                                            
                                                        </div>
                                                    </div>


                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Date Applied</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date">                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <button type="submit" name="add_medication" class="btn btn-info pull-right"> <span class="fa fa-medkit"> Add Medication</span></button>
                                                    </div>
                                                    <?php require_once 'add_medication.php' ?>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                </div>
                            </div>                                                   
                            <!-- END TABS -->                        
                        </div>   
                        <div class="col-md-6">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-tint"></span> Drug Medications of <strong><?php echo $fetch['firstname']. " ". $fetch['lastname']?></strong></h3>
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table table-bordered table-striped">

                                        <thead> 
                                            <tr>
                                                <th>No.</th>
                                                <th>ITR No</th>
                                                <th>Drugs</th>
                                                <th>Dosage</th>
                                                <th>Unit</th>
                                                <th>Date</th>

                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php
                                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                            $query = $conn->query("SELECT * FROM `medication` WHERE `itr_no` = '$_GET[id]' ORDER BY `medication_id` DESC") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            $id = $fetch['itr_no'];
                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['medication_id']?></td>
                                                <td><?php echo $fetch['itr_no']?></td>	
                                                <td><?php echo $fetch['drugs']?></td>				
                                                <td><?php echo $fetch['dosage']?></td>
                                                <td><?php echo $fetch['unit']?></td>
                                                <td><?php echo $fetch['date']?></td>	


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
                        <!-- END PAGE CONTENT WRAPPER -->    

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






