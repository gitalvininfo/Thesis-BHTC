
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
        <?php require '../../js/loadchart/filter/patient_age.php'?>
        <style type="text/css">
            @media print{
                @page{
                    size:letter;
                }
            }
            #print{
                width:700px;
                height:1300px;
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
                                $query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.year = '$year'") or die(mysqli_error());
                                $fetch3 = $query3->fetch_array();
                                ?>
                                <h4><mark>Patient Summary - Age - Year <?php echo $_GET['year']?></mark></h4> <hr>
                                <h4><mark>Total Population -  <?php echo $fetch3['total']?> </mark></h4> <hr>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th><center>Age</center></th>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require '../require/load_monthly_population_age.php'?>
                                        <tr>
                                            <th><center>1-10 yrs. old</center></th>
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
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_20.php'?>
                                            <th><center>11-20 yrs. old</center></th>
                                            <td><center><?php echo $b1['total']?></center></td>
                                            <td><center><?php echo $b2['total']?></center></td>
                                            <td><center><?php echo $b3['total']?></center></td>
                                            <td><center><?php echo $b4['total']?></center></td>
                                            <td><center><?php echo $b5['total']?></center></td>
                                            <td><center><?php echo $b6['total']?></center></td>
                                            <td><center><?php echo $b7['total']?></center></td>
                                            <td><center><?php echo $b8['total']?></center></td>
                                            <td><center><?php echo $b9['total']?></center></td>
                                            <td><center><?php echo $b10['total']?></center></td>
                                            <td><center><?php echo $b11['total']?></center></td>
                                            <td><center><?php echo $b12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_30.php'?>
                                            <th><center>21-30 yrs. old</center></th>
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
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_40.php'?>
                                            <th><center>31-40 yrs. old</center></th>
                                            <td><center><?php echo $d1['total']?></center></td>
                                            <td><center><?php echo $d2['total']?></center></td>
                                            <td><center><?php echo $d3['total']?></center></td>
                                            <td><center><?php echo $d4['total']?></center></td>
                                            <td><center><?php echo $d5['total']?></center></td>
                                            <td><center><?php echo $d6['total']?></center></td>
                                            <td><center><?php echo $d7['total']?></center></td>
                                            <td><center><?php echo $d8['total']?></center></td>
                                            <td><center><?php echo $d9['total']?></center></td>
                                            <td><center><?php echo $d10['total']?></center></td>
                                            <td><center><?php echo $d11['total']?></center></td>
                                            <td><center><?php echo $d12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_50.php'?>
                                            <th><center>41-50 yrs. old</center></th>
                                            <td><center><?php echo $e1['total']?></center></td>
                                            <td><center><?php echo $e2['total']?></center></td>
                                            <td><center><?php echo $e3['total']?></center></td>
                                            <td><center><?php echo $e4['total']?></center></td>
                                            <td><center><?php echo $e5['total']?></center></td>
                                            <td><center><?php echo $e6['total']?></center></td>
                                            <td><center><?php echo $e7['total']?></center></td>
                                            <td><center><?php echo $e8['total']?></center></td>
                                            <td><center><?php echo $e9['total']?></center></td>
                                            <td><center><?php echo $e10['total']?></center></td>
                                            <td><center><?php echo $e11['total']?></center></td>
                                            <td><center><?php echo $e12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_60.php'?>
                                            <th><center>51-60 yrs. old</center></th>
                                            <td><center><?php echo $f1['total']?></center></td>
                                            <td><center><?php echo $f2['total']?></center></td>
                                            <td><center><?php echo $f3['total']?></center></td>
                                            <td><center><?php echo $f4['total']?></center></td>
                                            <td><center><?php echo $f5['total']?></center></td>
                                            <td><center><?php echo $f6['total']?></center></td>
                                            <td><center><?php echo $f7['total']?></center></td>
                                            <td><center><?php echo $f8['total']?></center></td>
                                            <td><center><?php echo $f9['total']?></center></td>
                                            <td><center><?php echo $f10['total']?></center></td>
                                            <td><center><?php echo $f11['total']?></center></td>
                                            <td><center><?php echo $f12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_70.php'?>
                                            <th><center>61-70 yrs. old</center></th>
                                            <td><center><?php echo $g1['total']?></center></td>
                                            <td><center><?php echo $g2['total']?></center></td>
                                            <td><center><?php echo $g3['total']?></center></td>
                                            <td><center><?php echo $g4['total']?></center></td>
                                            <td><center><?php echo $g5['total']?></center></td>
                                            <td><center><?php echo $g6['total']?></center></td>
                                            <td><center><?php echo $g7['total']?></center></td>
                                            <td><center><?php echo $g8['total']?></center></td>
                                            <td><center><?php echo $g9['total']?></center></td>
                                            <td><center><?php echo $g10['total']?></center></td>
                                            <td><center><?php echo $g11['total']?></center></td>
                                            <td><center><?php echo $g12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_80.php'?>
                                            <th><center>71-80 yrs. old</center></th>
                                            <td><center><?php echo $h1['total']?></center></td>
                                            <td><center><?php echo $h2['total']?></center></td>
                                            <td><center><?php echo $h3['total']?></center></td>
                                            <td><center><?php echo $h4['total']?></center></td>
                                            <td><center><?php echo $h5['total']?></center></td>
                                            <td><center><?php echo $h6['total']?></center></td>
                                            <td><center><?php echo $h7['total']?></center></td>
                                            <td><center><?php echo $h8['total']?></center></td>
                                            <td><center><?php echo $h9['total']?></center></td>
                                            <td><center><?php echo $h10['total']?></center></td>
                                            <td><center><?php echo $h11['total']?></center></td>
                                            <td><center><?php echo $h12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_90.php'?>
                                            <th><center>81-90 yrs. old</center></th>
                                            <td><center><?php echo $i1['total']?></center></td>
                                            <td><center><?php echo $i2['total']?></center></td>
                                            <td><center><?php echo $i3['total']?></center></td>
                                            <td><center><?php echo $i4['total']?></center></td>
                                            <td><center><?php echo $i5['total']?></center></td>
                                            <td><center><?php echo $i6['total']?></center></td>
                                            <td><center><?php echo $i7['total']?></center></td>
                                            <td><center><?php echo $i8['total']?></center></td>
                                            <td><center><?php echo $i9['total']?></center></td>
                                            <td><center><?php echo $i10['total']?></center></td>
                                            <td><center><?php echo $i11['total']?></center></td>
                                            <td><center><?php echo $i12['total']?></center></td>
                                        </tr>
                                        <tr>
                                            <?php require '../require/load_monthly_population_age_100.php'?>
                                            <th><center>91-100 yrs. old</center></th>
                                            <td><center><?php echo $j1['total']?></center></td>
                                            <td><center><?php echo $j2['total']?></center></td>
                                            <td><center><?php echo $j3['total']?></center></td>
                                            <td><center><?php echo $j4['total']?></center></td>
                                            <td><center><?php echo $j5['total']?></center></td>
                                            <td><center><?php echo $j6['total']?></center></td>
                                            <td><center><?php echo $j7['total']?></center></td>
                                            <td><center><?php echo $j8['total']?></center></td>
                                            <td><center><?php echo $j9['total']?></center></td>
                                            <td><center><?php echo $j10['total']?></center></td>
                                            <td><center><?php echo $j11['total']?></center></td>
                                            <td><center><?php echo $j12['total']?></center></td>
                                        </tr>
                                    </tbody>
                                </table><hr>
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div id="page" style="width: 100%; height: 425px"></div>
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





