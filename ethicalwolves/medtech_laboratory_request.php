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
                    <li class="active">Laboratory Request</li>
                </ul>
                <!-- END BREADCRUMB -->      

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-flask"></span> Laboratory Requests</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                        </div>
                                    </div>  
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 410px;">
                                    <div class="panel-body">
                                        <table id="lab_request" class="table datatable">
                                            <thead> 
                                                <tr class="info">
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Age</center></th>
                                                    <th><center>Gender</center></th>
                                                    <th><center>Birthdate</center></th>
                                                    <th><center>Contact Number</center></th>
                                                    <th><center>Address</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
                    $id = $fetch['patient_id'];
                    $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` where `patient_id` = '$id' && `status` = 'Pending'") or die(mysqli_error());
                    $f = $q->fetch_array();
                    $q2 = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                    $f2 = $q2->fetch_array();

                                                ?>                                      
                                                <tr>
                                                    <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                    <td><center><?php echo $fetch['age']?></center></td>
                                                    <td><center><?php echo $fetch['gender']?></center></td>
                                                    <td><center><?php echo $fetch['birthdate']?></center></td>
                                                    <td><center><?php echo $fetch['contact_number']?></center></td>
                                                    <td><center><?php echo $fetch['address']?></center></td>
                                                    <td>
                                                        <center>
                                                            <a href="laboratory_request_pending.php?id=<?php echo $fetch['patient_id']?>" class="btn btn-sm btn-info">Request <span class = "badge"><?php echo $f['total']?></span></a>
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
  
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
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






