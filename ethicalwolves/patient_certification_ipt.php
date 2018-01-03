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
        <style type="text/css">
            @media print{
                @page{
                    size:portrait;
                }
            }
            #print{
                width:500px;
                height:500px;
                margin:auto;
                overflow:hidden;
                border:2px solid #000;
            }

        </style>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- START TEXT ELEMENTS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="btn-group pull-right">
                                <div class="pull-left">
                                    <button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="fa fa-print"></span> Print Content</button>
                                    <a href="patient_certification_table.php" class="btn btn-default btn-sm"><span class="fa fa-arrow-circle-left"></span> Back</a>
                                </div>
                            </div>  
                        </div>
                        <div id="print">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-body">
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                        $query = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]' && `name` = '$_GET[name]'") or die(mysqli_error());
                                        $fetch = $query->fetch_array();
                                        $q2 = $conn->query("SELECT * FROM `registration_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                        $reg = $q2->fetch_array();
                                        ?>                               
                                        <center><img style="height:80px;width:80px;" src="assets/images/bc.png"> <br> <br>
                                            <h6>Bacolod City Health TB DOTS Center</h6>
                                            <p><small>BBB St., Bacolod City, Philippines <br>
                                                (034) 434 4098 <br>
                                                cho_bacolod_city@yahoo.com</small></p>        <br>                   

                                            <h6 style="font-size:20px;">Certification</h6></center>  <br>
                                        <p style="font-size: 15px"class="text-justify"> &nbsp; &nbsp; The is to certify that <strong><?php echo $fetch['name']?></strong>, bearer of this NTP ID Card, has complied
                                            with the required treatment, supervised by <strong><?php echo $reg['dots_facility']?></strong>.</p>
                                        <p style="font-size:15px;">Issued this <strong><?php echo date("jS"). " day of " . date("F ") . date("Y")?>. </strong></p>
                                        <br> <br>  <br>
                                        <h6 class="text-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;
                                            Physician</h6>
                                        <p class="text-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            Signature over Printed Name</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel-body">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong>Intensive Phase</strong></h3>
                                        </div>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th><center>Date</center></th>
                                                    <th><center>Dosage</center></th>
                                                    <th><center>Remarks</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    require 'config.php';
                                            $query = $conn->query("SELECT * FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                            $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                            $f2 = $q2->fetch_array();
                                            while($fetch = $query->fetch_array()){

                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                                    <td><center><?php echo $fetch['dosage']?></center></td>
                                                    <td><center><?php echo $fetch['remarks']?></center></td>
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
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>