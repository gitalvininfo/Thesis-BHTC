<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Personal Information</strong></h3>
            </div>
            <div class="panel-body">   
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/patient.ico" alt="John Doe"/>
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $_GET['name']?></strong></div>
                                    <div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch2['year']."" .$fetch2['ipt_no']?></strong></div>
                                </div>
                            </div>                                
                            <div class="panel-body">                                    
                                <div class="contact-info">
                                    <p><small style="font-size:13px;">Age</small><br/><?php echo $f['age']?> years old</p>
                                    <p><small style="font-size:13px;">Contact Number</small><br/><?php echo $f['emergency_no']?></p>
                                    <p><small style="font-size:13px;">Current Address</small><br/><?php echo $f['address']?></p>                                   
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-md-5">   <br>                                             
                        <h5><strong>Height: </strong><?php echo $f['height'], " cms." ?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>Gender: </strong><?php echo $f['gender']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>Birthdate: </strong><?php echo $f['birthdate']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>Contact Person: </strong><?php echo $f['contact_person']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>Date IPT Started: </strong><?php echo $fetch2['date_ipt_started']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>Date Evaluated: </strong><?php echo $fetch2['date_evaluated']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                        <h5><strong>DOTS Facility: </strong><?php echo $fetch2['dots_facility']?></h5>
                        <h5><strong>Source of Patient: </strong><?php echo $fetch2['source_of_patient']?></h5>
                        <hr style="margin:0px 0 5px 0;">

                        <h5><strong>Diagnosis: </strong><?php echo $fetch2['diagnosis']?></h5>
                        <hr style="margin:0px 0 5px 0;">
                    </div>
                </div>
            </div>   
        </div>
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


