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
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">TB Case</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">IPT Case</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 480px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">
                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>TB Case No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Registration Date</center></th>
                                                                        <th><center>Source of Patient</center></th>
                                                                        <th><center>Registration Group</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <?php
    $year = date('y');
            require 'config.php';
            $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Registered' ORDER BY `status` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $id = $fetch['patient_id'];
                $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                $fetch2 = $query2->fetch_array();
                                                                    ?>                                      
                                                                    <tr>
                                                                        <td><center><strong><?php echo $year. "-". "080". "-" .$fetch['patient_id']?></strong></center></td>
                                                                        <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch2['registration_date']?></center></td>
                                                                        <td><center><?php echo $fetch2['source_of_patient']?></center></td>
                                                                        <td><center><?php echo $fetch2['registration_group']?></center></td>
                                                                        <td><center>
                                                                            <a href="#updatepatient<?php echo $fetch['patient_id'];?>" data-target="#updatepatient<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit</a>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">
                                                                <thead> 
                                                                    <tr class="info">
                                                                        <th><center>IPT No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Emergency No</center></th>
                                                                        <th><center>Address</center></th>
                                                                        <th><center>Action</center></th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $year = date('Y');
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` WHERE `status` = 'Registered' ORDER BY `status` DESC") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                        $id = $fetch['patient_id'];
                                                                        $query2 = $conn->query("SELECT `ipt_no`, `year` FROM `registration_ipt` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                                                        $fetch2 = $query2->fetch_array();
                                                                    ?>                                      
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch2['year']. "-".$fetch['patient_id']?></strong></center></td>
                                                                        <td><center><strong><?php echo $fetch['name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['age']?></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center><?php echo $fetch['emergency_no']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center>
                                                                            <a href="#updateipt<?php echo $fetch['patient_id'];?>" data-target="#updateipt<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
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
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-male"></span> Update Personal Information</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="patient_name" value="<?php echo $fetch['patient_name']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Age</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" value="<?php echo $fetch ['age']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                            <div class="col-md-9">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                                            <div class="col-md-9 col-xs-12">                                            
                                                <textarea class="form-control" rows="3" name="address" data-toggle="tooltip" data-placement="bottom" title="Complete Home Address"><?php echo $fetch['address']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Barangay</label>
                                            <div class="col-md-9">                                                    
                                                <select class="form-control select" data-live-search="true" name="barangay">
                                                    <option value="<?php echo $fetch['barangay']?>"><?php echo $fetch['barangay']?></option>
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
                                                    <option value="Sumag ">Brgy. Sum-ag</option>
                                                    <option value="Taculing">Brgy. Taculing</option>
                                                    <option value="Tangub">Brgy. Tangub</option>
                                                    <option value="Villa Esperanza">Brgy. Villa Esperanza</option>
                                                    <option value="Villamonte">Brgy. Villamonte</option>
                                                    <option value="Vista Alegre">Brgy. Vista Alegre</option>
                                                    <option value="Brgy 1">Brgy. 1</option>
                                                    <option value="Brgy 2">Brgy. 2</option>
                                                    <option value="Brgy 3">Brgy. 3</option>
                                                    <option value="Brgy 4">Brgy. 4</option>
                                                    <option value="Brgy 5">Brgy. 5</option>
                                                    <option value="Brgy 6">Brgy. 6</option>
                                                    <option value="Brgy 7">Brgy. 7</option>
                                                    <option value="Brgy 8">Brgy. 8</option>
                                                    <option value="Brgy 9">Brgy. 9</option>
                                                    <option value="Brgy 10">Brgy. 10</option>
                                                    <option value="Brgy 11">Brgy. 11</option>
                                                    <option value="Brgy 12">Brgy. 12</option>
                                                    <option value="Brgy 13">Brgy. 13</option>
                                                    <option value="Brgy 14">Brgy. 14</option>
                                                    <option value="Brgy 15">Brgy. 15</option>
                                                    <option value="Brgy 16">Brgy. 16</option>
                                                    <option value="Brgy 17">Brgy. 17</option>
                                                    <option value="Brgy 18">Brgy. 18</option>
                                                    <option value="Brgy 19">Brgy. 19</option>
                                                    <option value="Brgy 20">Brgy. 20</option>
                                                    <option value="Brgy 21">Brgy. 21</option>
                                                    <option value="Brgy 22">Brgy. 22</option>
                                                    <option value="Brgy 23">Brgy. 23</option>
                                                    <option value="Brgy 24">Brgy. 24</option>
                                                    <option value="Brgy 25">Brgy. 25</option>
                                                    <option value="Brgy 26">Brgy. 26</option>
                                                    <option value="Brgy 27">Brgy. 27</option>
                                                    <option value="Brgy 28">Brgy. 28</option>
                                                    <option value="Brgy 29">Brgy. 29</option>
                                                    <option value="Brgy 30">Brgy. 30</option>
                                                    <option value="Brgy 31">Brgy. 31</option>
                                                    <option value="Brgy 32">Brgy. 32</option>
                                                    <option value="Brgy 33">Brgy. 33</option>
                                                    <option value="Brgy 34">Brgy. 34</option>
                                                    <option value="Brgy 35">Brgy. 35</option>
                                                    <option value="Brgy 36">Brgy. 36</option>
                                                    <option value="Brgy 37">Brgy. 37</option>
                                                    <option value="Brgy 38">Brgy. 38</option>
                                                    <option value="Brgy 39">Brgy. 39</option>
                                                    <option value="Brgy 40">Brgy. 40</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Birthdate</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']?>" name="birthdate" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Height</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Patient Height" type="number" class="form-control" name="height" value="<?php echo $fetch['height']?>"required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Contact No.</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Contact Number" type="text" class="form-control" name="contact_number" value="<?php echo $fetch['contact_number']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Occupation</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Occupation" type="text" class="form-control" name="occupation" value="<?php echo $fetch ['occupation']?>" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Philhealth</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Philhealth Number * optional" type="text" class="form-control" name="philhealth_no" value="<?php echo $fetch['philhealth_no']?>" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Contact Person</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Contact Person" type="text" class="form-control" name="contact_person" value="<?php echo $fetch['contact_person']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-3 col-xs-12 control-label">Emergency No.</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" value="<?php echo $fetch['emergency_no']?>" required/>
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

        <!-- Edit IPT -->
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updateipt<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-male"></span> Update Personal Information</h4>
                    </div>
                    <form id="ipt" role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="col-md-2 col-xs-12 control-label">Name</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="name" value="<?php echo $fetch['name']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-2 col-xs-12 control-label">Age</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" value="<?php echo $fetch['age']?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-12 control-label">Gender</label>
                                            <div class="col-md-9">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-12 control-label">Address</label>
                                            <div class="col-md-9 col-xs-12">                                            
                                                <textarea class="form-control" rows="3" name="address" data-toggle="tooltip" data-placement="bottom" title="Complete Home Address"><?php echo $fetch['address']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="col-md-2 col-xs-12 control-label">Emergency No.</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" value="<?php echo $fetch['emergency_no']?>" required/>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label class="col-md-2 col-xs-12 control-label">Birthdate</label>
                                            <div class="col-md-9 col-xs-12">
                                                <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']?>" name="birthdate" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="edit_ipt"><span class="fa fa-pencil-square-o"></span>Update</button>
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
        <!-- End IPT -->

        <?php require 'require/logout.php'?>
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






