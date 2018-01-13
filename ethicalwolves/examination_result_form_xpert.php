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
                                    <h3 class="panel-title"><strong>Xpert MTB/RIF</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-body scroll" style="height:393px;">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Examined</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <input type="text" class="form-control datepicker" name="date_examined" placeholder="Date Examined" data-toggle="tooltip" data-placement="top" title="Date Examined" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Laboratory Number</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <input type="number" class="form-control" name="laboratory_number" placeholder="Laboratory Number" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Visual Appearance</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="visual_appearance" required >
                                                                <option value = "">Select...</option>
                                                                <option value = "Salivary">Salivary</option>
                                                                <option value = "Muco-Purulent">Muco-Purulent</option>
                                                                <option value = "Blood-Stained">Blood-Stained</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Reading</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <input type="text" class="form-control" name="reading" placeholder="Reading" data-toggle="tooltip" data-placement="top" title="Reading" required/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Examined By</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Released</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Result</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" data-live-search="true" name="result" required >
                                                                <option value = "">Select...</option>
                                                                <option value = "T">[T] - MTB detected, Rifampicin resistance not detected</option>
                                                                <option value = "RR">[RR] - MTB detected, Rifampicin resistance detected</option>
                                                                <option value = "TI">[TI] - MTB detected, Rifampicin resistance indeterminate</option>
                                                                <option value = "N">[N] - MTB not detected</option>
                                                                <option value = "I">[I] - Invalid / No Result</option>
                                                            </select>
                                                        </div>
                                                    </div> <hr>
                                                    <div class="tab-footer">
                                                        <button type="submit" name="add_gene_expert" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_gene_expert.php' ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TABS -->
                            </div>
                            <!-- END PAGE CONTENT -->
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