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
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
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
                    <li><a href="medtech_laboratory_request.php">Laboratory Request</a></li>
                    <li class="active"><strong><mark>Examination Result Form</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                    $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                                    $f = $q->fetch_array();
                                    ?>
                                    <h3 class="panel-title"><strong>Direct Sputum Smear Miscroscopy Result</strong></h3>
                                </div>
                                <form role="form" id= "dssm" class="form-horizontal" method="post" enctype="multi-part/form-data" onsubmit="return confirm('Are you sure you want to add this DSSM result?');">
                                    <div class="panel-body" >
                                        <h5 class="push-up-1">Date Examined</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="text" class="form-control datepicker" name="date_examined" placeholder="Date Examined" data-toggle="tooltip" data-placement="top" title="Date Examined" required>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Laboratory Number</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="number" class="form-control" name="laboratory_number" placeholder=" Laboratory Number" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Specimen 1 Visual Appearance</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <select class="form-control select" name="visual_appearance" required >
                                                    <option value = "">Select...</option>
                                                    <option value = "Salivary">Salivary</option>
                                                    <option value = "Muco-Purulent">Muco-Purulent</option>
                                                    <option value = "Blood-Stained">Blood-Stained</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Specimen 2 Visual Appearance</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <select class="form-control select" name="visual_appearance2" required >
                                                    <option value = "">Select...</option>
                                                    <option value = "Salivary">Salivary</option>
                                                    <option value = "Muco-Purulent">Muco-Purulent</option>
                                                    <option value = "Blood-Stained">Blood-Stained</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Specimen 1 Reading</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="text" class="form-control" name="reading" placeholder="Specimen 1 Reading" data-toggle="tooltip" data-placement="top" title="Specimen 1 Reading" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Specimen 2 Reading</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="text" class="form-control" name="reading2" placeholder="Specimen 2 Reading" data-toggle="tooltip" data-placement="top" title="Specimen 2 Reading" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Laboratory Diagnosis</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <select class="form-control select" name="laboratory_diagnosis" required >
                                                    <option value = "">Select...</option>
                                                    <option value = "Positive (+)">Positive</option>
                                                    <option value = "Negative (0)">Negative</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Examined By</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                            </div>
                                        </div>
                                        <h5 class="push-up-1">Examined By</h5>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/>
                                            </div>
                                        </div>

                                        <div class="panel-footer">
                                            <button type="submit" name="add_dssm" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                        </div>
                                        <?php require_once 'add_dssm.php'?>
                                    </div>
                                </form>
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
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>