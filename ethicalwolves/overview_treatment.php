<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">                            
                <div class="tocify-content">
                    &nbsp;

                    <!-- Intensive Phase-->
                    <?php 
                    require 'config.php';
                    $q1 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                    $f1 = $q1->fetch_array();
                    ?>
                    <h2><strong>Intensive Phase - <?php echo $f1['sum(dosage)']. " mg"?></strong></h2>
                    <hr>
                    <div class="btn-group pull-right">
                        <div class="pull-left">
                            <a href="#intensive<?php echo $f['patient_id'];?>" data-target="#intensive<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-default btn-md">Monthly Dosage</a>
                        </div>
                    </div>
                    <h4>Date of Intake</h4>
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
                                $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                    if($fetch['remarks'] == 'Absent'){
                                        echo 
                                            "<tr>
                                                            <td><center> ".$fetch['month']. " ".$fetch['day']. "</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#ff5050;'><strong><center><span style='color:#fff'> ".$fetch['remarks']." </span></center></strong></td>
                                                        </tr>";

                                    }
                                    else
                                    {
                                        echo
                                            "<tr>
                                                            <td><center> ".$fetch['month']." ".$fetch['day']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#95B75D;'><strong><center><span style='color:#fff'> ".$fetch['remarks']." </span></center></strong></td>
                                                        </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>
                    <!-- End Intensive Phase-->

                    <!-- Continuation Phase-->
                    <?php 
                    require 'config.php';
                    $q1 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                    $f1 = $q1->fetch_array();
                    ?>
                    <h2><strong>Continuation Phase - <?php echo $f1['sum(dosage)']. " mg"?></strong></h2> <hr>
                    <div class="btn-group pull-right">
                        <div class="pull-left">
                            <a href="#continuation<?php echo $f['patient_id'];?>" data-target="#continuation<?php echo $f['patient_id'];?>" data-toggle="modal" class="btn btn-default btn-md">Monthly Dosage</a>
                        </div>
                    </div>
                    <h4>Date of Intake</h4>
                    <div class="panel-body">
                        <table class="table datatable">
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
                                $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' ORDER BY `continuation_phase_id` DESC ") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                    if($fetch['remarks'] == 'Absent'){
                                        echo 
                                            "<tr>
                                                            <td><center> ".$fetch['month']. " ".$fetch['day']. "</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#ff5050;'><strong><center><span style='color:#fff'> ".$fetch['remarks']." </span></center></strong></td>
                                                        </tr>";
                                    }
                                    else
                                    {
                                        echo
                                            "<tr>
                                                            <td><center> ".$fetch['month']." ".$fetch['day']."</center></td>
                                                            <td><center> ".$fetch['dosage']." </center></td>
                                                            <td style='background-color:#95B75D;'><strong><center> <span style='color:#fff'>".$fetch['remarks']." </span></center></strong></td>
                                                        </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>
                    <!-- End Continuation Phase-->

                    <!-- Graph Drug Intake Phase-->
                    <div class="row">
                        <h2><strong>Summary Drug Intake</strong></h2> <hr>
                        <h4>Graphical</h4>
                        <div id="intensive" style="width: 100%; height: 425px"></div>
                    </div>
                    <!-- End Graph Drug Intake Phase-->

                    <!-- Clinical Findings-->
                    <h2><strong>Clinical Findings</strong></h2> <hr>
                    <h3>Overview</h3>
                    <div class="row">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                        $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                        $f = $q->fetch_array();
                        $id = $f['patient_id'];
                        $query3 = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
                        $f2 = $query3->fetch_array();
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th data-toggle="tooltip" data-placement="top" title="Date Visited">
                                        <center>Date</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Weight">
                                        <center>Weight</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained fever more than 2 weeks">
                                        <center>Fever more than 2 weeks</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Unexplained cough or wheezing more than 2 weeks">
                                        <center>Cough more than 2 weeks</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Unimproved general well-being">
                                        <center>Unimproved general well-being</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Poor appetite">
                                        <center>Poor Appetite</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Positive PE findings for Extra-Pulmonary TB">
                                        <center>PE Findings</center>
                                    </th>
                                    <th data-toggle="tooltip" data-placement="top" title="Side Effects">
                                        <center>Side Effects</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                $query = $conn->query("SELECT * FROM `clinical_findings` WHERE `patient_id` = '$id' ORDER BY `clinical_id` DESC") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                ?>
                                <tr>
                                    <td><center><?php echo $fetch['date_visited']?></center></td>
                                    <td><center><?php echo $fetch['weight']?> kgs.</center></td>
                                    <td><center><?php echo $fetch['q1']?></center></td>
                                    <td><center><?php echo $fetch['q2']?></center></td>
                                    <td><center><?php echo $fetch['q3']?></center></td>
                                    <td><center><?php echo $fetch['q4']?></center></td>
                                    <td><center><?php echo $fetch['q5']?></center></td>
                                    <td><center><?php echo $fetch['q6']?></center></td>
                                </tr>
                                <?php
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Clinical Findings-->

                    <!-- Follow-up Visit-->
                    <h2><strong>Follow-up Visit</strong></h2><hr>
                    <h3>Overview</h3>
                    <div class="row">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                        $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
                        $f = $q->fetch_array();
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><center>Follow-up Date</center></th>
                                    <th><center>Remarks</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
                                $query = $conn->query("SELECT * FROM `follow_up` WHERE `patient_id` = '$id'") or die(mysqli_error());
                                $id = $f['patient_id'];
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


