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
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
        <script src="js/plugins/jquery/jquery.min.js"></script>
        <?php require 'reports/require/examination_reports_table1.php'?>
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:910px;
                height:730px;
                overflow: hidden;
                margin:auto;
                border:0.5px solid #8f8888;
            }
            .blank{
                color:red;
            }
        </style>
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
                    <li><a href="dashboard_medtech.php">Home</a></li>
                    <li class="active">Examination Reports</li>
                </ul>
                <div class="page-content-wrap">
                    <!-- Export Code -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <?php require 'require/select_year.php'?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                    <div id="print">
                                        <div class="panel-body">
                                            <center><img style="height:50px;width:50px;" src="assets/images/bc.png"> <br>
                                                <p>Bacolod City Health TB DOTS Center</p>
                                                <p><small>BBB St., Bacolod City, Philippines <br>
                                                    (034) 434 4098 <br>
                                                    cho_bacolod_city@yahoo.com</small></p> </center>    
                                            <h6 style="float:left">Name of Province/City: <u><mark>Bacolod City</mark></u></h6>
                                            <h6 style="float:right">Date Reported: <u><mark><?php echo date('F j, Y', strtotime("+8 HOURS"))?></mark></u></h6><br><br>
                                            <h6 style="float:left">Municipality: <u><mark>Negros Occidental</mark></u></h6>
                                            <h6 style="float:right">Prepared By: <u><mark><?php echo $find['firstname']. " " .$find['lastname']?></mark></u></h6><br><br>
                                            <h6 style="float:left">Name of DOTS Facility: <u><mark>Bacolod City Health TB DOTS Center</mark></u></h6>        
                                            <hr><br>    

                                            <h6 style="font-size:13px;color:#dc4141">A. Case Finding</h6>

                                            <table class="table table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th colspan="2"></th>
                                                       <th colspan="3"><center>Xpert</center></th>
                                                   </tr>
                                                    <tr>
                                                        <th>Laboratory Activities</th>
                                                        <th><center>DSSM</center></th>
                                                        <th><center>New</center></th>
                                                        <th><center>Relapse</center></th>
                                                        <th><center>Previously Treated</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>1. No. of Examined</strong></td>
                                                        <td><center><?php echo $f1['total']?></center></td>
                                                        <td><center><?php echo $f2['total']?></center></td>
                                                        <td><center><?php echo $f3['total']?></center></td>
                                                        <td><center><?php echo $f4['total']?></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>2. No. with (+) result</strong></td>
                                                        <td><center><?php echo $f5['total']?></center></td>
                                                        <td><center><?php echo $f6['total']?></center></td>
                                                        <td><center><?php echo $f7['total']?></center></td>
                                                        <td><center></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>3. No. with Rifampicin Resistance [RR]</strong></td>
                                                        <td ><center>---</center></td>
                                                        <td><center><?php echo $f8['total']?></center></td>
                                                        <td><center><?php echo $f9['total']?></center></td>
                                                        <td><center><?php echo $f19['total']?></center></td>
                                                    </tr>
                                                    <tr >
                                                        <td><strong>4. No. with Rifampicin not Detected [T]</strong></td>
                                                        <td><center>---</center></td>
                                                        <td><center><?php echo $f10['total']?></center></td>
                                                        <td><center><?php echo $f11['total']?></center></td>
                                                        <td><center><?php echo $f20['total']?></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>5. No. with Rifampicin Resistance Undetermine [TI]</strong></td>
                                                        <td><center>---</center></td>
                                                        <td><center><?php echo $f12['total']?></center></td>
                                                        <td><center><?php echo $f13['total']?></center></td>
                                                        <td><center><?php echo $f21['total']?></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>6. No. with error or invalid result [I]</strong></td>
                                                        <td><center>---</center></td>
                                                        <td><center><?php echo $f14['total']?></center></td>
                                                        <td><center><?php echo $f15['total']?></center></td>
                                                        <td><center><?php echo $f22['total']?></center></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>7. No. with MTB not Detected [N]</strong></td>
                                                        <td><center>---</center></td>
                                                        <td><center><?php echo $f16['total']?></center></td>
                                                        <td><center><?php echo $f17['total']?></center></td>
                                                        <td><center><?php echo $f23['total']?></center></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h6 style="font-size:13px; color:#dc4141">B. Treatment Follow-up (DSSM Only)</h6>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Laboratory Activities</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>1. No. of Follow-up cases examined</strong></td>
                                                        <td><center><?php echo $f18['total']?></center></td>
                                                    </tr>
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
        <?php require 'require/logout.php'?>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'examination_reports.php?year='+year;
                });
            });
        </script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>






