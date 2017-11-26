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
            <?php require 'require/sidebar.php'?>
               <div class="page-content">
                <?php require 'require/header.php'?>

                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active">Patient Master File</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> Patient Master File</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    </ul>   
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="info">
                                                    <th><center>TB Case No</center></th>
                                                    <th><center>Patient Name</center></th>
                                                    <th><center>Age</center></th>
                                                    <th><center>Gender</center></th>
                                                    <th><center>Birthdate</center></th>
                                                    <th><center>Contact No</center></th>
                                                    <th><center>Address</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <?php
    $year = date('Y');
                                   $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                   $query = $conn->query("SELECT * FROM `patient` ORDER BY `status` DESC") or die(mysqli_error());
                                   while($fetch = $query->fetch_array()){
                                       $id = $fetch['patient_id'];
                                       $query2 = $conn->query("SELECT `tb_case_no`, `year` FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                       $fetch2 = $query2->fetch_array();
                                                ?>                                      
                                                <tr>
                                                    <td><center><strong><?php echo $fetch2['year']. "-".$fetch['patient_id']?></strong></center></td>
                                                    <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                    <td><center><?php echo $fetch['age']?></center></td>
                                                    <td><center><?php echo $fetch['gender']?></center></td>
                                                    <td><center><?php echo $fetch['birthdate']?></center></td>
                                                    <td><center><?php echo $fetch['contact_number']?></center></td>
                                                    <td><center><?php echo $fetch['address']?></center></td>
                                                    <td><center>
                                                        <a href="#updatepatient<?php echo $fetch['patient_id'];?>" data-target="#updatepatient<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
                                                        <a href="patient_overview.php?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-sm btn-info"  data-toggle="tooltip" data-placement="left" title="View Record"><span class="fa fa-search"></span>View <Record></Record> </a></center></td>	
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
                            <!-- END DATATABLE EXPORT -->                            
                        </div>

                    </div>         
                    <!-- END PAGE CONTENT WRAPPER -->
                </div>            
                <!-- END PAGE CONTENT -->

            </div>
        </div>

        <!-- Edit Patient -->
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updatepatient<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-male"></span> Update Patient Information</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Name" type="text" class="form-control" name="patient_name" value="<?php echo $fetch['patient_name']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Age" type="number" class="form-control" name="age" value="<?php echo $fetch['age']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="<?php echo $fetch['gender'];?>"><?php echo $fetch['gender'];?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Home Address" type="text" class="form-control" name="address" value="<?php echo $fetch['address']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                                    
                                                <select class="form-control select" data-live-search="true" name="barangay" required>
                                                    <option value="<?php echo $fetch['barangay'];?>"><?php echo $fetch['barangay'];?></option>
                                                    <option value="Abcasa">Brgy. Abcasa</option>
                                                    <option value="Alangilan">Brgy. Alangilan</option>
                                                    <option value="Alijis">Brgy. Alijis</option>
                                                    <option value="Banago">Brgy. Banago</option>
                                                    <option value="Bata">Brgy. Bata</option>
                                                    <option value="Cabug">Brgy. Cabug </option>
                                                    <option value="Estefania ">Brgy. Estefania</option>
                                                    <option value="Felisa">Brgy. Felisa</option>
                                                    <option value="Granada ">Brgy. Granada</option>
                                                    <option value="Handumanan">Brgy. Handumanan</option>
                                                    <option value="Lopez Jaena">Brgy. Lopez Jaena</option>
                                                    <option value="Mabini">Brgy. Mabini</option>
                                                    <option value="Mandalagan">Brgy. Mandalagan</option>
                                                    <option value="Mansilingan">Brgy. Mansilingan</option>
                                                    <option value="Montevista">Brgy. Montevista</option>
                                                    <option value="Pahanocoy">Brgy. Pahanocoy</option>
                                                    <option value="Punta Taytay ">Brgy. Punta Taytay</option>
                                                    <option value="Singcang">Brgy. Singcang</option>
                                                    <option value="Brgy. Sumag ">Brgy. Sum-ag</option>
                                                    <option value="Taculing">Brgy. Taculing</option>
                                                    <option value="Tangub">Brgy. Tangub</option>
                                                    <option value="Villa Esperanza">Brgy. Villa Esperanza</option>
                                                    <option value="Villamonte">Brgy. Villamonte</option>
                                                    <option value="Vista Alegre">Brgy. Vista Alegre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Birthdate" type="text" class="form-control datepicker" name="birthdate" value="<?php echo $fetch['birthdate']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Patient Height" type="text" class="form-control" name="height" value="<?php echo $fetch['height']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Contact Number" type="text" class="form-control" name="contact_number" value="<?php echo $fetch['contact_number']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Province" type="text" class="form-control" name="province" value="<?php echo $fetch['province']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Occupation * optional" type="text" class="form-control" name="occupation" value="<?php echo $fetch['occupation']?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Philhealth Number * optional" type="text" class="form-control" name="philhealth_no" value="<?php echo $fetch['philhealth_no']?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Contact Person" type="text" class="form-control" name="contact_person" value="<?php echo $fetch['contact_person']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Emergency Number" type="text" class="form-control" name="emergency_no" value="<?php echo $fetch['emergency_no']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Household Member" type="text" class="form-control" name="household_member" value="<?php echo $fetch['household_member']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Household Age" type="number" class="form-control" name="household_member_age" value="<?php echo $fetch['household_member_age']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Date Screened" type="text" class="form-control datepicker" value="Date Screened" name="date_screened" value="<?php echo $fetch['date_screened']?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="edit_patient"><span class="fa fa-pencil-square-o"></span>Update</button>
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
        <!-- End Edit Patient -->


        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
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
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






