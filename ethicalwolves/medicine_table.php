<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['new_medicine'])){
    $medicine_name = $_POST['medicine_name'];
    $medicine_description = $_POST['medicine_description'];
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_name` = '$medicine_name'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Medicine name already exist!')</script>";
        echo "<script>document.location='medication_dispensation.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `medicine` VALUES('', '$medicine_name', '$medicine_description', '')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new medicine!');</script>";
        echo "<script>document.location='medicine_table.php'</script>";  
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
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
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/project_logo.png" alt="John Doe" />
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
                                    ?>
                                </div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>       
                        <ul>
                            <li><a href="medicine_table.php"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
                            <li><a href="master_file_patient.php"><span class="fa fa-group"></span><span class="xn-text">Patient Master File</span></a></li>
                            <li><a href="master_file_medtech.php"><span class="fa fa-user-md"></span><span class="xn-text">Medical Technologist</span></a></li>
                        </ul>
                    </li> 

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
                        <ul>
                            <li> <a href="patient_examination_schedule_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Examination</span></a> </li>
                            <li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                            <li> <a href="registration_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Registration</span></a> </li>
                            <li> <a href="patient_treatment_table.php"><span class="fa fa-user-md"></span> <span class="xn-text">Treatment</span></a> </li>
                            <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li> <a href="patient_certification_table.php"><span class="fa fa-book"></span> <span class="xn-text">Certification</span></a> </li>
                            <li><a href="examination_reports_overview.php"><span class="fa fa-file-text"></span><span class="xn-text">Examination Report</span></a></li>
                            <li><a href="reports.php"><span class="fa fa-file-text"></span><span class="xn-text">TB Cases Report</span></a></li>

                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>       
                        <ul>
                            <li><a href="change_password.php"><span class="fa fa-key"></span><span class="xn-text">Update Profile</span></a></li>
                            <li><a href="system_backup.php?id=<?php echo $find['user_id']?>&username=<?php echo $find['username']?>"><span class="fa fa-cloud-download"></span><span class="xn-text">Download Database</span></a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active">New Medicine</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> Medicine List <strong></strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#new_medicine"><span class="fa fa-plus"></span>New Medicine </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="medication_dispensation" class="table datatable">
                                            <thead> 
                                                <tr>
                                                    <th><center>Medicine ID</center></th>
                                                    <th><center>Medicine Name</center></th>
                                                    <th><center>Medicine Description</center></th>
                                                    <th><center>Running Balance</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                   $query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
                                   while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['medicine_id']?></center></td>
                                                    <td><center><?php echo $fetch['medicine_name']?></center></td>
                                                    <td><center><?php echo $fetch['medicine_description']?></center></td>
                                                    <td><center><strong><?php echo $fetch['running_balance']?></strong></center></td>
                                                    <td><center>
                                                        <a href="#updatedata<?php echo $fetch['medicine_id'];?>" data-target="#updatedata<?php echo $fetch['medicine_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
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
                                <!-- END TABS -->
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
        <div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-plus"></span> New Medicine</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="medicine_table.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Name" type="text" class="form-control" name="medicine_name" 
                                                   placeholder="Medicine Name"/>
                                        </div>                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Description" type="text" class="form-control" name="medicine_description" 
                                                   placeholder="Medicine Description"/>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="new_medicine"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Medicine-->
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updatedata<?php echo $fetch['medicine_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="height:auto">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-plus"></span> New Transaction</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="hidden" class="form-control" name="medicine_id" value="<?php echo $fetch['medicine_id'];?>" required>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Name" type="text" class="form-control" name="medicine_name" 
                                                   value="<?php echo $fetch['medicine_name']?>"/>
                                        </div>                                            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Description" type="text" class="form-control" name="medicine_description" 
                                                   value="<?php echo $fetch['medicine_description']?>"/>
                                        </div>                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name ="edit_medicine"><span class="fa fa-check"></span>Save</button> 
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
        <!-- End of Edit Medicine-->


        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
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
        <!-- END PRELOADS -->                 

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
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






