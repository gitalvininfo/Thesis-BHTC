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
                    <li class="active">Patient Record Report</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="jvalidate" role="form" class="form-horizontal" method="post">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-file-text"></span> Patient Individual Record</strong></h3>
                                        <div class="btn-group pull-right">
                                            <div class="pull-left">
                                                <button class="btn btn-default btn-md" onclick="printContent('print')"><span class="fa fa-print"></span> Print Preview</button>
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
                                                            <h6><strong>Contact Person: </strong><?php echo $fetch['contact_person']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h6>
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <hr style="margin:0px 0 5px 0;">
                                                            <h6><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?></h6>
                                                        </div>
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-stethoscope"></span> <strong>Direct Sputum Smear Microscopy</strong></h3>
                                                                </div>

                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">

                                                                        <thead>
                                                                            <tr>
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
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-group"></span> <strong>Household Members of <?php echo $fetch['patient_name']?></strong></h3>
                                                                </div>
                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">

                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Name</center></th>
                                                                                <th><center>Age</center></th>
                                                                                <th><center>Date Screened</center></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-stethoscope"></span> <strong>Xpert MTB/RIF</strong></h3>
                                                                </div>

                                                                <div class="panel-body panel-body-table">
                                                                    <table id="laboratory_request" class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><center>Date Examined</center></th>
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
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-stethoscope"></span> <strong>Tuberculin Skin Testing</strong></h3>
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
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-stethoscope"></span> <strong>Chest X-Ray</strong></h3>
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
                                                        <div class="col-md-6">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title"><span class="fa fa-stethoscope"></span> <strong>TB Culture</strong></h3>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
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