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
                                    <h3 class="panel-title"><strong>Drug Susceptible Testing</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data" onsubmit="return confirm('Are you sure you want to add this DST result?');">
                                        <div class="col-md-4">
                                            <h5 class="push-up-1"><mark>TB Culture Laboratory</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="tb_culture_laboratory" data-toggle="tooltip" data-placement="bottom" title="TB Culture Laboratory" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>DST Laboratory</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="dst_laboratory" data-toggle="tooltip" data-placement="bottom" title="DST Laboratory" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Date Collected</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control datepicker" name="date_collected" data-toggle="tooltip" data-placement="bottom" title="Date Collected YYYY-MM-DD" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Date Received</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control datepicker" name="date_received" data-toggle="tooltip" data-placement="bottom" title="Date Received YYYY-MM-DD" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Method</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="method" data-toggle="tooltip" data-placement="bottom" title="Method" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Examined By</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="examined_by" data-toggle="tooltip" data-placement="bottom" title="Examined By" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Remarks</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="remarks" data-toggle="tooltip" data-placement="bottom" title="Remarks" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Reviewed By</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control" name="reviewed_by" data-toggle="tooltip" data-placement="bottom" title="Reviewed By" required/>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Date Released</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <input type="text" class="form-control datepicker" name="date_released" data-toggle="tooltip" data-placement="bottom" title="Date Released YYYY-MM-DD" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="push-up-1"><mark>Isoniazid</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="isoniazid" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Rifampicin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="rifampicin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Ethambutol</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="ethambutol" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Streptomycin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="streptomycin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Pyrazinamide</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="pyrazinamide" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="push-up-1"><mark>Levofloxacin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="levofloxacin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Kanamycin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="kanamycin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Amikacin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="amikacin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="push-up-1"><mark>Capreomycin</mark></h5>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="form-control select" name="capreomycin" required >
                                                        <option value = "">Select</option>
                                                        <option value = "Resistant">[R] - Resistant</option>
                                                        <option value = "Susceptible">[S] - Susceptible</option>
                                                        <option value = "Not Done">[ND] - Not Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="tab-footer">
                                                <button type="submit" name="add_dst" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                            </div>
                                        </div>
                                        <?php require_once 'add_dst.php'?>
                                    </form>
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