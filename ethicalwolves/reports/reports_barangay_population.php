<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
        <link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="../js/plugins/jquery/jquery.min.js"></script>
        <script src = "../js/jquery.canvasjs.min.js"></script>
        <?php include_once '../js/loadchart/barangay_population.php'?>
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
                    <li><a href="../home.php">Home</a></li>
                    <li class="#">Reports</li>
                    <li><a href="../reports.php">TB Cases Report</a></li>
                    <li class="#">Barangay Population</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
                                    <?php require '../require/select_year.php'?>
                                </ul>

                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="panel-body">
                                                <div id="barangay_population" style="width: 100%; height: 400px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                            <div class="row">
                                                <table class="table datatable   ">
                                                    <thead>
                                                        <tr>
                                                            <th>Barangay</th>
                                                            <th><center>Number of Patients per Barangay</center></th>
                                                            <th><center>View Patients</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
    $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

            $abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Abcasa'") or die(mysqli_error());
            $fetch1 = $abcasa->fetch_array();

            $alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Alangilan'") or die(mysqli_error());
            $fetch2 = $alangilan->fetch_array();

            $alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Alijis'") or die(mysqli_error());
            $fetch3 = $alijis->fetch_array();

            $banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Banago'") or die(mysqli_error());
            $fetch4 = $banago->fetch_array();

            $bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Bata'") or die(mysqli_error());
            $fetch5 = $bata->fetch_array();

            $cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Cabug'") or die(mysqli_error());
            $fetch6 = $cabug->fetch_array();

            $estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Estefania'") or die(mysqli_error());
            $fetch7 = $estefania->fetch_array();

            $felisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Felisa'") or die(mysqli_error());
            $fetch8 = $felisa->fetch_array();

            $granada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Granada'") or die(mysqli_error());
            $fetch9 = $granada->fetch_array();

            $handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Handumanan'") or die(mysqli_error());
            $fetch10 = $handumanan->fetch_array();

            $lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
            $fetch11 = $lopezjaena->fetch_array();

            $mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mabini'") or die(mysqli_error());
            $fetch12 = $mabini->fetch_array();

            $mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mandalagan'") or die(mysqli_error());
            $fetch13 = $mandalagan->fetch_array();

            $mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mansilingan'") or die(mysqli_error());
            $fetch14 = $mansilingan->fetch_array();

            $montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Montevista'") or die(mysqli_error());
            $fetch15 = $montevista->fetch_array();

            $pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Pahanocoy'") or die(mysqli_error());
            $fetch16 = $pahanocoy->fetch_array();

            $ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Punta Taytay'") or die(mysqli_error());
            $fetch17 = $ptataytay->fetch_array();

            $singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Singcang'") or die(mysqli_error());
            $fetch18 = $singcang->fetch_array();

            $sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Sumag'") or die(mysqli_error());
            $fetch19 = $sumag->fetch_array();

            $taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Taculing'") or die(mysqli_error());
            $fetch20 = $taculing->fetch_array();

            $tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Tangub'") or die(mysqli_error());
            $fetch21 = $tangub->fetch_array();

            $villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Villamonte'") or die(mysqli_error());
            $fetch23 = $villamonte->fetch_array();

            $vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Vista Alegre'") or die(mysqli_error());
            $fetch24 = $vistaalegre->fetch_array();

            $brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 1'") or die(mysqli_error());
            $fetch26 = $brgy1->fetch_array();

            $brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 2'") or die(mysqli_error());
            $fetch27 = $brgy2->fetch_array();

            $brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 3'") or die(mysqli_error());
            $fetch28 = $brgy3->fetch_array();

            $brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 4'") or die(mysqli_error());
            $fetch29 = $brgy4->fetch_array();

            $brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 5'") or die(mysqli_error());
            $fetch30 = $brgy5->fetch_array();

            $brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 6'") or die(mysqli_error());
            $fetch31 = $brgy6->fetch_array();

            $brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 7'") or die(mysqli_error());
            $fetch32 = $brgy7->fetch_array();

            $brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 8'") or die(mysqli_error());
            $fetch33 = $brgy8->fetch_array();

            $brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 9'") or die(mysqli_error());
            $fetch34 = $brgy9->fetch_array();

            $brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 10'") or die(mysqli_error());
            $fetch35 = $brgy10->fetch_array();

            $brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 11'") or die(mysqli_error());
            $fetch36 = $brgy11->fetch_array();

            $brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 12'") or die(mysqli_error());
            $fetch37 = $brgy12->fetch_array();

            $brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 13'") or die(mysqli_error());
            $fetch38 = $brgy13->fetch_array();

            $brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 14'") or die(mysqli_error());
            $fetch39 = $brgy14->fetch_array();

            $brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 15'") or die(mysqli_error());
            $fetch40 = $brgy15->fetch_array();

            $brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 16'") or die(mysqli_error());
            $fetch41 = $brgy16->fetch_array();

            $brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 17'") or die(mysqli_error());
            $fetch42 = $brgy17->fetch_array();

            $brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 18'") or die(mysqli_error());
            $fetch43 = $brgy18->fetch_array();

            $brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 19'") or die(mysqli_error());
            $fetch44 = $brgy19->fetch_array();

            $brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 20'") or die(mysqli_error());
            $fetch45 = $brgy20->fetch_array();

            $brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 21'") or die(mysqli_error());
            $fetch46 = $brgy21->fetch_array();

            $brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 22'") or die(mysqli_error());
            $fetch47 = $brgy22->fetch_array();

            $brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 23'") or die(mysqli_error());
            $fetch48 = $brgy23->fetch_array();

            $brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 24'") or die(mysqli_error());
            $fetch49 = $brgy24->fetch_array();

            $brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 25'") or die(mysqli_error());
            $fetch50 = $brgy25->fetch_array();

            $brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 26'") or die(mysqli_error());
            $fetch51 = $brgy26->fetch_array();

            $brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 27'") or die(mysqli_error());
            $fetch52 = $brgy27->fetch_array();

            $brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 28'") or die(mysqli_error());
            $fetch53 = $brgy28->fetch_array();

            $brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 29'") or die(mysqli_error());
            $fetch54 = $brgy29->fetch_array();

            $brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 30'") or die(mysqli_error());
            $fetch55 = $brgy30->fetch_array();

            $brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 31'") or die(mysqli_error());
            $fetch56 = $brgy31->fetch_array();

            $brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 32'") or die(mysqli_error());
            $fetch57 = $brgy32->fetch_array();

            $brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 33'") or die(mysqli_error());
            $fetch58 = $brgy33->fetch_array();

            $brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 34'") or die(mysqli_error());
            $fetch59 = $brgy34->fetch_array();

            $brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 35'") or die(mysqli_error());
            $fetch60 = $brgy35->fetch_array();

            $brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 36'") or die(mysqli_error());
            $fetch61 = $brgy36->fetch_array();

            $brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 37'") or die(mysqli_error());
            $fetch62 = $brgy37->fetch_array();

            $brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 38'") or die(mysqli_error());
            $fetch63 = $brgy38->fetch_array();

            $brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 39'") or die(mysqli_error());
            $fetch64 = $brgy39->fetch_array();

            $brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 40'") or die(mysqli_error());
            $fetch65 = $brgy40->fetch_array();

            $brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 41'") or die(mysqli_error());
            $fetch22 = $brgy41->fetch_array();


                                                        ?>
                                                        <tr>
                                                            <td>Barangay Abcasa</td>
                                                            <td><center><strong><?php echo $fetch1['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#abcasa"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Alangilan</td>
                                                            <td><center><strong><?php echo $fetch2['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#alangilan"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Alijis</td>
                                                            <td><center><strong><?php echo $fetch3['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#alijis"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Banago</td>
                                                            <td><center><strong><?php echo $fetch4['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#banago"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Bata</td>
                                                            <td><center><strong><?php echo $fetch5['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#bata"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Cabug</td>
                                                            <td><center><strong><?php echo $fetch6['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#cabug"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Estefania</td>
                                                            <td><center><strong><?php echo $fetch7['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#estefania"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Felisa</td>
                                                            <td><center><strong><?php echo $fetch8['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#felisa"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Granda</td>
                                                            <td><center><strong><?php echo $fetch9['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#granada"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Handumanan</td>
                                                            <td><center><strong><?php echo $fetch10['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#handumanan"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Lopez Jaena</td>
                                                            <td><center><strong><?php echo $fetch11['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#lopezjaena"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Mabini</td>
                                                            <td><center><strong><?php echo $fetch12['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mabini"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Mandalagan</td>
                                                            <td><center><strong><?php echo $fetch13['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mandalagan"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Mansilingan</td>
                                                            <td><center><strong><?php echo $fetch14['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mansilingan"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Barangay Montevista</td>
                                                            <td><center><strong><?php echo $fetch15['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#montevista"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Pahanocoy</td>
                                                            <td><center><strong><?php echo $fetch16['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#pahanocoy"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Punta Taytay</td>
                                                            <td><center><strong><?php echo $fetch17['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#ptataytay"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Singcang</td>
                                                            <td><center><strong><?php echo $fetch18['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#singcang"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Sum-ag</td>
                                                            <td><center><strong><?php echo $fetch19['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sum-ag"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Taculing</td>
                                                            <td><center><strong><?php echo $fetch20['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#taculing"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Tangub</td>
                                                            <td><center><strong><?php echo $fetch21['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#tangub"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Villamonte</td>
                                                            <td><center><strong><?php echo $fetch23['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#villamonte"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay Vista Alegre</td>
                                                            <td><center><strong><?php echo $fetch24['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#vista-alegre"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 1</td>
                                                            <td><center><strong><?php echo $fetch26['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy1"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 2</td>
                                                            <td><center><strong><?php echo $fetch27['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy2"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 3</td>
                                                            <td><center><strong><?php echo $fetch28['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy3"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 4</td>
                                                            <td><center><strong><?php echo $fetch29['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy4"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 5</td>
                                                            <td><center><strong><?php echo $fetch30['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy5"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 6</td>
                                                            <td><center><strong><?php echo $fetch31['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy6"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 7</td>
                                                            <td><center><strong><?php echo $fetch32['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy7"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 8</td>
                                                            <td><center><strong><?php echo $fetch33['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy8"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 9</td>
                                                            <td><center><strong><?php echo $fetch34['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy9"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 10</td>
                                                            <td><center><strong><?php echo $fetch35['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy10"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 11</td>
                                                            <td><center><strong><?php echo $fetch36['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy11"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 12</td>
                                                            <td><center><strong><?php echo $fetch37['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy12"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 13</td>
                                                            <td><center><strong><?php echo $fetch38['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy13"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 14</td>
                                                            <td><center><strong><?php echo $fetch39['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy14"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 15</td>
                                                            <td><center><strong><?php echo $fetch40['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy15"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 16</td>
                                                            <td><center><strong><?php echo $fetch41['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy16"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 17</td>
                                                            <td><center><strong><?php echo $fetch42['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy17"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 18</td>
                                                            <td><center><strong><?php echo $fetch43['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy18"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 19</td>
                                                            <td><center><strong><?php echo $fetch44['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy19"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 20</td>
                                                            <td><center><strong><?php echo $fetch45['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy20"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 21</td>
                                                            <td><center><strong><?php echo $fetch46['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy21"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 22</td>
                                                            <td><center><strong><?php echo $fetch47['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy22"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 23</td>
                                                            <td><center><strong><?php echo $fetch48['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy23"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 24</td>
                                                            <td><center><strong><?php echo $fetch49['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy24"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 25</td>
                                                            <td><center><strong><?php echo $fetch50['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy25"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 26</td>
                                                            <td><center><strong><?php echo $fetch51['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy26"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 27</td>
                                                            <td><center><strong><?php echo $fetch52['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy27"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 28</td>
                                                            <td><center><strong><?php echo $fetch53['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy28"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 29</td>
                                                            <td><center><strong><?php echo $fetch54['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy29"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 30</td>
                                                            <td><center><strong><?php echo $fetch55['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy30"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 31</td>
                                                            <td><center><strong><?php echo $fetch56['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy31"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 32</td>
                                                            <td><center><strong><?php echo $fetch57['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy32"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 33</td>
                                                            <td><center><strong><?php echo $fetch58['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy33"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 34</td>
                                                            <td><center><strong><?php echo $fetch59['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy34"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 35</td>
                                                            <td><center><strong><?php echo $fetch60['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy35"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 36</td>
                                                            <td><center><strong><?php echo $fetch61['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy36"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 37</td>
                                                            <td><center><strong><?php echo $fetch62['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy37"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 38</td>
                                                            <td><center><strong><?php echo $fetch63['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy38"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 39</td>
                                                            <td><center><strong><?php echo $fetch64['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy39"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 40</td>
                                                            <td><center><strong><?php echo $fetch65['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy40"><span class="fa fa-search"></span></button>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Barangay 41</td>
                                                            <td><center><strong><?php echo $fetch22['total']?></strong></center></td>
                                                            <td><center>
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#brgy41"><span class="fa fa-search"></span></button>
                                                                </center></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'require/tabular_barangay_population.php'?>  
        <?php require 'require/logout.php'?>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'reports_barangay_population.php?year='+year;
                });
            });
        </script>
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
    </body>
</html>