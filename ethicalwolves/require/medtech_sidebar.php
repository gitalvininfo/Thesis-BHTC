<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="home.php">BHTC-PMIS</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="assets/images/project_logo.png" alt="John Doe" />
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
                        <?php 
                        echo $find['position'];
                        ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a href="dashboard_medtech.php"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li>
            <a href="medtech_patient_master_file.php"><span class="fa fa-folder-open"></span> <span class="xn-text">Laboratory Results</span></a>
        </li>
        <li>
            <a href="medtech_laboratory_request.php"><span class="fa fa-flask"></span> <span class="xn-text">Laboratory Request</span></a>
        </li>
        <li>
            <a href="medtech_examination_reports.php"><span class="fa fa-bar-chart"></span> <span class="xn-text">Examination Reports</span></a>
        </li>
    </ul>
</div>