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
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="laboratory_request_table.php">Laboratory Request</a></li>
                    <li class="active">Add Laboratory Request</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <form role="form" class="form-horizontal" method="post">
                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
            $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
            $f = $q->fetch_array();
                                ?>
                                <div class="panel panel-info">
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong> <span class="fa fa-file-text"></span> Laboratory Request Form</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control select" data-live-search="true" name="collection_unit" required >
                                                        <option>Name of Collection Unit</option>
                                                        <option value="Bata Health Center">Bata Health Center</option>
                                                        <option value="Sum-ag Health Center">Sum-ag Health Center</option>
                                                        <option value="Estefania Health Center">Estefania Health Center</option>
                                                        <option value="Banago Health Center">Banago Health Center</option>
                                                        <option value="Handumanan Health Center">Handumanan Health Center</option>
                                                        <option value="Taculing Health Center">Taculing Health Center</option>
                                                        <option value="Villamonte Health Center">Villamonte Health Center</option>
                                                        <option value="Taculing Health Center">Taculing Health Center</option>
                                                        <option value="Singcang-Airport Health Center">Singcang-Airport Health Center</option>
                                                        <option value="Pta. Taytay Health Center">Pta. Taytay Health Center</option>
                                                        <option value="Montevista Health Center">Montevista Health Center</option>
                                                        <option value="Mansilingan Health Center">Mansilingan Health Center</option>
                                                        <option value="Mandalagan Health Center">Mandalagan Health Center</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input  data-toggle="tooltip" data-placement="right" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" placeholder="Date of Request" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" placeholder="Requesting Physician" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected" placeholder="Date Sample 1 Collected" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Date Sample 2 Collected" type="text" class="form-control datepicker" name="date_sample_collected2" placeholder="Date Sample 2 Collected" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Name of Sample Collector" type="text" class="form-control" name="sample_collector" placeholder="Name of Sample Collector" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                        <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" placeholder="Contact Number" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="reason_for_examination" required >
                                                        <option value="">Reason for Examination</option>
                                                        <option value="Diagnostic">Diagnostic</option>
                                                        <option value="Baseline">Baseline</option>
                                                        <option value="Follow-up">Follow-up</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="specimen_type" required >
                                                        <option value="">Specimen Type</option>
                                                        <option value="Sputum">Sputum</option>
                                                        <option value="Urine">Urine</option>
                                                        <option value="Blood">Blood</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="repeat_collection" required >
                                                        <option value="">Repeat Collection</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <select class="validate[required] select" id="formStatus" name="test_requested" required >
                                                        <option value="">Test Requested</option>
                                                        <option value="DSSM">DSSM</option>
                                                        <option value="Xpert MTB/RIF">Xpert MTB/RIF</option>
                                                        <option value="TB Culture">TB Culture</option>
                                                        <option value="Drug Susceptible Testing">Drug Susceptible Testing</option>
                                                        <option value="Tuberculin Skin Testing">Tuberculin Skin Testing</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_laboratory_request" class="btn btn-info pull-right"><span class="fa fa-check"> Submit </span></button>
                                    </div>
                                    <?php require_once 'add_laboratory_request.php' ?>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> <strong>Laboratory Request History of <?php echo $f['patient_name']?></strong></h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="laboratory_request" class="table table-hover">
                                            <thead>
                                                <tr class="info">
                                                    <th><center>Date Requested</center></th>
                                                    <th><center>Reason</center></th>
                                                    <th><center>Specimen</center></th>
                                                    <th><center>Test</center></th>
                                                    <th><center>Status</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['date_of_request']?></center></td>
                                                    <td><center><?php echo $fetch['reason_for_examination']?></center></td>
                                                    <td><center><?php echo $fetch['specimen_type']?></center></td>
                                                    <td><center><?php echo $fetch['test_requested']?></center></td>
                                                    <td><center><strong><?php echo $fetch['status']?></strong></center></td>
                                                    <td>
                                                        <center>
                                                            <a href="#viewdata<?php echo $fetch['lab_request_id'];?>" data-toggle="modal" data-target="#viewdata<?php echo $fetch['lab_request_id'];?>" class="btn btn-info btn-sm"><span class="fa fa-search"></span> </a>
                                                        </center>
                                                    </td>
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
        <div class="modal" id="modal_small-<?php echo $fetch['lab_request_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-file-text"></span> Laboratory Request</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="laboratory_request_table.php" method="post">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                        $query = $conn->query("SELECT * FROM `laboratory_request` WHERE `patient_id` = '$_GET[id]' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                        $id = $f['patient_id'];
                        $fetch = $query->fetch_array();
                        ?>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Name of Collection Unit" type="text" class="form-control" name="collection_unit" value="<?php echo $fetch['collection_unit']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">

                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date of Request" type="text" class="form-control datepicker" name="date_of_request" value="<?php echo $fetch['date_of_request']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Requesting Physician" type="text" class="form-control" name="requesting_physician" value="<?php echo $fetch['requesting_physician']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date Sample Collected" type="text" class="form-control datepicker" name="date_sample_collected" value="<?php echo $fetch['date_sample_collected']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Sample Collector" type="text" class="form-control" name="sample_collector" value="<?php echo $fetch['sample_collector']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" value="<?php echo $fetch['contact_number']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Reason for Examination" type="text" class="form-control" name="reason_for_examination" value="<?php echo $fetch['reason_for_examination']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Specimen Type" type="text" class="form-control" name="specimen_type" value="<?php echo $fetch['specimen_type']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Repeat Collection" type="text" class="form-control" name="repeat_collection" value="<?php echo $fetch['repeat_collection']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Test Requested" type="text" class="form-control" name="test_requested" value="<?php echo $fetch['test_requested']?>" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                   $query = $conn->query("SELECT * FROM `laboratory_request` ORDER BY `lab_request_id` DESC") or die(mysqli_error());
                                                   while($fetch = $query->fetch_array()){
        ?>
        <div id="viewdata<?php echo $fetch['lab_request_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> Laboratory Request of <?php echo $f['patient_name']?></h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="panel panel-info">
                                    <div class="panel-body profile">
                                        <div class="panel-body">                                    
                                            <div class="contact-info">
                                                <p><small style="font-size:13px;">Name of Collection Unit</small><br/><?php echo $fetch['collection_unit']?></p>
                                                <p><small style="font-size:13px;">Date of Request</small><br/><?php echo $fetch['date_of_request']?></p>
                                                <p><small style="font-size:13px;">Requesting Physician</small><br/><?php echo $fetch['requesting_physician']?></p>
                                                <p><small style="font-size:13px;">Date Sample 1 Collected</small><br/><?php echo $fetch['date_sample_collected']?></p>
                                                <p><small style="font-size:13px;">Date Sample 2 Collected</small><br/><?php echo $fetch['date_sample_collected2']?></p>
                                                <p><small style="font-size:13px;">Name of Sample Collector</small><br/><?php echo $fetch['sample_collector']?></p>
                                                <p><small style="font-size:13px;">Contact Number</small><br/><?php echo $fetch['contact_number']?></p>
                                                <p><small style="font-size:13px;">Reason For Examination</small><br/><?php echo $fetch['reason_for_examination']?></p>
                                                <p><small style="font-size:13px;">Specimen Type</small><br/><?php echo $fetch['specimen_type']?></p>
                                                <p><small style="font-size:13px;">Test Requested</small><br/><?php echo $fetch['test_requested']?></p>
                                            </div>
                                        </div>    
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php
                                                   }
                                                   $conn->close();
        ?> 


        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-danger btn-lg">Yes</a>
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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>