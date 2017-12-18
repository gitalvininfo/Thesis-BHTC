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
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Follow-up Visit</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">DSSM</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">Xpert MTB</a></li>
                                    <li><a href="#tab-sixth" role="tab" data-toggle="tab">TB Culture</a></li>
                                    <li><a href="#tab-seventh" role="tab" data-toggle="tab">DST</a></li>
                                    <li><a href="#tab-eigth" role="tab" data-toggle="tab">TST</a></li>
                                    <li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li>

                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $query->fetch_array();
            $id = $f['patient_id'];
            $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="panel panel-default">
                                                                <div class="panel-body">                                    
                                                                    <div class="contact-info">
                                                                        <img src="assets/images/users/no-image.jpg" style="height:130px;width:130px;"> &nbsp;
                                                                        <h6 style="color:red"><center><strong><?php echo $fetch2['year']. "-". "080". "-" .$f['patient_id']?></strong></center></h6>    
                                                                    </div>
                                                                </div>    
                                                            </div>

                                                        </div>
                                                        <div class="col-md-5">                                                
                                                            <h6><strong>Name: </strong><?php echo $fetch['patient_name']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Age: </strong><?php echo $fetch['age']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Gender: </strong><?php echo $fetch['gender']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Contact Number: </strong><?php echo $fetch['contact_number']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Home Address: </strong><?php echo $fetch['address']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Birthdate: </strong><?php echo $fetch['address']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Occupation: </strong><?php echo $fetch['occupation']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Contact Person: </strong><?php echo $fetch['contact_person']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?></h6>
                                                        </div>
                                                        <hr style="margin:0px 0 5px 0;">
                                                        <div class="col-md-5">                        
                                                            <h6><strong>Registration Date: </strong><?php echo $fetch2['registration_date']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>DOTS Facility: </strong><?php echo $fetch2['dots_facility']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Source of Patient: </strong><?php echo $fetch2['source_of_patient']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Registration Group: </strong><?php echo $fetch2['registration_group']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Bacteriological Status: </strong><?php echo $fetch2['bacteriological_status']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Classification of TB: </strong><?php echo $fetch2['classification_of_tb']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>BCG Scar: </strong><?php echo $fetch2['bcg_scar']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>History of TB: </strong><?php echo $fetch2['history']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Duration: </strong><?php echo $fetch2['duration']?></h6>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <div class="btn-group pull-right">
                                                                    <div class="pull-left">
                                                                        <a href="#new_member<?php echo $f['patient_id'];?>" data-target="#new_member<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-md"><span class="fa fa-user-plus"></span> New Family Member</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body">
                                                                <table id="laboratory_request" class="table table-hover">

                                                                    <thead>
                                                                        <tr>
                                                                            <th><center>Name</center></th>
                                                                            <th><center>Age</center></th>
                                                                            <th><center>Date Screened</center></th>
                                                                            <th><center>Action</center></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        require 'config.php';
                                                                        $query = $conn->query("SELECT * FROM `family_member` WHERE `patient_id` = '$_GET[id]' ORDER BY `member_id` DESC") or die(mysqli_error());
                                                                        while($fetch = $query->fetch_array()){
                                                                        ?>
                                                                        <tr>
                                                                            <td><center><?php echo $fetch['name']?></center></td>
                                                                            <td><center><?php echo $fetch['age']?></center></td>
                                                                            <td><center><?php echo $fetch['date_screened']?></center></td>
                                                                            <td><center>
                                                                                <a href="#updatemember<?php echo $fetch['member_id'];?>" data-target="#updatemember<?php echo $fetch['member_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
                                                                                </center></td>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <div class="row">
                                            <div class="panel-body">
                                                <table id="laboratory_request" class="table table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th><center>Follow-up Visit Schedule</center></th>
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
                                                            <th><center>Laboratory Number</center></th>
                                                            <th><center>Visual Appearance 1</center></th>
                                                            <th><center>Visual Appearance 2</center></th>
                                                            <th><center>Reading 1</center></th>
                                                            <th><center>Reading 2</center></th>
                                                            <th><center>Lab. Diagnosis</center></th>
                                                            <th><center>Examined By</center></th>
                                                            <th><center>Date Released</center></th>
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
                                                            <td><center><?php echo $fetch['laboratory_number']?></center></td>
                                                            <td><center><?php echo $fetch['visual_appearance']?></center></td>
                                                            <td><center><?php echo $fetch['visual_appearance2']?></center></td>
                                                            <td><center><?php echo $fetch['reading']?></center></td>
                                                            <td><center><?php echo $fetch['reading2']?></center></td>
                                                            <td><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
                                                            <td><center><?php echo $fetch['examined_by']?></center></td>
                                                            <td><center><?php echo $fetch['date_released']?></center></td>
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
                                                            <th><center>Laboratory Number</center></th>
                                                            <th><center>Visual Appearance</center></th>
                                                            <th><center>Reading</center></th>
                                                            <th><center>Result</center></th>
                                                            <th><center>Examined By</center></th>
                                                            <th><center>Date Released</center></th>
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
                                                            <td><center><?php echo $fetch['laboratory_number']?></center></td>
                                                            <td><center><?php echo $fetch['visual_appearance']?></center></td>
                                                            <td><center><?php echo $fetch['reading']?></center></td>
                                                            <td><center><?php echo $fetch['result']?></center></td>
                                                            <td><center><?php echo $fetch['examined_by']?></center></td>
                                                            <td><center><?php echo $fetch['date_released']?></center></td>
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
                                                                <th><center>TB Culture Lab</center></th>
                                                                <th><center>Laboratory Number</center></th>
                                                                <th><center>Date Sample Collected</center></th>
                                                                <th><center>Date Sample Received</center></th>
                                                                <th><center>TB Culture Result</center></th>
                                                                <th><center>Remarks</center></th>
                                                                <th><center>Examined By</center></th>
                                                                <th><center>Reviewed By</center></th>
                                                                <th><center>Date Released</center></th>
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
                                                                <td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
                                                                <td><center><?php echo $fetch['laboratory_no']?></center></td>
                                                                <td><center><?php echo $fetch['date_sample_collected']?></center></td>
                                                                <td><center><?php echo $fetch['date_sample_received']?></center></td>
                                                                <td><center><?php echo $fetch['tb_culture_result']?></center></td>
                                                                <td><center><?php echo $fetch['remarks']?></center></td>
                                                                <td><center><?php echo $fetch['examined_by']?></center></td>
                                                                <td><center><?php echo $fetch['reviewed_by']?></center></td>
                                                                <td><center><?php echo $fetch['date_released']?></center></td>
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
                                    <div class="tab-pane" id="tab-eigth">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <a href="#new_tst<?php echo $f['patient_id'];?>" data-target="#new_tst<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span> TST Result</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <table id="laboratory_request" class="table table-hover">

                                                            <thead>
                                                                <tr>
                                                                    <th><center>Tuberculin Skin Testing Result</center></th>
                                                                    <th><center>Date Read</center></th>
                                                                    <th><center>Action</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                require 'config.php';
                                                                $query = $conn->query("SELECT * FROM `tst` WHERE `patient_id` = '$_GET[id]' ORDER BY `tst_id` DESC") or die(mysqli_error());
                                                                while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td><center><?php echo $fetch['result']?></center></td>
                                                                    <td><center><?php echo $fetch['date_read']?></center></td>
                                                                    <td><center>
                                                                        <a href="#updatetst<?php echo $fetch['tst_id'];?>" data-target="#updatetst<?php echo $fetch['tst_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit </a>
                                                                        </center></td>
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
                                    <div class="tab-pane" id="tab-ninth">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <a href="#new_cxr<?php echo $f['patient_id'];?>" data-target="#new_cxr<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-plus"></span> Chest X-Ray Findings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <table id="laboratory_request" class="table table-hover">

                                                            <thead>
                                                                <tr>
                                                                    <th><center>Chest X-ray Findings</center></th>
                                                                    <th><center>Date of Exam</center></th>
                                                                    <th><center>TBDC</center></th>
                                                                    <th><center>Action</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                require 'config.php';
                                                                $query = $conn->query("SELECT * FROM `cxr` WHERE `patient_id` = '$_GET[id]' ORDER BY `cxr_id` DESC") or die(mysqli_error());
                                                                while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td><center><?php echo $fetch['cxr_findings']?></center></td>
                                                                    <td><center><?php echo $fetch['date_of_exam']?></center></td>
                                                                    <td><center><?php echo $fetch['tbdc']?></center></td>
                                                                    <td><center>
                                                                        <a href="#updatecxr<?php echo $fetch['cxr_id'];?>" data-target="#updatecxr<?php echo $fetch['cxr_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit</a>
                                                                        </center></td>
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
                            <!-- END PAGE CONTENT -->
                        </div>

                        <!-- Edit TST-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `tst`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="updatetst<?php echo $fetch['tst_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-pencil-square-o"></span> Edit Tuberculin Skin Testing Result</h4>
                                    </div>
                                    <form role="form" id="jvalidate" class="form-horizontal" action="edit_query.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">TST Result</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="hidden" class="form-control" name="tst_id" value="<?php echo $fetch['tst_id'];?>" required>
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Result" type="text" class="form-control" name="result" value="<?php echo $fetch['result']?>" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Date Read</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Date Read" type="text" class="form-control datepicker" value="<?php echo $fetch['date_read']?>" name="date_read" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="edit_tst"><span class="fa fa-check"></span>Save</button>
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
                        <!-- End Edit TST-->

                        <!-- New CXR-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `cxr`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="updatecxr<?php echo $fetch['cxr_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-pencil-square-o"></span>Edit Chest X-ray Findings</h4>
                                    </div>
                                    <form role="form" id="jvalidate" class="form-horizontal" action="edit_query.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">CXR-Findings</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="hidden" class="form-control" name="cxr_id" value="<?php echo $fetch['cxr_id'];?>" required>
                                                                <input data-toggle="tooltip" data-placement="bottom" title="CXR-Findings" type="text" class="form-control" name="cxr_findings" value="<?php echo $fetch['cxr_findings']?>" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Date of Exam</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Date of Exam" type="text" class="form-control datepicker" value="<?php echo $fetch['date_of_exam']?>" name="date_of_exam" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">TBDC</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="TBDC" type="text" class="form-control" name="tbdc" value="<?php echo $fetch['tbdc']?>" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="edit_cxr"><span class="fa fa-check"></span>Save</button>
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
                        <!-- End New CXR-->


                        <!-- New Family Member-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="new_member<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> New Family Member</h4>
                                    </div>
                                    <form role="form" id="jvalidate" class="form-horizontal" action="actions/add_member.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Name" type="text" class="form-control" name="name" placeholder="Name" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Age</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Age" type="text" class="form-control" name="age" placeholder="Age" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Date Screened</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Date Screened" type="text" class="form-control datepicker" value="Date Screened" name="date_screened" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="add_member"><span class="fa fa-check"></span>Save</button>
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
                        <!-- End Family Member-->

                        <!-- New TST-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="new_tst<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> Tuberculin Skin Testing Result</h4>
                                    </div>
                                    <form role="form" id="jvalidate" class="form-horizontal" action="actions/add_tst.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Result" type="text" class="form-control" name="result" placeholder="TST Result" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Date Read</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Date Read" type="text" class="form-control datepicker" value="Date Read" name="date_read" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="add_tst"><span class="fa fa-check"></span>Save</button>
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
                        <!-- End TST-->

                        <!-- New CXR-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="new_cxr<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> Chest X-ray Findings</h4>
                                    </div>
                                    <form role="form" id="jvalidate" class="form-horizontal" action="actions/add_cxr.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">CXR-Findings</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                                <input data-toggle="tooltip" data-placement="bottom" title="CXR-Findings" type="text" class="form-control" name="cxr_findings" placeholder="CXR Findings" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">Date of Exam</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="Date of Exam" type="text" class="form-control datepicker" placeholder="Date of Exam" name="date_of_exam" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="col-md-3 col-xs-12 control-label">TBDC</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="TBDC" type="text" class="form-control" name="tbdc" placeholder="TBDC" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="add_cxr"><span class="fa fa-check"></span>Save</button>
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
                        <!-- End New CXR-->



                        <!-- Edit Family Member-->
                        <?php
                        require 'config.php';
                        $query = $conn->query("SELECT * FROM `family_member`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <div id="updatemember<?php echo $fetch['member_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-pencil-square-o"></span> Update Family Member</h4>
                                    </div>
                                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <div class="form-group ">
                                                    <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                    <div class="col-md-7 col-xs-12">
                                                        <input type="hidden" class="form-control" name="member_id" value="<?php echo $fetch['member_id'];?>" required>
                                                        <input data-toggle="tooltip" data-placement="bottom" title="Name" type="text" class="form-control" name="name" placeholder="Name"  value="<?php echo $fetch['name']?>" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="col-md-3 col-xs-12 control-label">Age</label>
                                                    <div class="col-md-7 col-xs-12">
                                                        <input data-toggle="tooltip" data-placement="bottom" title="Age" type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $fetch['age']?>" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="col-md-3 col-xs-12 control-label">Date Screened</label>
                                                    <div class="col-md-7 col-xs-12">
                                                        <input data-toggle="tooltip" data-placement="bottom" title="Date Screened" type="text" class="form-control datepicker" value="Date Screened" name="date_screened" value="<?php echo $fetch['date_screened']?>" required/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name ="edit_member"><span class="fa fa-check"></span>Save</button> 
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
                        <!-- End of Edit Family Member-->

                        <!-- -->


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

                    </div>
                </div>
            </div>
        </div>
        <?php require 'require/logout.php'?>
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