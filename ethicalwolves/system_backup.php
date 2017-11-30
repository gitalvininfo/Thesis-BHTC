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

            <!-- START PAGE SIDEBAR -->
            <div class="page-container">
                <?php require 'require/sidebar.php'?>
                <div class="page-content">
                <?php require 'require/header.php'?>
                    <ul class="breadcrumb push-down-0">
                        <li><a href="#">Home</a></li>
                        <li class="active">System Maintenance</li>
                    </ul>
                    <!-- END BREADCRUMB -->                

                    <!-- START CONTENT FRAME -->
                    <div class="content-frame">                                    
                        <!-- START CONTENT FRAME TOP -->
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="form-group">
                                    <button type="button" class="btn btn-info mb-control" data-box="#message-box-success"><span class="fa fa-cloud-download"></span>Download Database</button>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT FRAME TOP -->

                        <!-- START CONTENT FRAME RIGHT -->
                        <div class="content-frame">
                            <div class="list-group list-group-contacts border-bottom push-down-10">
                                <a href="#" class="list-group-item">                                 
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Dmitry Ivaniuk">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                                
                                <a href="#" class="list-group-item">                                    
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Nadia Ali">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                                                                
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Brad Pitt">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>                   
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Darth Vader">
                                    <span class="contacts-title">Admin Alvin</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Kim Kardashian">
                                    <span class="contacts-title"> Admin Alvin </span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>
                                <a href="#" class="list-group-item">         
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Jason Statham">
                                    <span class="contacts-title">Elmer Haro</span>
                                    <span class="date" style="float:right;">08:33 | 09-26-2017</span>
                                    <p>Successfully downloaded database</p>
                                </a>                            
                            </div>
                        </div>
                        <!-- END CONTENT FRAME RIGHT -->

                    </div>     
                </div>
                <!-- END PAGE CONTENT FRAME -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <div class="message-box message-box-info animated fadeIn" data-sound="alert" id="message-box-success">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info-circle"></span> Backup Database</div>
                    <div class="mb-content">
                        <p>You are about to download database of BHTC-PMIS.</p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close"><span class="fa fa-cloud-download"></span> Download</button>
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
        <script type="text/javascript" src="js/plugins/fileinput/fileinput.min.js"></script>        
        <script type="text/javascript" src="js/plugins/filetree/jqueryFileTree.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>






