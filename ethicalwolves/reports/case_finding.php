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
        <?php include_once '../js/loadchart/registration_group.php'?>
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:1010px;
                height:2000px;
                margin:auto;
                overflow:hidden;
                border:0.5px solid #8f8888;
            }
        </style>
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
                    <li class="#">Registration Group</li>
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
                                            <button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
                                            <div id="print">
                                                <div class="panel-body">
                                                    <center><img style="height:50px;width:50px;" src="../assets/images/bc.png"> <br>
                                                        <p>Bacolod City Health TB DOTS Center</p>
                                                        <p><small>BBB St., Bacolod City, Philippines <br>
                                                            (034) 434 4098 <br>
                                                            cho_bacolod_city@yahoo.com</small></p>        <br> </center>                   


                                                    <h6 style="font-size:13px;color:#dc4141">A. Bacteriologically-confirmed TB Cases Registered During the Year by Registration Group and Sex</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th >Classification</th>
                                                                <th colspan="2" style="width:20%"><center>New</center></th>
                                                                <th colspan="2"style="width:20%"><center>Relapse</center></th>
                                                                <th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
                                                                <th colspan="2"><center>Total</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php require 'require/case_finding_table1.php'?>

                                                            <tr>
                                                                <td></td>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Pulmonary</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f7['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f8['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Extra-pulmonary</td>
                                                                <td><center><strong><?php echo $f9['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f10['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f11['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f12['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f15['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f16['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Subtotal</td>
                                                                <td><center><strong><?php echo $f17['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f18['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f19['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f20['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f23['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f24['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td colspan="2"><center><strong><?php echo $f25['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f26['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong></strong></center></td>
                                                                <td class="danger" colspan="2"><center><strong><?php echo $f29['total']?></strong></center></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h6 style="font-size:13px;color:#dc4141">B. Clinically-diagnosed TB Cases Registered During the Year by Registration Group and Sex</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th >Classification</th>
                                                                <th colspan="2" style="width:20%"><center>New</center></th>
                                                                <th colspan="2"style="width:20%"><center>Relapse</center></th>
                                                                <th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
                                                                <th colspan="2"><center>Total</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php require 'require/case_finding_table2.php'?>
                                                            <tr>
                                                                <td></td>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Pulmonary</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f7['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f8['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Extra-pulmonary</td>
                                                                <td><center><strong><?php echo $f9['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f10['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f11['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f12['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f15['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f16['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Subtotal</td>
                                                                <td><center><strong><?php echo $f17['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f18['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f19['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f20['total']?></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong></strong></center></td>
                                                                <td><center><strong><?php echo $f23['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f24['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td colspan="2"><center><strong><?php echo $f25['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f26['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong></strong></center></td>
                                                                <td class="danger" colspan="2"><center><strong><?php echo $f29['total']?></strong></center></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h6 style="font-size:13px;color:#dc4141">C. All New and Relapse TB Cases (All Forms) by Age and Sex</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th ></th>
                                                                <th colspan="2" ><center>0-4</center></th>
                                                                <th colspan="2"><center>5-14</center></th>
                                                                <th colspan="2"><center>15-24</center></th>
                                                                <th colspan="2"><center>25-34</center></th>
                                                                <th colspan="2" ><center>35-44</center></th>
                                                                <th colspan="2"><center>45-54</center></th>
                                                                <th colspan="2"><center>55-64</center></th>
                                                                <th colspan="2"><center>>=65</center></th>
                                                                <th colspan="2" ><center>Total</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php require 'require/case_finding_table3.php'?>
                                                            <tr>
                                                                <th></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                                <th><center><strong>M</strong></center></th>
                                                                <th><center><strong>F</strong></center></th>
                                                            </tr>

                                                            <tr>
                                                                <td>New</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f5['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f6['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f7['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f8['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f9['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f10['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f11['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f12['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f13['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f14['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f15['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f16['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f17['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f18['total']?></strong></center></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Relapse</td>
                                                                <td><center><strong><?php echo $f19['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f20['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f21['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f22['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f23['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f24['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f25['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f26['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f27['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f28['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f29['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f30['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f31['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f32['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f33['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f34['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f35['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f36['total']?></strong></center></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Subtotal</td>
                                                                <td><center><strong><?php echo $f37['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f38['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f39['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f40['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f41['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f42['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f43['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f44['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f45['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f46['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f47['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f48['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f49['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f50['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f51['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f52['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f53['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f54['total']?></strong></center></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Total</td>
                                                                <td colspan="2"><center><strong><?php echo $f55['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f56['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f57['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f58['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f59['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f60['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f61['total']?></strong></center></td>
                                                                <td colspan="2"><center><strong><?php echo $f62['total']?></strong></center></td>
                                                                <td class="danger" colspan="2"><center><strong><?php echo $f63['total']?></strong></center></td>
                                                            </tr>


                                                        </tbody>
                                                    </table>

                                                    <h6 style="font-size:13px;color:#dc4141">D. Source of All New and Relapse TB Cases (All Forms)</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th ></th>
                                                                <th colspan="4"><center>Source of Patient</center></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="with:40%">Number of All New and Relapse TB Cases (All Forms)</th>
                                                                <th style="width:20%"><center>Public Health Center</center></th>
                                                                <th style="width:20%"><center>Other Public Facilities</center></th>
                                                                <th style="width:20%"><center>Private</center></th>
                                                                <th  style="width:20%"><center>Community</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php require 'require/case_finding_table4.php'?>
                                                            <tr>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f4['total']?></strong></center></td>
                                                                <td><center><strong><?php echo $f5['total']?></strong></center></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h6 style="font-size:13px;color:#dc4141">E. TB in Children</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Total TB Cases less than 15 years old</th>
                                                                <th><center>Number</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php require 'require/case_finding_table5.php'?>
                                                            <tr>
                                                                <td>Pulmonary</td>
                                                                <td><center><strong><?php echo $f1['total']?></strong></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Extra-pulmonary</td>
                                                                <td><center><strong><?php echo $f2['total']?></strong></center></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h6 style="font-size:13px;color:#dc4141">F. Individuals given IPT</h6>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th><center>Number</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Children age 0-4</td>
                                                                <td><center><strong><?php echo $f3['total']?></strong></center></td>
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
            </div>
        </div>
        <?php require 'require/logout.php'?>
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
                    window.location = 'case_findings.php?year='+year;
                });
            });
        </script>

        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
    </body>
</html>