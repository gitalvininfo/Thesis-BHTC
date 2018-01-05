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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
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
                    <li class="#">Transaction</li>
                    <li class="active"><strong><mark>Treatment</mark></strong></li>
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
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">

                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>TB Case No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Registration Date</center></th>
                                                                        <th><center>Source of Patient</center></th>
                                                                        <th><center>Registration Group</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $id = $fetch['patient_id'];
                $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                $fetch2 = $query2->fetch_array();
                                                                    ?>                                      
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch2['year']."080".$fetch2['tb_case_no']?></strong></center></td>
                                                                        <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch2['registration_date']?></center></td>
                                                                        <td><center><?php echo $fetch2['source_of_patient']?></center></td>
                                                                        <td><center><?php echo $fetch2['registration_group']?></center></td>
                                                                        <td><center>
                                                                            <a href="patient_treatment.php?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-sm btn-info"  data-toggle="tooltip" data-placement="left" title="View Record"><span class="fa fa-search"></span>View</a></center></td>	
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

                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">
                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>IPT No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Date IPT Started</center></th>
                                                                        <th><center>Diagnosis</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    require 'config.php';
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` WHERE `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                        $id = $fetch['patient_id'];
                                                                        $query2 = $conn->query("SELECT * FROM `registration_ipt` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                                                        $fetch2 = $query2->fetch_array();
                                                                    ?>                                      
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch2['year']."".$fetch2['ipt_no']?></strong></center></td>
                                                                        <td><center><strong><?php echo $fetch['name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch2['date_ipt_started']?></center></td>
                                                                        <td><center><?php echo $fetch2['diagnosis']?></center></td>
                                                                        <td><center>
                                                                            <a href="patient_ipt_treatment.php?id=<?php echo $fetch['patient_id']?>&name=<?php echo $fetch['name']?>" class="btn btn-sm btn-info"  data-toggle="tooltip" data-placement="left" title="View Record"><span class="fa fa-search"></span>View</a></center></td>	
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
        <!-- END MESSAGE BOX-->


        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






