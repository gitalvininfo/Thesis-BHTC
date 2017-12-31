<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
    </li>
    <li class="xn-icon-button pull-right">
        <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
    </li>
    <li class="xn-icon-button pull-right">
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
        $f = $q->fetch_array();
        ?>
        <a href="#"><span class="fa fa-bell-o"></span></a>
        <div class="informer informer-danger">
            <?php echo $f['total']?>
        </div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-spinner"></span> Pending Laboratory Requests</h3>
                <div class="pull-right">
                    <span class="label label-danger"><?php echo $f['total']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 350px;">
                <?php 
            $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
            while($f = $q->fetch_array()){
                ?>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-offline"></div>
                    <img src="../assets/images/patient.ico" class="pull-left" alt="John Doe" />
                    <span class="contacts-title">Patient No: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
                    <p>
                        <?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?>
                    </p>
                </a>
                <?php
            }
            $conn->close();
                ?>
            </div>
            <div class="panel-footer text-center">
                <a href="../laboratory_request_table.php">Show all laboratory requests</a>
            </div>
        </div>
    </li>
        <li class="xn-icon-button pull-right">
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $q = $conn->query("SELECT COUNT(*) as count from `medicine` WHERE `running_balance` <= 5") or die(mysqli_error());
        $f = $q->fetch_array();
        ?>
        <a href="#"><span class="fa fa-refresh"></span></a>
        <div class="informer informer-danger">
            <?php echo $f['count']?>
        </div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-refresh"></span> You have <?php echo $f['count']. " medicines that runs out of balance " ?></h3>
                <div class="pull-right">
                    <span class="label label-danger"><?php echo $f['count']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 350px;">
                <?php 
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $q = $conn->query("SELECT * FROM `medicine` WHERE `running_balance` <= 5") or die(mysqli_error());
            while($f = $q->fetch_array()){
                ?>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-offline"></div>
                    <img src="../assets/images/medicine.png" class="pull-left" alt="John Doe" />
                    <span class="contacts-title"><?php echo $f['medicine_name']?></span>
                    <p>
                        Running Balance: <?php echo $f['running_balance']. " boxes"?>
                    </p>
                </a>
                <?php
            }
            $conn->close();
                ?>
            </div>
            <div class="panel-footer text-center">
                <a href="../medicine_table.php">Show all medicines</a>
            </div>
        </div>
    </li>
</ul>