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
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />

    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="master_file_patient.php">Patient Master File</a></li>
                    <li class="active">Patient Overview</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Treatment</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Follow-up Schedule</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">DSSM</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">Xpert MTB</a></li>
                                    <li><a href="#tab-sixth" role="tab" data-toggle="tab">TB Culture</a></li>
                                    <li><a href="#tab-seventh" role="tab" data-toggle="tab">DST</a></li>
                                    <li><a href="#tab-eight" role="tab" data-toggle="tab">TST</a></li>
                                    <li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li>
                                </ul>

                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                            <div class="row">
                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
            $q2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
            $fetch = $q2->fetch_array();
                                                ?>
                                                <div class="col-md-3">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body profile">
                                                            <div class="profile-image">
                                                                <img src="assets/images/users/no-image.jpg" alt="Nadia Ali"/>
                                                            </div>
                                                            <div class="profile-data">
                                                                <div class="profile-data-name"style="color:#695858"><?php echo $f['patient_name']?></div>
                                                                <div class="profile-data-title">TB Patient</div>
                                                            </div>
                                                            <div class="panel-body">                                    
                                                                <div class="contact-info">
                                                                    <p><small style="font-size:12px;">Gender</small><br/><?php echo $f['gender']?></p>
                                                                    <p><small style="font-size:12px;">Contact Number</small><br/><?php echo $f['contact_number']?></p>
                                                                    <p><small style="font-size:12px;">Home Address</small><br/><?php echo $f['address']?></p>                                   
                                                                </div>
                                                            </div>    
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- CONTACT ITEM -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">Birthdate</small><br/><?php echo $f['birthdate']?></p>
                                                                <p><small style="font-size:12px;">Height</small><br/><?php echo $f['height']?> cms.</p>
                                                                <p><small style="font-size:12px;">Occupation</small><br/><?php echo $f['occupation']?></p>                                   
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">Philhealth Number</small><br/><?php echo $f['philhealth_no']?></p> 
                                                                <p><small style="font-size:12px;">Contact Person</small><br/><?php echo $f['contact_person']?></p>
                                                                <p><small style="font-size:12px;">Emergency Number</small><br/><?php echo $f['emergency_no']?></p>
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- CONTACT ITEM -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">TB Case Number</small><br/><?php echo $fetch['tb_case_no']?></p>
                                                                <p><small style="font-size:12px;">Registration Date</small><br/><?php echo $fetch['registration_date']?></p>
                                                                <p><small style="font-size:12px;">DOTS Facility</small><br/><?php echo $fetch['dots_facility']?></p>                                   
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">Source of Patient</small><br/><?php echo $fetch['source_of_patient']?></p>
                                                                <p><small style="font-size:12px;">Registration Group</small><br/><?php echo $fetch['registration_group']?></p>
                                                                <p><small style="font-size:12px;">Diagnosis</small><br/><?php echo $fetch['diagnosis']?></p>                                   
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- CONTACT ITEM -->
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">Bacteriological Status</small><br/><?php echo $fetch['bacteriological_status']?></p> 
                                                                <p><small style="font-size:12px;">Classification of TB</small><br/><?php echo $fetch['classification_of_tb']?></p>
                                                                <p><small style="font-size:12px;">BCG Scar</small><br/><?php echo $fetch['bcg_scar']?></p>

                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:12px;">History of TB Drug Intake</small><br/><?php echo $fetch['history']?></p>
                                                                <p><small style="font-size:12px;">Duration</small><br/><?php echo $fetch['duration']?></p>
                                                                <p><small style="font-size:12px;">Status</small><br/><?php echo $f['status']?></p>                 
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                    <!-- END CONTACT ITEM -->
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title"><span class="fa fa-group"></span> <strong>Household Members of <?php echo $f['patient_name']?></strong></h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <table id="laboratory_request" class="table table-hover">

                                                                <thead>
                                                                    <tr>
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Date Screened</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><?php echo $fetch['household_member']?></center></td>
                                                                        <td><center><?php echo $fetch['household_member_age']?></center></td>
                                                                        <td><center><?php echo $fetch['date_screened']?></center></td>
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


                                            </div></div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">
                                            <?php
                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());                                                        
                                            ?>

                                            <div class="col-md-3">
                                                <!-- CONTACT ITEM -->
                                                <div class="panel panel-info">
                                                    <div class="panel-body profile">
                                                        <div class="profile-image">

                                                        </div>
                                                        <div class="profile-data">
                                                            <div class="profile-data-name" style="color:#695858">Intensive Phase</div>
                                                            <div class="profile-data-title">Drug Intake</div>
                                                        </div>
                                                    </div>                                
                                                    <div class="widget widget-info widget-item-icon">
                                                        <div class="widget-item-left">
                                                            <span class="fa fa-calendar"></span>
                                                        </div>
                                                        <div class="widget-data">
                                                            <?php
                                                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                            $fetch1 = $query1->fetch_array();
                                                            ?>
                                                            <div class="widget-int num-count">
                                                                <?php echo $fetch1['total'] ?>
                                                            </div>
                                                            <div class="widget-title">Days</div>
                                                            <div class="widget-subtitle">Drug Usage</div>
                                                        </div>
                                                    </div> 
                                                    <div class="panel-footer">
                                                        <a href="patient_treatment.php?id=<?php echo $f['patient_id']?>&patient_name=<?php echo $f['patient_name']?>" class="btn btn-sm btn-info"><span class="fa fa-search"></span>View Treatment</a> 
                                                    </div>                              
                                                </div>
                                                <!-- END CONTACT ITEM -->
                                            </div>
                                            <div class="col-md-3">
                                                <!-- CONTACT ITEM -->
                                                <div class="panel panel-info">
                                                    <div class="panel-body profile">
                                                        <div class="profile-image">

                                                        </div>
                                                        <div class="profile-data">
                                                            <div class="profile-data-name" style="color:#695858">Continuation Phase</div>
                                                            <div class="profile-data-title">Drug Intake</div>
                                                        </div>
                                                    </div>                                
                                                    <div class="widget widget-info widget-item-icon">
                                                        <div class="widget-item-left">
                                                            <span class="fa fa-calendar"></span>
                                                        </div>
                                                        <div class="widget-data">
                                                            <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                $query2 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                                $fetch2 = $query2->fetch_array();
                                                            ?>
                                                            <div class="widget-int num-count">
                                                                <?php echo $fetch2['total']; ?>
                                                            </div>
                                                            <div class="widget-title">Days</div>
                                                            <div class="widget-subtitle">Drug Usage</div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="patient_treatment.php?id=<?php echo $f['patient_id']?>&patient_name=<?php echo $f['patient_name']?>" class="btn btn-sm btn-info"><span class="fa fa-search"></span>View Treatment</a>  
                                                    </div>
                                                </div>
                                                <!-- END CONTACT ITEM -->
                                            </div>
                                            <div class="col-md-3">
                                                <!-- CONTACT ITEM -->
                                                <div class="panel panel-info">
                                                    <div class="panel-body profile">
                                                        <div class="profile-image">

                                                        </div>
                                                        <div class="profile-data">
                                                            <div class="profile-data-name" style="color:#695858">Drug Consumption</div>
                                                            <div class="profile-data-title">Present and Missed Days</div>
                                                        </div>
                                                    </div>                                
                                                    <div class="widget widget-danger widget-carousel">
                                                        <div class="owl-carousel" id="owl-example">
                                                            <div> 
                                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                           $query2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                           $fetch2 = $query2->fetch_array();
                                                           $query3 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                           $fetch3= $query3->fetch_array();
                                                           $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                           $q3 = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                           $f3 = $q3->fetch_array();
                                                           $q4 = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` where `patient_id` = '$_GET[id]' && `remarks` = 'Absent'") or die(mysqli_error());
                                                           $f4 = $q4->fetch_array();
                                                                ?>                                 
                                                                <div class="widget-title">Intensive Phase</div>                                                                        
                                                                <div class="widget-subtitle">Drug Dosage Given</div>
                                                                <div class="widget-int"><?php echo $fetch2['sum(dosage)']; ?></div>
                                                            </div>
                                                            <div>                                    
                                                                <div class="widget-title">Continuation Phase</div>
                                                                <div class="widget-subtitle">Drug Dosage Given</div>
                                                                <div class="widget-int"><?php echo $fetch3['sum(dosage)']; ?></div>
                                                            </div>

                                                            <div>
                                                                <div class="widget-title">Intensive Phase</div>
                                                                <div class="widget-subtitle">Total Missed Days</div>
                                                                <div class="widget-int"><?php echo $f3['total']; ?></div>
                                                            </div>
                                                            <div>                                    
                                                                <div class="widget-title">Continuation Phase</div>
                                                                <div class="widget-subtitle">Total Missed Days</div>
                                                                <div class="widget-int"><?php echo $f4['total']; ?></div>
                                                            </div>

                                                        </div>                            
                                                    </div> 

                                                    <div class="panel-footer">
                                                        <a href="patient_treatment.php?id=<?php echo $f['patient_id']?>&patient_name=<?php echo $f['patient_name']?>" class="btn btn-sm btn-info"><span class="fa fa-search"></span>View Treatment</a>  
                                                    </div>
                                                </div>
                                                <!-- END CONTACT ITEM -->
                                            </div>


                                            <div class="col-md-3">
                                                <?php
    $f = $q->fetch_array();
                                                           $query4 = $conn->query("SELECT * FROM `treatment_record` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                                           $fetch4 = $query4->fetch_array();    
                                                ?>

                                                <!-- CONTACT ITEM -->
                                                <div class="panel panel-info">
                                                    <div class="panel-body profile">
                                                        <div class="profile-image">
                                                        </div>
                                                        <div class="profile-data">
                                                            <div class="profile-data-name" style="color:#695858">Treatment Information</div>
                                                            <div class="profile-data-title"></div>
                                                        </div>
                                                    </div>                                
                                                    <div class="panel-body">                                    
                                                        <div class="contact-info">
                                                            <p><small style="font-size:12px;">Treatment Regimen Category</small><br/><?php echo $fetch4['treatment_regimen_category']?></p>
                                                            <p><small style="font-size:12px;">Initial Weight</small><br/><?php echo $fetch4['weight']?> kgs.</p>
                                                            <p><small style="font-size:12px;">Treatment Partner Name</small><br/><?php echo $fetch4['treatment_partner_name']?></p>           
                                                            <p><small style="font-size:12px;">Designation of Treatment Partner</small><br/><?php echo $fetch4['designation_treatment_partner']?></p>
                                                            <p><small style="font-size:12px;">Date Treatment Started</small><br/><?php echo $fetch4['date_treatment_started']?></p>
                                                        </div>
                                                    </div>                                
                                                </div>
                                                <!-- END CONTACT ITEM -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>Examination Date</center></th>
                                                            <th><center>Test Requested</center></th>
                                                            <th><center>View Record</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                $query = $conn->query("SELECT * FROM `examination_sched` WHERE `patient_id` = '$_GET[id]' ORDER BY `sched_id` DESC") or die(mysqli_error());
                                                                $id = $f['patient_id'];
                                                                while($fetch = $query->fetch_array()){
                                                                    $id = $fetch['patient_id'];
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <center><?php echo $fetch['examination_date']?></center> 
                                                            </td>
                                                            <td>
                                                                <center><?php echo $fetch['test_requested']?></center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <a href="#viewsched<?php echo $fetch['sched_id'];?>" data-toggle="modal" data-target="#viewsched<?php echo $fetch['sched_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                    <div class="tab-pane" id="tab-fourth">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>Date Examined</center></th>
                                                            <th><center>Appearance</center></th>
                                                            <th><center>Reading</center></th>
                                                            <th><center>Date Released</center></th>
                                                            <th><center>View Record</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                        $query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
                                                        $id = $f['patient_id'];
                                                        while($fetch = $query->fetch_array()){
                                                            $id = $fetch['patient_id'];
                                                        ?>
                                                        <tr>
                                                            <td><center><?php echo $fetch['date_examined']?></center></td>
                                                            <td><center><?php echo $fetch['visual_appearance']?></center></td>
                                                            <td><center><?php echo $fetch['reading']?></center></td>
                                                            <td><center><?php echo $fetch['date_released']?></center></td>
                                                            <td>
                                                                <center>
                                                                    <a href="#viewdssm<?php echo $fetch['dssm_id'];?>" data-toggle="modal" data-target="#viewdssm<?php echo $fetch['dssm_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                    <div class="tab-pane" id="tab-fifth">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>Date Examined</center></th>
                                                            <th><center>Visual Appearance</center></th>
                                                            <th><center>Reading</center></th>
                                                            <th><center>Result</center></th>
                                                            <th><center>View Record</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                        $query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `xpert_id` DESC") or die(mysqli_error());
                                                        $id = $f['patient_id'];
                                                        while($fetch = $query->fetch_array()){
                                                            $id = $fetch['patient_id'];
                                                        ?>
                                                        <tr>
                                                            <td><center><?php echo $fetch['date_examined']?></center></td>
                                                            <td><center><?php echo $fetch['visual_appearance']?></center></td>
                                                            <td><center><?php echo $fetch['reading']?></center></td>
                                                            <td><center><?php echo $fetch['result']?></center></td>
                                                            <td>
                                                                <center>
                                                                    <a href="#viewxpert<?php echo $fetch['xpert_id'];?>" data-toggle="modal" data-target="#viewxpert<?php echo $fetch['xpert_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                    <div class="tab-pane" id="tab-sixth">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                <div class="panel-body">
                                                    <table id="laboratory_request" class="table table-hover">
                                                        <thead>
                                                            <tr class="info">
                                                                <th><center>Method</center></th>
                                                                <th><center>TB Culture Result</center></th>
                                                                <th><center>Remarks</center></th>
                                                                <th><center>Date Released</center></th>
                                                                <th><center>View Record</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                            $query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
                                                            $id = $f['patient_id'];
                                                            while($fetch = $query->fetch_array()){
                                                                $id = $fetch['patient_id'];
                                                            ?>
                                                            <tr>
                                                                <td><center><?php echo $fetch['method']?></center></td>
                                                                <td><center><?php echo $fetch['tb_culture_result']?></center></td>
                                                                <td><center><?php echo $fetch['remarks']?></center></td>
                                                                <td><center><?php echo $fetch['date_released']?></center></td>
                                                                <td>
                                                                    <center>
                                                                        <a href="#viewtbculture<?php echo $fetch['tb_culture_id'];?>" data-toggle="modal" data-target="#viewtbculture<?php echo $fetch['tb_culture_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-seventh">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                <div class="panel-body">
                                                    <table id="laboratory_request" class="table table-hover">
                                                        <thead>
                                                            <tr class="info">
                                                                <th><center>TB Culture Laboratory</center></th>
                                                                <th><center>DST Laboratory</center></th>
                                                                <th><center>Date Collected</center></th>
                                                                <th><center>Date Released</center></th>
                                                                <th><center>View Record</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                            $query = $conn->query("SELECT * FROM `dst_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dst_id` DESC") or die(mysqli_error());
                                                            $id = $f['patient_id'];
                                                            while($fetch = $query->fetch_array()){
                                                                $id = $fetch['patient_id'];
                                                            ?>
                                                            <tr>
                                                                <td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
                                                                <td><center><?php echo $fetch['dst_laboratory']?></center></td>
                                                                <td><center><?php echo $fetch['date_collected']?></center></td>
                                                                <td><center><?php echo $fetch['date_released']?></center></td>
                                                                <td>
                                                                    <center>
                                                                        <a href="#viewdst<?php echo $fetch['dst_id'];?>" data-toggle="modal" data-target="#viewdst<?php echo $fetch['dst_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eight">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>Tuberculin Skin Testing</center></th>
                                                            <th><center>Date Read</center></th>
                                                            <th><center>View Record</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                        $query = $conn->query("SELECT * FROM `tst` WHERE `patient_id` = '$_GET[id]' ORDER BY `tst_id` DESC") or die(mysqli_error());
                                                        $id = $f['patient_id'];
                                                        while($fetch = $query->fetch_array()){
                                                            $id = $fetch['patient_id'];
                                                        ?>
                                                        <tr>
                                                            <td><center><?php echo $fetch['result']?></center></td>
                                                            <td><center><?php echo $fetch['date_read']?></center></td>
                                                            <td>
                                                                <center>
                                                                    <a href="#viewtst<?php echo $fetch['tst_id'];?>" data-toggle="modal" data-target="#viewtst<?php echo $fetch['tst_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                                    <div class="tab-pane" id="tab-ninth">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>CXR Findings</center></th>
                                                            <th><center>Date of Exam</center></th>
                                                            <th><center>TBDC</center></th>
                                                            <th><center>View Record</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                        $query = $conn->query("SELECT * FROM `cxr` WHERE `patient_id` = '$_GET[id]' ORDER BY `cxr_id` DESC") or die(mysqli_error());
                                                        $id = $f['patient_id'];
                                                        while($fetch = $query->fetch_array()){
                                                            $id = $fetch['patient_id'];
                                                        ?>
                                                        <tr>
                                                            <td><center><?php echo $fetch['cxr_findings']?></center></td>
                                                            <td><center><?php echo $fetch['date_of_exam']?></center></td>
                                                            <td><center><?php echo $fetch['tbdc']?></center></td>
                                                            <td>
                                                                <center>
                                                                    <a href="#viewcxr<?php echo $fetch['cxr_id'];?>" data-toggle="modal" data-target="#viewcxr<?php echo $fetch['cxr_id'];?>" class="btn btn-info btn-xs"><span class="fa fa-search"></span> </a>
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
                            <!-- END PAGE CONTENT -->
                        </div>

                        <!-- Examination Sched -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `examination_sched` ORDER BY `sched_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewsched<?php echo $fetch['sched_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> Examination Schedule</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Scheduled Date" type="text" class="form-control" name="examination_date" style="color:black;" value="<?php echo $fetch['examination_date']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input  data-toggle="tooltip" data-placement="right" title="Test Requested" type="text" class="form-control datepicker" name="test_requested" style="color:black;" value="<?php echo $fetch['test_requested']?>"disabled/>
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
                        <!-- End of Examination Sched -->


                        <!-- DSSM -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `dssm_examination` ORDER BY `dssm_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewdssm<?php echo $fetch['dssm_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> DSSM Examination</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="panel panel-info">
                                                    <div class="panel-body profile">
                                                        <div class="panel-body">                                    
                                                            <div class="contact-info">
                                                                <p><small style="font-size:13px;">Date Examined</small><br/><?php echo $fetch['date_examined']?></p>
                                                                <p><small style="font-size:13px;">Laboratory Number</small><br/><?php echo $fetch['laboratory_number']?></p>
                                                                <p><small style="font-size:13px;">Visual Appearance</small><br/><?php echo $fetch['visual_appearance']?></p>
                                                                <p><small style="font-size:13px;">Reading</small><br/><?php echo $fetch['reading']?></p>
                                                                <p><small style="font-size:13px;">Laboratory Diagnosis</small><br/><?php echo $fetch['laboratory_diagnosis']?></p>
                                                                <p><small style="font-size:13px;">Examined By</small><br/><?php echo $fetch['examined_by']?></p>
                                                                <p><small style="font-size:13px;">Date Released</small><br/><?php echo $fetch['date_released']?></p>
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
                        <!-- End of DSSM -->


                        <!-- XPERT -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `gene_expert_examination` ORDER BY `xpert_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewxpert<?php echo $fetch['xpert_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> Xpert MTB/RIF Examination</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="panel-body">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body profile">
                                                            <div class="panel-body">                                    
                                                                <div class="contact-info">
                                                                    <p><small style="font-size:13px;">Date Examined</small><br/><?php echo $fetch['date_examined']?></p>
                                                                    <p><small style="font-size:13px;">Laboratory Number</small><br/><?php echo $fetch['laboratory_number']?></p>
                                                                    <p><small style="font-size:13px;">Visual Appearance</small><br/><?php echo $fetch['visual_appearance']?></p>
                                                                    <p><small style="font-size:13px;">Reading</small><br/><?php echo $fetch['reading']?></p>
                                                                    <p><small style="font-size:13px;">Examined By</small><br/><?php echo $fetch['examined_by']?></p>
                                                                    <p><small style="font-size:13px;">Date Released</small><br/><?php echo $fetch['date_released']?></p>
                                                                    <p><small style="font-size:13px;">Result</small><br/><?php echo $fetch['result']?></p>
                                                                </div>
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
                        <!-- End of XPERT -->


                        <!-- TB Culture -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `tb_culture_examination` ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewtbculture<?php echo $fetch['tb_culture_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-file-text"></span> TB Culture Examination</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Method" type="text" class="form-control" name="method" style="color:black;" value="<?php echo $fetch['method']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="TB Culture Laboratory" type="text" class="form-control" name="tb_culture_laboratory" style="color:black;" value="<?php echo $fetch['tb_culture_laboratory']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Laboratory Number" type="text" class="form-control" name="laboratory_no" style="color:black;" value="<?php echo $fetch['laboratory_no']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date Sample Collected" type="text" class="form-control" name="date_sample_collected" style="color:black;" value="<?php echo $fetch['date_sample_collected']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date Sample Received" type="text" class="form-control" name="date_sample_received" style="color:black;" value="<?php echo $fetch['date_sample_received']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="TB Culture Result" type="text" class="form-control" name="tb_culture_result" style="color:black;" value="<?php echo $fetch['tb_culture_result']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Remarks" type="text" class="form-control" name="remarks" style="color:black;" value="<?php echo $fetch['remarks']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Examined By" type="text" class="form-control" name="examined_by" style="color:black;" value="<?php echo $fetch['examined_by']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Reviewed By" type="text" class="form-control" name="reviewed_by" style="color:black;" value="<?php echo $fetch['reviewed_by']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date Released" type="text" class="form-control" name="date_released" style="color:black;" value="<?php echo $fetch['date_released']?>"disabled/>
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
                        <!-- End of TB Culture -->


                        <!-- DST -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `dst_examination` ORDER BY `dst_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewdst<?php echo $fetch['dst_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> DST Examination</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="TB Culture Laboratory" type="text" class="form-control" name="tb_culture_laboratory" style="color:black;" value="<?php echo $fetch['tb_culture_laboratory']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="DST Laboratory" type="text" class="form-control" name="dst_laboratory" style="color:black;" value="<?php echo $fetch['dst_laboratory']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="TB Culture Laboratory" type="text" class="form-control" name="tb_culture_laboratory" style="color:black;" value="<?php echo $fetch['tb_culture_laboratory']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="DST Laboratory" type="text" class="form-control" name="dst_laboratory" style="color:black;" value="<?php echo $fetch['dst_laboratory']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Method" type="text" class="form-control" name="method" style="color:black;" value="<?php echo $fetch['method']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div> <hr>
                                                <span class="help-block" style="color:red;">First Line Drug Result mcg/mL</span> <br>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Isoniazid (H)" type="text" class="form-control" name="isoniazid" style="color:black;" value="<?php echo $fetch['isoniazid']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Rifampicin (R)" type="text" class="form-control" name="rifampicin" style="color:black;" value="<?php echo $fetch['rifampicin']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Ethambutol (E)" type="text" class="form-control" name="ethambutol" style="color:black;" value="<?php echo $fetch['ethambutol']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Streptomycin (S)" type="text" class="form-control" name="streptomycin" style="color:black;" value="<?php echo $fetch['streptomycin']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Pyrazinamide (Z)" type="text" class="form-control" name="pyrazinamide" style="color:black;" value="<?php echo $fetch['pyrazinamide']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div> <hr>

                                                <span class="help-block" style="color:red;">Second Line Drug Result mcg/mL</span> <br>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Levofloxacin (Lfx)" type="text" class="form-control" name="levofloxacin" style="color:black;" value="<?php echo $fetch['levofloxacin']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Kanamycin (Km)" type="text" class="form-control" name="kanamycin" style="color:black;" value="<?php echo $fetch['kanamycin']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Amikacin (Amk)" type="text" class="form-control" name="amikacin" style="color:black;" value="<?php echo $fetch['amikacin']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Capreomycin (Cm)" type="text" class="form-control" name="capreomycin" style="color:black;" value="<?php echo $fetch['capreomycin']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div> <hr>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Examined By" type="text" class="form-control" name="examined_by" style="color:black;" value="<?php echo $fetch['examined_by']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Remarks" type="text" class="form-control" name="remarks" style="color:black;" value="<?php echo $fetch['remarks']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Reviewed By" type="text" class="form-control" name="reviewed_by" style="color:black;" value="<?php echo $fetch['reviewed_by']?>"disabled/>
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date Released" type="text" class="form-control" name="date_released" style="color:black;" value="<?php echo $fetch['date_released']?>"disabled/>
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
                        <!-- End of DST -->


                        <!-- TST -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `tst` ORDER BY `tst_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewtst<?php echo $fetch['tst_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-file-text"></span> Tuberculin Skin Testing</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Result" type="text" class="form-control" name="result" style="color:black;" value="<?php echo $fetch['result']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date Read" type="text" class="form-control" name="date_read" style="color:black;" value="<?php echo $fetch['date_read']?>"disabled/>
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
                        <!-- End of TST -->


                        <!-- TST -->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `cxr` ORDER BY `cxr_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="viewcxr<?php echo $fetch['cxr_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-file-text"></span> Chest X-Ray</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="CXR Findings" type="text" class="form-control" name="cxr_findings" style="color:black;" value="<?php echo $fetch['cxr_findings']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="Date of Exam" type="text" class="form-control" name="date_of_exam" style="color:black;" value="<?php echo $fetch['date_of_exam']?>"disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input data-toggle="tooltip" data-placement="right" title="TBDC" type="text" class="form-control" name="tbdc" style="color:black;" value="<?php echo $fetch['tbdc']?>"disabled/>
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
                        <!-- End of TST -->




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
                    </div>
                </div>
            </div>
        </div>

        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>