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
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:1010px;
                height:2000px;
                margin:10px 0px 15px 10px;
                border:0.5px solid #8f8888;
            }
        </style>
    </head>
    <body class="page-container-boxed">
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/medtech_sidebar.php'?>
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
                    <li class="xn-icon-button pull-right">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                        $f = $q->fetch_array();
                        ?>
                        <a href="#"><span class="fa fa-bell-o"></span></a>
                        <div class="informer informer-danger">
                            <?php echo $f['total']?>
                        </div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-flask"></span> Laboratory Requests</h3>
                                <div class="pull-right">
                                    <span class="label label-danger"><?php echo $f['total']?></span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php 
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                            $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
                            while($f = $q->fetch_array()){
                                ?>
                                <a href="laboratory_request_pending.php?id=<?php echo $f['patient_id']?>" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">Patient ID: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
                                    <p>
                                        <?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?>
                                    </p>
                                </a>
                                <?php
                            }
                            $conn->close();
                                ?>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="medtech_laboratory_request.php">Show all laboratory requests</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard_medtech.php">Home</a></li>
                    <li class="active">Examination Reports</li>
                </ul>
                <!-- END BREADCRUMB -->      

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="btn-group pull-left">
                                        <div class="pull-left">
                                            <select class="validate[required] select" id="formStatus" name="reason_for_examination" required >
                                                <option value="">Examination Report By:</option>
                                                <option value="Diagnostic">Overview</option>
                                                <option value="Baseline">Baseline</option>
                                                <option value="Follow-up">Follow-up</option>
                                            </select>
                                            <button class="btn btn-success btn-sm"><span class="fa fa-file-text"></span> Apply </button>
                                        </div>
                                    </div>  
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="fa fa-print"></span> Print Content</button>
                                        </div>
                                    </div>  
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                                    <div id="print">
                                        <div class="panel-body">
                                            <?php
                                            $date = date("Y", strtotime("+ 8 HOURS"));
                                            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` where `year` = '$date'") or die(mysqli_error());
                                            $fetch1 = $query1->fetch_array();
                                            $query2 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Positive'") or die(mysqli_error());
                                            $fetch2 = $query2->fetch_array();
                                            $query3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New'") or die(mysqli_error());
                                            $fetch3 = $query3->fetch_array();
                                            $query4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse'") or die(mysqli_error());
                                            $fetch4 = $query4->fetch_array();
                                            $query5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'PTOU'") or die(mysqli_error());
                                            $fetch5 = $query5->fetch_array();
                                            $query6 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Positive'  ") or die(mysqli_error());
                                            $fetch6 = $query6->fetch_array();
                                            $query7 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'RR' && `year` = '$date'") or die(mysqli_error());
                                            $fetch7 = $query7->fetch_array();
                                            $query8 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'T' && `year` = '$date' ") or die(mysqli_error());
                                            $fetch8 = $query8->fetch_array();
                                            $query9 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'TI' && `year` = '$date' ") or die(mysqli_error());
                                            $fetch9 = $query9->fetch_array();
                                            $query10 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'I' && `year` = '$date' ") or die(mysqli_error());
                                            $fetch10 = $query10->fetch_array();
                                            $query11 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'N' && `year` = '$date' ") or die(mysqli_error());
                                            $fetch11 = $query11->fetch_array();
                                            ?>
                                            <center><img style="height:50px;width:50px;" src="assets/images/bc.png"> <br>
                                                <p>Bacolod City Health TB DOTS Center</p>
                                                <p><small>BBB St., Bacolod City, Philippines <br>
                                                    (034) 434 4098 <br>
                                                    cho_bacolod_city@yahoo.com</small></p>        <br> </center>                   

                                            <h6 style="font-size:15px;">Examination Report</h6>   <br>
                                            <h6 style="font-size:13px;color:#dc4141">A. Case Finding</h6>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Laboratory Activities</th>
                                                        <th><center>DSSM</center></th>
                                                        <th><center>New</center></th>
                                                        <th><center>Relapse</center></th>
                                                        <th><center>Previously Treated</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>1. No. of Examined</strong></td>
                                                        <td><center><?php echo $fetch1['total']?></center></td>
                                                        <td><center><?php echo $fetch3['total']?></center></td>
                                                        <td><center><?php echo $fetch4['total']?></center></td>
                                                        <td><center><?php echo $fetch5['total']?></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>2. No. with (+) result</strong></td>
                                                        <td><center><?php echo $fetch2['total']?></center></td>
                                                        <td><center><?php echo $fetch6['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>3. No. with Rifampicin Resistance [RR]</strong></td>
                                                        <td bgcolor="#b8b2b2"><center> </center></td>
                                                        <td><center><?php echo $fetch7['total'] + $fetch3['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr >
                                                        <td><strong>4. No. with Rifampicin not Detected [T]</strong></td>
                                                        <td bgcolor="#b8b2b2"></td>
                                                        <td><center><?php echo $fetch8['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>5. No. with Rifampicin Resistance Undetermine [TI]</strong></td>
                                                        <td bgcolor="#b8b2b2"></td>
                                                        <td><center><?php echo $fetch9['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>6. No. with error or invalid result [I]</strong></td>
                                                        <td bgcolor="#b8b2b2"></td>
                                                        <td><center><?php echo $fetch10['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>7. No. with MTB not Detected [N]</strong></td>
                                                        <td bgcolor="#b8b2b2"></td>
                                                        <td><center><?php echo $fetch11['total']?></center></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px; color:#dc4141">B. Treatment Follow-up (DSSM Only)</h6>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Laboratory Activities</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>1. No. of Follow-up cases examined</strong></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
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
        <!-- END MESSAGE BOX-->        

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-success btn-lg">Yes</a>
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
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>






