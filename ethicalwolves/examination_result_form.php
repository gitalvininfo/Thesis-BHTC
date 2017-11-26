<?php
require_once 'logincheck.php';
require ('config.php');
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
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycustom.css" />
        <!-- EOF CSS INCLUDE -->
    </head>

    <body class="page-container-boxed">
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">BHTC-PMIS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/project_logo.png" alt="John Doe" />
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
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info-circle"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="dashboard_medtech.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="medtech_patient_master_file.php"><span class="fa fa-folder-open"></span> <span class="xn-text">Patient Master File</span></a>
                    </li>
                    <li>
                        <a href="medtech_laboratory_request.php"><span class="fa fa-flask"></span> <span class="xn-text">Laboratory Request</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Examination Reports</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="fa fa-group"></span><span class="xn-text">Patient Population</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="fa fa-tint"></span><span class="xn-text">Drugs Dispensation</span></a></li>

                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END X-NAVIGATION -->


            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
                <?php require 'require/medtech_header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="medtech_laboratory_request.php">Laboratory Request</a></li>
                    <li class="active">Examination Result Form</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                $f = $q->fetch_array();
                            ?>
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-second" role="tab" data-toggle="tab">DSSM</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Xpert MTB</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">TB Culture</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">DST</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-second">
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Examined</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_examined" placeholder="Date Examined" data-toggle="tooltip" data-placement="top" title="Date Examined" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Laboratory Number</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_number" placeholder=" Laboratory Number" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Visual Appearance</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="visual_appearance" required >
                                                                <option value = "">Choose Visual Appearance</option>
                                                                <option value = "Salivary">Salivary</option>
                                                                <option value = "Muco-Purulent">Muco-Purulent</option>
                                                                <option value = "Blood-Stained">Blood-Stained</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Reading</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="reading" placeholder="Reading" data-toggle="tooltip" data-placement="top" title="Reading" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Laboratory Diagnosis</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="laboratory_diagnosis" required >
                                                                <option value = "">Choose Laboratory Diagnosis</option>
                                                                <option value = "Positive">Positive</option>
                                                                <option value = "Negative">Negative</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Examined By</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Released</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/> </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-footer">
                                                        <button type="submit" name="add_dssm" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_dssm.php' ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-third">   	
                                        <div class="row">
                                            <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Examined</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_examined" placeholder="Date Examined" data-toggle="tooltip" data-placement="top" title="Date Examined" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Laboratory Number</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="laboratory_number" placeholder="Laboratory Number" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Visual Appearance</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="visual_appearance" placeholder="Visual Appearance" data-toggle="tooltip" data-placement="top" title="Visual Appearance" required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Reading</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="reading" placeholder="Reading" data-toggle="tooltip" data-placement="top" title="Reading" required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Examined By</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Released</label>
                                                        <div class="col-md-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Date Examined</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" data-live-search="true" name="result" required >
                                                                <option value = "">Choose Result</option>
                                                                <option value = "T">[T] - MTB detected, Rifampicin resistance not detected</option>
                                                                <option value = "RR">[RR] - MTB detected, Rifampicin resistance detected</option>
                                                                <option value = "TI">[TI] - MTB detected, Rifampicin resistance indeterminate</option>
                                                                <option value = "N">[N] - MTB not detected</option>
                                                                <option value = "I">Invalid / No Result</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="tab-footer">
                                                        <button type="submit" name="add_gene_expert" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                    </div>
                                                    <?php require_once 'add_gene_expert.php' ?>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <div class="row">
                                            <div class="panel-body scroll" style="height:375px;">
                                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Method</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="method" placeholder="Method" data-toggle="tooltip" data-placement="top" title="Method" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">TB Culture Laboratory</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="tb_culture_laboratory" placeholder="TB Culture Laboratory Number" data-toggle="tooltip" data-placement="top" title="TB Culture Laboratory" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Laboratory Number</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="laboratory_no" placeholder="Laboratory Number" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Sample Collected</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_sample_collected" placeholder="Date Sample Collected" data-toggle="tooltip" data-placement="top" title="Date Sample Collected" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Sample Received</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_sample_received" placeholder="Date Sample Received" data-toggle="tooltip" data-placement="top" title="Date Sample Collected" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">TB Culture Result</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="tb_culture_result" placeholder="TB Culture Result" data-toggle="tooltip" data-placement="top" title="TB Culture Result" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Remarks</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="remarks" placeholder="Remarks" data-toggle="tooltip" data-placement="top" title="Remarks" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Examined By</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Reviewed By</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="reviewed_by" placeholder="Reviewed" data-toggle="tooltip" data-placement="top" title="Reviewed By" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Released</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-footer">
                                                            <button type="submit" name="add_tb_culture" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                        </div>
                                                        <?php require_once 'add_tb_culture.php' ?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-fifth">
                                        <div class="row">
                                            <div class="panel-body scroll" style="height:375px;">
                                                <form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">TB Culture Laboratory</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="tb_culture_laboratory" placeholder="TB Culture Laboratory"  data-toggle="tooltip" data-placement="top" title="TB Culture Laboratory" required/> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">DST Laboratory</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="dst_laboratory" placeholder="DST Laboratory"  data-toggle="tooltip" data-placement="top" title="DST Laboratory" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Collected</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_collected" placeholder="Date Collected" data-toggle="tooltip" data-placement="top" title="Date Collected" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Received</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_received" placeholder="Date Received" data-toggle="tooltip" data-placement="top" title="Date Received" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Method</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="method" placeholder="Method" data-toggle="tooltip" data-placement="top" title="Method" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <label>First Line Drug Results</label>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Isoniazid</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="isoniazid" placeholder="Isoniazid" data-toggle="tooltip" data-placement="top" title="Isoniazid" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Rifampicin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="rifampicin" placeholder="Rifampicin" data-toggle="tooltip" data-placement="top" title="Rifampicin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Ethambutol</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="ethambutol" placeholder="Ethambutol" data-toggle="tooltip" data-placement="top" title="Ethambutol" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Streptomycin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="streptomycin" placeholder="Streptomycin" data-toggle="tooltip" data-placement="top" title="Streptomycin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Pyrazinamide</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="pyrazinamide" placeholder="Pyrazinamide" data-toggle="tooltip" data-placement="top" title="Pyrazinamide" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <label>Second Line Drug Results</label>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Levofloxacin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="levofloxacin" placeholder="Levofloxacin" data-toggle="tooltip" data-placement="top" title="Levofloxacin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Kanamycin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="kanamycin" placeholder="Kanamycin" data-toggle="tooltip" data-placement="top" title="Kanamycin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Amikacin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="amikacin" placeholder="Amikacin" data-toggle="tooltip" data-placement="top" title="Amikacin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Capreomycin</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="capreomycin" placeholder="Capreomycin" data-toggle="tooltip" data-placement="top" title="Capreomycin" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Examined By</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Remarks</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="remarks" placeholder="Remarks" data-toggle="tooltip" data-placement="top" title="Remarks" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Reviewed By</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                                    <input type="text" class="form-control" name="reviewed_by" placeholder="Reviewed By" data-toggle="tooltip" data-placement="top" title="Reviewed By" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Date Released</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                    <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-footer">
                                                            <button type="submit" name="add_dst" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
                                                        </div>
                                                        <?php require_once 'add_dst.php'?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TABS -->
                            </div>
                            <!-- END PAGE CONTENT -->
                        </div>
                        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
                            <div class="mb-container">
                                <div class="mb-middle">
                                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                                    <div class="mb-content">
                                        <p>Are you sure you want to log out?</p>
                                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                                    </div>
                                    <div class="mb-footer">
                                        <div class="pull-right">
                                            <a href="pages-login.html" class="btn btn-info btn-lg">Yes</a>
                                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>