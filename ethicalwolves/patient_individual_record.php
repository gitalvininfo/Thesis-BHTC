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
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php include_once 'js/loadchart/weight.php'?>

    </head>

    <body>
        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Reports</li>
                    <li><a href="patient_record_report.php">Patient Record Reports</a></li>
                    <li class="active">Individual Record</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" class="form-horizontal" method="post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-file-text"></span> Patient Individual Record</strong></h3>
                                        <div class="btn-group pull-right">
                                            <div class="pull-left">
                                                <a href="patient_record_report.php" class="btn btn-default btn-md"><span class="fa fa-mail-reply"></span> Back</a>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-body">
                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $id = $fetch['patient_id'];
            $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="panel panel-default">
                                                                <div class="panel-body">                                    
                                                                    <div class="contact-info">
                                                                        <img src="assets/images/users/no-image.jpg" style="height:130px;width:130px;"> &nbsp;
                                                                        <h6 style="color:red"><center><strong><?php echo $fetch2['year']. "-". "5867". "-" .$fetch['patient_id']?></strong></center></h6>    
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
                                                    <h6>&nbsp;  &nbsp; A. Diagnostic Tests</h6>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>Direct Sputum Smear Microscopy</strong></h3>
                                                                </div>

                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">

                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Laboratory Number</center></th>
                                                                                <th><center>Examined By</center></th>
                                                                                <th><center>Date Examined</center></th>
                                                                                <th><center>Date Released</center></th>
                                                                                <th><center>Result</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
                                                                            $id = $fetch['patient_id'];
                                                                            while($fetch2 = $query->fetch_array()){
                                                                                $id = $fetch2['patient_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><center><?php echo $fetch2['laboratory_number']?></center></td>
                                                                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                                                                <td><center><?php echo $fetch2['date_examined']?></center></td>
                                                                                <td><center><?php echo $fetch2['date_released']?></center></td>
                                                                                <td><center><?php echo $fetch2['laboratory_diagnosis']?></center></td>
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
                                                    <hr style="margin:0px 0 5px 0;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>Xpert MTB/RIF</strong></h3>
                                                                </div>

                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Date Examined</center></th>
                                                                                <th><center>Laboratory Number</center></th>
                                                                                <th><center>Visual Appearance</center></th>
                                                                                <th><center>Reading</center></th>
                                                                                <th><center>Examined By</center></th>
                                                                                <th><center>Date Released</center></th>
                                                                                <th><center>Result</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `xpert_id` DESC") or die(mysqli_error());
                                                                            $id = $fetch['patient_id'];
                                                                            while($fetch2 = $query->fetch_array()){
                                                                                $id = $fetch2['patient_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><center><?php echo $fetch2['date_examined']?></center></td>
                                                                                <td><center><?php echo $fetch2['laboratory_number']?></center></td>
                                                                                <td><center><?php echo $fetch2['visual_appearance']?></center></td>
                                                                                <td><center><?php echo $fetch2['reading']?></center></td>
                                                                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                                                                <td><center><?php echo $fetch2['date_released']?></center></td>
                                                                                <td><center><?php echo $fetch2['result']?></center></td>
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
                                                    <hr style="margin:0px 0 5px 0;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>TB Culture</strong></h3>
                                                                </div>
                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Method</center></th>
                                                                                <th><center>TB Culture Laboratory</center></th>
                                                                                <th><center>TB Culture Result</center></th>
                                                                                <th><center>Remarks</center></th>
                                                                                <th><center>Examined By</center></th>
                                                                                <th><center>Date Released</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
                                                                            $id = $fetch['patient_id'];
                                                                            while($fetch2 = $query->fetch_array()){
                                                                                $id = $fetch2['patient_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><center><?php echo $fetch2['method']?></center></td>
                                                                                <td><center><?php echo $fetch2['tb_culture_laboratory']?></center></td>
                                                                                <td><center><?php echo $fetch2['tb_culture_result']?></center></td>
                                                                                <td><center><?php echo $fetch2['remarks']?></center></td>
                                                                                <td><center><?php echo $fetch2['examined_by']?></center></td>
                                                                                <td><center><?php echo $fetch2['date_released']?></center></td>
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
                                                    <hr style="margin:0px 0 5px 0;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>Tuberculin Skin Testing</strong></h3>
                                                                </div>
                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">

                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Date Released</center></th>
                                                                                <th><center>Result</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `tst` WHERE `patient_id` = '$_GET[id]' ORDER BY `tst_id` DESC") or die(mysqli_error());
                                                                            $id = $fetch['patient_id'];
                                                                            while($fetch2 = $query->fetch_array()){
                                                                                $id = $fetch2['patient_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><center><?php echo $fetch2['date_read']?></center></td>
                                                                                <td><center><?php echo $fetch2['result']?></center></td>
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
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>Chest X-Ray</strong></h3>
                                                                </div>

                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Chest X-ray Findings</center></th>
                                                                                <th><center>Date of Exam</center></th>
                                                                                <th><center>TBDC</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                                                            $query = $conn->query("SELECT * FROM `cxr` WHERE `patient_id` = '$_GET[id]' ORDER BY `cxr_id` DESC") or die(mysqli_error());
                                                                            $id = $fetch['patient_id'];
                                                                            while($fetch2 = $query->fetch_array()){
                                                                                $id = $fetch2['patient_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><center><?php echo $fetch2['cxr_findings']?></center></td>
                                                                                <td><center><?php echo $fetch2['date_of_exam']?></center></td>
                                                                                <td><center><?php echo $fetch2['tbdc']?></center></td>
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
                                                    <hr style="margin:0px 0 5px 0;">
                                                    <h6>&nbsp;  &nbsp; B. Treatment</h6>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"> <strong>Clinical Findings</strong></h3>
                                                                </div>
                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">

                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Criteria</center></th>
                                                                                <th><center>Frequency of occurences during treatment</center></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            require 'config.php';
                                                                            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                                                            $f = $q->fetch_array();
                                                                            $q1 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q1` = 'Yes'") or die (mysqli_error());
                                                                            $f1 = $q1->fetch_array();
                                                                            $q2 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q2` = 'Yes'") or die (mysqli_error());
                                                                            $f2 = $q2->fetch_array();
                                                                            $q3 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q3` = 'Yes'") or die (mysqli_error());
                                                                            $f3 = $q3->fetch_array();
                                                                            $q4 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q4` = 'Yes'") or die (mysqli_error());
                                                                            $f4 = $q4->fetch_array();
                                                                            $q5 = $conn->query("SELECT COUNT(*) as total FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]' && `q5` = 'Yes'") or die (mysqli_error());
                                                                            $f5 = $q5->fetch_array();
                                                                            ?>
                                                                            <tr>
                                                                                <td> Unexplained fever greater than 2 weeks</td>
                                                                                <td><center><?php echo $f1['total']?></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Unexplained cough or wheezing greater than 2 weeks</td>
                                                                                <td><center><?php echo $f2['total']?></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Unimproved general well-being</td>
                                                                                <td><center><?php echo $f3['total']?></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Poor Appetite</td>
                                                                                <td><center><?php echo $f4['total']?></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Positive PE findings for Extra-pulmonary TB</td>
                                                                                <td><center><?php echo $f5['total']?></center></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><strong>Weight Progress</strong></h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div id="weight" style="height: 200px; width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>

</html>