<?php
require '../logincheck.php';
require '../config.php';

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
        <style type="text/css">
            @media print{
                @page{
                    size:halfletter;
                }

            }
            #print{
                width:1150px;
                height:540px;
                overflow:hidden;
                margin:auto;
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
                                    <a href="../patient_certification_table.php" class="btn btn-default btn-sm"><span class="fa fa-arrow-circle-left"></span> Back</a>
                                </div>
                            </div>  
                        </div>
                        <div id="print">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <div class="row">
                                        <h3 class="panel-title"> <strong><?php echo $_GET['patient_name']?></strong></h3><hr>
                                        <h5><mark>Direct Sputum Smear Microscopy Results</mark></h5><hr>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th><center>Date Examined</center></th>
                                                    <th><center>Laboratory Number</center></th>
                                                    <th><center>Visual Appearance 1</center></th>
                                                    <th><center>Visual Appearance 2</center></th>
                                                    <th><center>Reading 1</center></th>
                                                    <th><center>Reading 2</center></th>
                                                    <th><center>Lab. Diagnosis</center></th>
                                                    <th><center>Examined By</center></th>
                                                    <th><center>Date Released</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                            $query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['date_examined']?></center></td>
                                                    <td><center><?php echo $fetch['laboratory_number']?></center></td>
                                                    <td><center><?php echo $fetch['visual_appearance']?></center></td>
                                                    <td><center><?php echo $fetch['visual_appearance2']?></center></td>
                                                    <td><center><?php echo $fetch['reading']?></center></td>
                                                    <td><center><?php echo $fetch['reading2']?></center></td>
                                                    <td><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
                                                    <td><center><?php echo $fetch['examined_by']?></center></td>
                                                    <td><center><?php echo $fetch['date_released']?></center></td>
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
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    </body>
</html>