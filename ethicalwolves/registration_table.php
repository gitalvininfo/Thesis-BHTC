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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>

    <body>
        <!-- START PAGE CONTAINER -->
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
                    <li class="#">Transaction</li>
                    <li class="#">Registration</li>
                </ul>
                <div class="page-content-wrap">
                    <!-- Export Code -->
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
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_patient"><span class="fa fa-plus"></span> New Patient </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 410px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr class="info">
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th><center>Home Address</center></th>
                                                                        <th><center>Contact Number</center></th>
                                                                        <th>
                                                                            <center>Action</center>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` where `status` = 'Unregister' ORDER BY `patient_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['age']?></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center><?php echo $fetch['contact_number']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center>
                                                                            <a href="#registerpatient<?php echo $fetch['patient_id'];?>" data-target="#registerpatient<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-key"></span>Register</a>
                                                                            </center></td>
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
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_ipt"><span class="fa fa-plus"></span> New Patient </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 410px;">
                                                        <div class="panel-body">
                                                            <table id="lab_request" class="table datatable">
                                                                <thead>
                                                                    <tr class="info">
                                                                        <th><center>Name</center></th>
                                                                        <th><center>Age</center></th>
                                                                        <th><center>Gender</center></th>
                                                                        <th><center>Address</center></th>
                                                                        <th><center>Emergency Number</center></th>
                                                                        <th><center>Birthdate</center></th>
                                                                        <th>
                                                                            <center>Action</center>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                    $query = $conn->query("SELECT * FROM `patient_ipt` where `status` = 'Unregister' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                                                    while($fetch = $query->fetch_array()){
                                                                    ?>
                                                                    <tr>
                                                                        <td><center><strong><?php echo $fetch['name']?></strong></center></td>
                                                                        <td><center><?php echo $fetch['age']?></center></td>
                                                                        <td><center><?php echo $fetch['gender']?></center></td>
                                                                        <td><center><?php echo $fetch['address']?></center></td>
                                                                        <td><center><?php echo $fetch['emergency_no']?></center></td>
                                                                        <td><center><?php echo $fetch['birthdate']?></center></td>
                                                                        <td><center>
                                                                            <a href="#registeript<?php echo $fetch['patient_id'];?>" data-target="#registeript<?php echo $fetch['patient_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-key"></span>Register</a>
                                                                            </center></td>
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

        <!-- New Patient -->
        <div class="modal fade" id="new_patient" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead"><span class="fa fa-plus"></span> New TB Case</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="patient_name" placeholder="Patient Name" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" placeholder="Age" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="">Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <textarea data-toggle="tooltip" data-placement="bottom" title="Complete Home Address" type="text" class="form-control" name="address" placeholder="Complete Home Address" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                                    
                                                <select class="form-control select" data-live-search="true" name="barangay">
                                                    <option>Choose Barangay</option>
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
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="Birthdate" name="birthdate" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Patient Height" type="text" class="form-control" name="height" placeholder="Height" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Contact Number" type="text" class="form-control" name="contact_number" placeholder="Contact Number" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Occupation * optional" type="text" class="form-control" name="occupation" placeholder="Occupation" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Philhealth Number * optional" type="text" class="form-control" name="philhealth_no" placeholder="Philhealth Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Contact Person" type="text" class="form-control" name="contact_person" placeholder="Contact Person" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" placeholder="Emergency Number" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Household Member" type="text" class="form-control" name="household_member" placeholder="Household Member" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Household Age" type="number" class="form-control" name="household_member_age" placeholder="Household Member Age" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Date Screened" type="text" class="form-control datepicker" value="Date Screened" name="date_screened" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="add_new_patient"><span class="fa fa-check"></span>Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New Patient -->


        <!-- New IPT -->
        <div class="modal fade" id="new_ipt" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-plus"></span> New IPT Case</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="name" placeholder="Patient Name" style="text-transform:capitalize" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" placeholder="Age" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                        
                                                <select class="form-control select" name="gender">
                                                    <option value="">Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Complete Home Address" type="text" class="form-control" name="address" placeholder="Complete Home Address" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" placeholder="Emergency Number" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="Birthdate" name="birthdate" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New IPT -->


        <!-- Register Patient -->
        <?php
        $year = date("Y");
        $date = date('F j, Y | l');
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="registerpatient<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-key"></span> <strong>Patient Name : <?php echo $fetch['patient_name']?> | TB Case Number : <?php echo $year. "-" .$fetch['patient_id']?></strong></h4>
                    </div>
                    <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="form-group ">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                <input data-toggle="tooltip" data-placement="right" title="Registration Date" type="text" class="form-control" name="registration_date" style="color:#000;" value="<?php echo $date ?>" disabled/> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3> Source of Patient</h3>
                                            <div class="form-group">
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="source_of_patient" value="Public Health Center"/> Public Health Center</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="source_of_patient" value ="Other Government Facilities"/> Other Government Facilities</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="source_of_patient" value="Private Hospitals"/>Private Hospitals/Clinics/NGO's</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="source_of_patient" value="Community"/>Community</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3> Registration Group</h3>
                                            <div class="form-group">
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="New"/> New</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value ="Relapse"/> Relapse</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="Treatment After Failure"/> Treatment After Failure</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="TALF"/>Treatment After Loss Follow-up</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="PTOU"/> PTOU</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="Transfer-in"/> Transfer-in</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="registration_group" value="Others"/> Others</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3> Diagnosis</h3>
                                            <div class="form-group">
                                                <div class="col-md-4">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="diagnosis" value="TB Disease"/> TB Disease</label>
                                                </div>
                                                <div class="col-md-4">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="diagnosis" value ="TB Infection, for IPT"/> TB Infection, for IPT</label>
                                                </div>
                                                <div class="col-md-4">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="diagnosis" value="TB Exposior, for IPT"/> TB Exposior</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3> Bacteriological Status</h3>
                                            <div class="form-group">
                                                <div class="col-md-6">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="bacteriological_status" value="Bacteriologically Confirmed"/> Bacteriologically Confirmed</label>
                                                </div>
                                                <div class="col-md-6">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="bacteriological_status" value ="Clinically Diagnosed"/> Clinically Diagnosed</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3> Classification of TB</h3>
                                            <div class="form-group">
                                                <div class="col-md-6">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="classification_of_tb" value="Pulmonary"/> Pulmonary</label>
                                                </div>
                                                <div class="col-md-6">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="classification_of_tb" value ="Extra-pulmonary"/> Extra-pulmonary</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>BCG Scar</h3>
                                            <div class="form-group">
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="bcg_scar" value="Yes"/> Yes</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="bcg_scar" value ="No"/> No</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>History of TB</h3>
                                            <div class="form-group">
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="history" value="Yes"/> Yes</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="history" value ="No"/> No</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Duration</h3>
                                            <div class="form-group">
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="duration" value="Less than 1 month"/> Less than 1 month</label>
                                                </div>
                                                <div class="col-md-3">                                    
                                                    <label class="check"><input type="radio" class="iradio" name="duration" value ="1 month or more"/> 1 month or more</label>
                                                </div>
                                            </div><hr>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="register_patient"><span class="fa fa-key"></span>Register</button>
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
        <!-- End Register Patient -->


        <!-- Register IPT -->
        <?php
        $year = date("Y");
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient_ipt` ORDER BY `patient_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="registeript<?php echo $fetch['patient_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-key"></span><strong> Patient Name : <?php echo $fetch['name']?> | IPT Number : <?php echo $year. "-" .$fetch['patient_id']?></strong> </h4>
                    </div>
                    <form role="form" class="form-horizontal" action="actions/registration_table.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                                        <input data-toggle="tooltip" data-placement="bottom" title="Date Evaluated" type="text" class="form-control datepicker" value="Date Evaluated" name="date_evaluated" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input data-toggle="tooltip" data-placement="bottom" title="Date IPT Started" type="text" class="form-control datepicker" value="Date IPT Started" name="date_ipt_started" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">                                        
                                                    <select class="form-control select" name="diagnosis">
                                                        <option>Choose Diagnosis</option>
                                                        <option value="TB Infection">TB Infection</option>
                                                        <option value="TB Exposure">TB Exposure</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="register_patient_ipt"><span class="fa fa-key"></span>Register</button>
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
        <!-- End Register IPT -->


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

        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>       
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        
    </body>
</html>