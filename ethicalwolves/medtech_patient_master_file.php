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
    <body class="page-container-boxed">
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/medtech_sidebar.php'?>
            <div class="page-content">
                <?php require 'require/medtech_header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><strong><mark>Laboratory Results</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Laboratory Results</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr>
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
                                                    <td><center><mark><?php echo $fetch2['year']."080".$fetch2['tb_case_no']?></mark></center></td>
                                                    <td><center><mark><?php echo $fetch['patient_name']?></mark></center></td>
                                                    <td><center><?php echo $fetch2['registration_date']?></center></td>
                                                    <td><center><?php echo $fetch2['source_of_patient']?></center></td>
                                                    <td><center><?php echo $fetch2['registration_group']?></center></td>
                                                    <td><center>
                                                        <a href="medtech_patient_overview.php?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="left" title="View Record">View</a></center></td>	
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
        <?php require 'require/logout.php'?>
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






