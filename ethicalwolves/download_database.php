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
                    <div class="content-frame">                                    
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="form-group">
                                    <a class="btn btn-info mb-control" data-box="#message-box-success"><span class="fa fa-cloud-download"></span>Download Database</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-database"></span> History Log - Database Backup</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 474px;">
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead> 
                                                <tr class="info">
                                                    <th><center>Remarks</center></th>
                                                    <th><center>Date and Time</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                $query = $conn->query("SELECT * FROM `backup` ORDER BY `backup_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><center><?php echo $fetch['remarks']?></center></td>
                                                    <td><center><?php echo $fetch['date']?></center></td>
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
        <div class="message-box message-box-info animated fadeIn" data-sound="alert" id="message-box-success">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info-circle"></span> Backup Database</div>
                    <div class="mb-content">
                        <p>You are about to download database of BHTC-PMIS.</p>
                    </div>
                    <div class="mb-footer">
                        <a href="export/export.php" class="btn btn-default btn-lg pull-right"><span class="fa fa-cloud-download"></span>Download Database</a>
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






