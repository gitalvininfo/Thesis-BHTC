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
        $id = $_SESSION['user_id'];
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">System Maintenance</a></li>
                    <li class="active"><strong><mark>Update Profile</mark></strong></li>
                </ul>

                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
            $q = $conn->query("SELECT * FROM `user` where `user_id` = '$id'") or die(mysqli_error());
            $f = $q->fetch_array();
            $id=$_SESSION['user_id'];
                            ?>
                            <form role="form" class="form-horizontal" action="update_profile.php" method="post" onsubmit="return confirm('Are you sure you want to your profile?');" onsubmit="return myFunction()">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> Update My Account</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Name" type="text" class="form-control" name="name" value="<?php echo $f['firstname'];?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Username</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" value="<?php echo $f['username'];?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">New Password</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="New Password" type="text" class="form-control" id="password" name="password"/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Confirm Password</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Confirm Password" type="text" class="form-control" id="cfmPassword" name="newpassword" />
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Old Password</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Old Password" type="text" class="form-control" name="passwordold" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-info pull-right"> <span class="fa fa-check"> Change Password</span></button>
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

        <script>
            function myFunction() {
                var pass1 = document.getElementById("password").value;
                var pass2 = document.getElementById("cfmPassword").value;
                var ok = true;
                if (pass1 != pass2) {
                    alert("New Passwords Do not match...");
                    document.getElementById("password").style.borderColor = "#E34234";
                    document.getElementById("cfmPassword").style.borderColor = "#E34234";
                    ok = false;
                }
                return ok;
            }
        </script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>

    </body>

</html>