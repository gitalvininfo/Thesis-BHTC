<?php
require_once '../logincheck.php';
require ('../config.php');

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- META SECTION -->
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
        <style type="text/css">
            @media print{
                @page{
                    size:halfletter;
                }
            }
            #print{
                width:1300px;
                height:1000px;
                margin:60px 0px 15px 10px;
                border:1px solid #000;
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
                                    <a href="../reports/reports_barangay_population.php" class="btn btn-default btn-sm"><span class="fa fa-arrow-circle-left"></span> Back</a>
                                </div>
                            </div>  
                        </div>
                        <div id="print">

                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th><center>Date of Registration</center></th>
                                            <th><center>TB Case No</center></th>
                                            <th><center>Patient Name</center></th>
                                            <th><center>Age</center></th>
                                            <th><center>Gender</center></th>
                                            <th><center>Birthdate</center></th>
                                            <th><center>Contact No</center></th>
                                            <th><center>Source of Patient</center></th>
                                            <th><center>Anatomical Site</center></th>
                                            <th><center>Bacteriological Site</center></th>
                                            <th><center>Treatment Regimen</center></th>
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
                                        $query = $conn->query("SELECT * FROM `patient` WHERE `barangay` = 'Abcasa' && `status` = 'Registered' && `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
                                        while($fetch = $query->fetch_array()){
                                            $id = $fetch['patient_id'];
                                            $query2 = $conn->query("SELECT * FROM `registration` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                            $fetch2 = $query2->fetch_array();
                                            $query3 = $conn->query("SELECT `treatment_regimen_category` FROM `treatment_record` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                            $fetch3 = $query3->fetch_array();
                                        ?>
                                        <tr>
                                            <td><center><?php echo $fetch2['registration_date']?></center></td>
                                            <td><center><?php echo $fetch2['tb_case_no']?></center></td>
                                            <td><center><?php echo $fetch['patient_name']?></center></td>
                                            <td><center><?php echo $fetch['age']?></center></td>
                                            <td><center><?php echo $fetch['gender']?></center> </td>
                                            <td><center><?php echo $fetch['birthdate']?></center> </td>
                                            <td><center><?php echo $fetch['contact_number']?></center> </td>
                                            <td><center><?php echo $fetch2['source_of_patient']?></center> </td>
                                            <td><center><?php echo $fetch2['classification_of_tb']?></center> </td>
                                            <td><center><?php echo $fetch2['bacteriological_status']?></center> </td>
                                            <td><center><?php echo $fetch3['treatment_regimen_category']?></center> </td>
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
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>