<?php
require 'logincheck.php';
require 'config.php';

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
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Reports</li>
                    <li class="active"><strong><mark>Follow-up Patients</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php
    $month = date("F Y", strtotime("+8 HOURS"));
                                    ?>
									<h3 class="panel-title"><strong>Patients for Follow-up this month of <?php echo $month?></strong></h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr>
                                                    <th><center>TB Case No</center></th>
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Source of Patient</center></th>
                                                    <th><center>Registration Group</center></th>
                                                    <th><center>Follow-up Date</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $month = date("M", strtotime("+8 HOURS"));
                                        require 'require/masterfile_patient_select_year.php';
                                        require 'config.php';
                                        $query = $conn->query("SELECT * FROM `follow_up`, `patient`, `registration` where registration.patient_id = patient.patient_id && patient.patient_id = follow_up.patient_id && DATE_FORMAT(follow_up_date, '%b') = '$month' group by patient_name") or die(mysqli_error());
                                        while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><center><mark><?php echo $fetch['year']."080".$fetch['tb_case_no']?></mark></center></td>
                                                    <td><center><mark><?php echo $fetch['patient_name']?></mark></center></td>
                                                    <td><center><?php echo $fetch['source_of_patient']?></center></td>
                                                    <td><center><?php echo $fetch['registration_group']?></center></td>
                                                    <td><center><span style="color:red"><strong><?php echo $fetch['follow_up_date']?></strong></span></center></td>
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
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript">
            var medicine = $("#medicine").validate({
                ignore: [],
                rules: {
                    medicine_name: {
                        required: true
                    },
                    medicine_description: {
                        required: true
                    }
                }
            });
        </script>
    </body>
</html>






