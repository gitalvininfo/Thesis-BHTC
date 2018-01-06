<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">                            
                <div class="tocify-content">
                    &nbsp;
                    <?php 
                    require 'config.php';
                    $q1 = $conn->query("SELECT sum(dosage) FROM `intensive_phase_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                    $f1 = $q1->fetch_array();
                    ?>


                    <h2><strong>Intensive Phase - <?php echo $f1['sum(dosage)']. " mg"?></strong></h2>
                    <hr>
                    <div class="btn-group pull-right">
                        <div class="pull-left">
                            <a href="#intensive<?php echo $f['patient_id'];?>" data-target="#intensive<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-danger btn-md"><span class="fa fa-info-circle"></span>Monthly Dosage</a>
                        </div>
                    </div>
                    <h3>Date of Intake</h3>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr class="default">
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
                                    if($fetch['remarks'] == 'Absent'){
                                        echo 
                                            "<tr>
                                                            <td><center> ".$fetch['month']. " ".$fetch['day']. "</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#f9d6d6;'><strong><center> ".$fetch['remarks']." </center></strong></td>
                                                        </tr>";

                                    }
                                    else
                                    {
                                        echo
                                            "<tr>
                                                            <td><center> ".$fetch['month']." ".$fetch['day']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#e7f8f4;'><strong><center> ".$fetch['remarks']." </center></strong></td>
                                                        </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>
                    <div class="panel-body">
                        <h2><strong>Intensive Phase Summary - 6 months</strong></h2> <hr>
                        <h3>Summary</h3>
                        <div id="intensive_ipt" style="width: 100%; height: 425px"></div>
                    </div>
                    <!-- Follow-up Visit-->
                    <h2><strong>Follow-up Visit</strong></h2><hr>
                    <h3>Overview</h3>
                    <div class="panel-body">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                        $q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                        $f = $q->fetch_array();
                        $id=$f['patient_id'];
                        ?>
                        <table id="laboratory_request" class="table table-bordered">
                            <thead>
                                <tr class="info">
                                    <th><center>Follow-up Date</center></th>
                                    <th><center>Remarks</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                $query = $conn->query("SELECT * FROM `follow_up_ipt` where `patient_id` = '$id'") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                ?>
                                <tr>
                                    <td><center><?php echo $fetch['follow_up_date']?></center></td>
                                    <td><center><?php echo $fetch['remarks']?></center></td>
                                </tr>
                                <?php
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Follow-up Visit-->

                </div> 
            </div>
        </div>
    </div>
    <div class="col-md-3" style="position: relative;">
        <div id="tocify"></div>
    </div>
</div>


