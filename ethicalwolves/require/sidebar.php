<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="home.php">BHTC-PMIS</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="assets/images/users/no-image.jpg" alt="John Doe" />
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="assets/images/project_logo.png" alt="John Doe" />
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">
                        <?php 
                        echo $find['firstname']." ".$find['lastname'];
                        ?>
                    </div>
                    <div class="profile-data-title">
                        <i>
                            <?php 
                            echo $find['position'];
                            ?></i>
                    </div>
                </div>
                <div class="profile-controls">
                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                </div>
            </div>
        </li>
        <li>
            <a href="home.php"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>       
            <ul>
                <li><a href="medicine_table.php"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
                <li><a href="master_file_patient.php"><span class="fa fa-key"></span><span class="xn-text">Patient Master File</span></a></li>
                <li><a href="master_file_medtech.php"><span class="fa fa-user-md"></span><span class="xn-text">Physicians</span></a></li>
            </ul>
        </li> 

        <li class="xn-openable">
            <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
            <ul>
                <li> <a href="patient_examination_schedule_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Visit</span></a> </li>
                <li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Laboratory Request</span></a> </li>
                <li> <a href="registration_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Registration</span></a> </li>
                <li> <a href="patient_treatment_table.php"><span class="fa fa-heartbeat"></span> <span class="xn-text">Treatment</span></a> </li>
                <li> <a href="medication_dispensation.php"><span class="fa fa-medkit"></span> <span class="xn-text">Medication Dispensation</span></a> </li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
            <ul>
                <li> <a href="patient_certification_table.php"><span class="fa fa-file-text"></span> <span class="xn-text">Certification</span></a> </li>
                <li><a href="examination_reports_overview.php"><span class="fa fa-stethoscope"></span><span class="xn-text">Examination Report</span></a></li>
                <li><a href="reports.php"><span class="fa fa-line-chart"></span><span class="xn-text">TB Cases Report</span></a></li>
                <li><a href="patient_record_report.php"><span class="fa fa-user"></span><span class="xn-text">Patient Record Report</span></a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>       
            <ul>
                <li><a href="change_password.php"><span class="fa fa-key"></span><span class="xn-text">Update Profile</span></a></li>
                <li><a href="system_backup.php?id=<?php echo $find['user_id']?>&username=<?php echo $find['username']?>"><span class="fa fa-cloud-download"></span><span class="xn-text">Download Database</span></a></li>
            </ul>
        </li> 
    </ul>
</div>


