<?php
require 'logincheck.php';
require 'config.php';
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
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Transaction</li>
                    <li class="active"><strong><mark>Follow-up Visit</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">TB Case</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">IPT Case</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr >
                                                                        <th><center>TB Case Number</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Registration Group</center></th>
                                                                        <th><center>Bacteriological Status</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `patient`, `registration` WHERE patient.patient_id = registration.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                                    ?>                                      
                                                                    <tr>
                                                                        <td><center><mark><?php echo $fetch['year']."080".$fetch['tb_case_no']?></mark></center></td>
                                                                        <td><center><mark><?php echo $fetch['patient_name']?></mark></center></td>
                                                                        <td><center><?php echo $fetch['registration_date']?></center></td>
                                                                        <td><center><?php echo $fetch['source_of_patient']?></center></td>
                                                                        <td><center><?php echo $fetch['registration_group']?></center></td>
                                                                        <td><center>
                                                                            <a href="#follow_up<?php echo $fetch['patient_id'];?>" data-target="#follow_up<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-md">Follow-up Visit</a>
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
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr >
                                                                        <th><center>IPT No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Emergency No</center></th>
                                                                        <th><center>Address</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` WHERE `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    while($fetch2 = $query->fetch_array()){
                                                                        $id = $fetch2['patient_id'];
                                                                        $q = $conn->query("SELECT * FROM `registration_ipt` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                                                        $f = $q->fetch_array();

                                                                    ?> 
                                                                    <tr>
                                                                        <td><center><?php echo $f['year']. "" .$f['ipt_no']?></center></td>
                                                                        <td><center><?php echo $fetch2['name']?></center></td>
                                                                        <td><center><?php echo $fetch2['age']?></center></td>		
                                                                        <td><center><?php echo $fetch2['gender']?></center></td>				
                                                                        <td><center><?php echo $fetch2['birthdate']?></center></td>
                                                                        <td><center><?php echo $fetch2['emergency_no']?></center></td>
                                                                        <td><center><?php echo $fetch2['address']?></center></td>
                                                                        <td>
                                                                            <center>
                                                                                <a href="#follow_up_ipt<?php echo $fetch2['patient_id'];?>" data-target="#follow_up_ipt<?php echo $fetch2['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-md">Follow-up Visit</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <?php require 'require/logout.php'?>
        <?php require 'require/modals/add_follow_up.php'?>
        <?php require 'require/modals/add_follow_up_ipt.php'?>
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
    </body>
</html>