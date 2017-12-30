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
                    <li class="#">Registration</li>
                </ul>
                <div class="page-content-wrap">
                    <!-- Export Code -->
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
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_patient"><span class="fa fa-user-plus"></span> New Patient </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 410px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr class="info">
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Contact Number</center></th>
                                                                        <th><center>Home Address</center></th>
                                                                        <th>
                                                                            <center>Action</center>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` where `status` = 'Unregister' ORDER BY `patient_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['age']?></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center><?php echo $fetch['contact_number']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center>
                                                                            <a href="#registerpatient<?php echo $fetch['patient_id'];?>" data-target="#registerpatient<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-check"></span>Register</a>
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
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_ipt"><span class="fa fa-user-plus"></span> New Patient </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 410px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr class="info">
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Address</center></th>
                                                                        <th><center>Emergency Number</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th>
                                                                            <center>Action</center>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` where `status` = 'Unregister' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch['name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['age']?></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center><?php echo $fetch['emergency_no']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center>
                                                                            <a href="#registeript<?php echo $fetch['patient_id'];?>" data-target="#registeript<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-check"></span>Register</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php require 'require/modals/new_tb_case.php'?>
        <?php require 'require/modals/register_tb_case.php'?>
        <?php require 'require/modals/new_ipt.php'?>
        <?php require 'require/modals/register_ipt_case.php'?>
        <?php require 'require/logout.php'?>

        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>       
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>   
        <script type="text/javascript">
            var tbcase = $("#tbcase").validate({
                ignore: [],
                rules: {
                    age: {
                        required: true,
                        min: 6,
                        max: 100,
                        maxlength: 3
                    },
                    barangay: {
                        required: true
                    },
                    birthdate: {
                        required: true,
                        date: true
                    },
                    height: {
                        required: true,
                        maxlength: 3
                    },
                    contact_person: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    gender: {
                        required: true
                    }

                }
            });
        </script>
        <script type="text/javascript">
            var ipt = $("#ipt").validate({
                ignore: [],
                rules: {
                    age: {
                        required: true,
                        min: 0,
                        max: 5
                    },
                    birthdate: {
                        required: true,
                        date: true
                    },
                    gender: {
                        required: true
                    },
                    address: {
                        required: true
                    }
                }
            });
        </script>
    </body>
</html>