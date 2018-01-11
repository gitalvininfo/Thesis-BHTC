
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>BHTC-PMIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../../assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-blue.css"/>
        <script src="../../js/plugins/jquery/jquery.min.js"></script>
        <script src = "../../js/jquery.canvasjs.min.js"></script>
        <?php require '../../js/loadchart/filter/patient_type.php'?>
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:650px;
                height:1000px;
                overflow: hidden;
                margin:auto;
                border:0.5px solid #8f8888;
            }
        </style>
    </head>
    <body>
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- START TEXT ELEMENTS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <h3 class="panel-title"></h3>
                            <div class="btn-group pull-right">
                                <div class="pull-left">
                                    <button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
                                </div>
                            </div>  
                        </div>
                        <div id="print">
                            <div class="panel-body">
                                <div class="row">
                                    <h6 style="float:right"><u>Date: <?php echo date('F j, Y', strtotime("+8 HOURS"));?></u></h6>
                                    <div class="col-md-3"><img style="height:100px;width:100px;" src="../../assets/images/bc.png"></div><br>
                                    <div class="col-md-5">
                                        <h6>Bacolod City Health TB DOTS Center</h6>
                                        <p>BBB St., Bacolod City, Philippines  <br>
                                            (034) 434 4098 <br>
                                            cho_bacolod_city@yahoo.com
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <?php 
                                $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                $query1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.year = '$year'") or die(mysqli_error());
                                $fetch1 = $query1->fetch_array();

                                $query2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.year = '$year'") or die(mysqli_error());
                                $fetch2 = $query2->fetch_array();

                                $query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.year = '$year'") or die(mysqli_error());
                                $fetch3 = $query3->fetch_array();

                                $percentchild = ($fetch1['total']/$fetch3['total']) * 100;
                                $percentadult = ($fetch2['total']/$fetch3['total']) * 100;

                                ?>
                                <h4><mark>Patient Summary - Children and Adult - Year <?php echo $_GET['year']?></mark></h4> <hr>
                                <h4><mark>Total Population -  <?php echo $fetch3['total']?> </mark></h4> <hr>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th><center>Patient</center></th>
                                            <th><center>Jan</center></th>
                                            <th><center>Feb</center></th>
                                            <th><center>Mar</center></th>
                                            <th><center>Apr</center></th>
                                            <th><center>May</center></th>
                                            <th><center>June</center></th>
                                            <th><center>July</center></th>
                                            <th><center>Aug</center></th>
                                            <th><center>Sep</center></th>
                                            <th><center>Oct</center></th>
                                            <th><center>Nov</center></th>
                                            <th><center>Dec</center></th>
                                            <th><center>Percentage</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require '../require/load_monthly_patient.php'?>
                                        <tr>
                                            <th><center>Adult</center></th>
                                            <td><center><?php echo $a1['total']?></center></td>
                                            <td><center><?php echo $a2['total']?></center></td>
                                            <td><center><?php echo $a3['total']?></center></td>
                                            <td><center><?php echo $a4['total']?></center></td>
                                            <td><center><?php echo $a5['total']?></center></td>
                                            <td><center><?php echo $a6['total']?></center></td>
                                            <td><center><?php echo $a7['total']?></center></td>
                                            <td><center><?php echo $a8['total']?></center></td>
                                            <td><center><?php echo $a9['total']?></center></td>
                                            <td><center><?php echo $a10['total']?></center></td>
                                            <td><center><?php echo $a11['total']?></center></td>
                                            <td><center><?php echo $a12['total']?></center></td>
                                            <td><center><strong><?php echo number_format($percentadult)?>%</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th><center>Children</center></th>
                                            <td><center><?php echo $c1['total']?></center></td>
                                            <td><center><?php echo $c2['total']?></center></td>
                                            <td><center><?php echo $c3['total']?></center></td>
                                            <td><center><?php echo $c4['total']?></center></td>
                                            <td><center><?php echo $c5['total']?></center></td>
                                            <td><center><?php echo $c6['total']?></center></td>
                                            <td><center><?php echo $c7['total']?></center></td>
                                            <td><center><?php echo $c8['total']?></center></td>
                                            <td><center><?php echo $c9['total']?></center></td>
                                            <td><center><?php echo $c10['total']?></center></td>
                                            <td><center><?php echo $c11['total']?></center></td>
                                            <td><center><?php echo $c12['total']?></center></td>
                                            <td><center><strong><?php echo number_format($percentchild)?>%</strong></center></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div id="ptype" style="width: 100%; height: 425px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>  
    </body>
</html>





