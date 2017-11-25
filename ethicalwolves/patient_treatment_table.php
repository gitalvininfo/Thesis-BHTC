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
                    <li class="active">Patient Individual Treatment</li>
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
                                                <div class="panel panel-info">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">

                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Address</center></th>
                                                                        <th><center>Contact No.</center></th>
                                                                        <th><center>Treatment Partner</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` where `status` = 'Registered' ORDER BY `patient_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                if($fetch['treatment_partner'] == 'Done'){
                    echo 
                        "<tr>
                                                            <td><center><strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']." </center></td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td><center> <a disabled='disabled' class = 'btn btn-info btn-sm' href='treatment_details.php?id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-user-md'></span></a>  </center></td>
                                                            <td><center> 
                                                            <a class = 'btn btn-info btn-sm' href='patient_treatment.php? id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-search'></span>View Treatment</a>
                                                            </center></td>
                                                        </tr>";

                }
                else
                {
                    echo
                        "<tr>
                                                            <td><center><strong>".$fetch['patient_name']." </strong></center></td>
                                                            <td><center> ".$fetch['gender']." </center></td>
                                                            <td><center> ".$fetch['birthdate']." </center></td>
                                                            <td><center> ".$fetch['address']." </center></td>
                                                            <td><center> ".$fetch['contact_number']." </center></td>
                                                            <td><center> <a data-toggle='tooltip' data-placement='left' title='Treatment Partner' class = 'btn btn-info btn-sm' href='treatment_details.php?id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-user-md'></span></a>  </center></td>
                                                            <td><center> 
                                                            <a class = 'btn btn-info btn-sm' href='patient_treatment.php? id=".$fetch['patient_id']."&patient_name=".$fetch['patient_name']."'><span class='fa fa-search'></span>View Treatment</a>
                                                            </center></td>
                                                        </tr>";
                }
            }
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
                                                <div class="panel panel-info">

                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">
                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Home Address</center></th>
                                                                        <th><center>Emergency Number</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch['name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center><?php echo $fetch['emergency_no']?></center></td>
                                                                        <td>
                                                                            <center>
                                                                                <a href="patient_ipt_treatment.php?id=<?php echo $fetch['patient_id']?>&name=<?php echo $fetch['name']?>" class="btn btn-sm btn-info"> <span class="fa fa-search"></span>View Treatment</a>
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






