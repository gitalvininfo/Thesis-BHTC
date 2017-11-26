<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $id = $fetch['patient_id'];
    $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` where `patient_id` = '$id' && `status` = 'Pending' ORDER BY `lab_request_id` ASC") or die(mysqli_error());
    $f = $q->fetch_array();
?>
<?php
}
$conn->close();
?>
<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
    </li>
    <li class="xn-icon-button pull-right">
        <a href="../index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
    </li>
    <li class="xn-icon-button pull-right">
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `patient`") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
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
            $q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
            while($f = $q->fetch_array()){
                ?>
                <a href="../laboratory_request_pending.php?id=<?php echo $f['patient_id']?>" class="list-group-item">
                    <div class="list-group-status status-offline"></div>
                    <img src="../assets/images/users/no-image.jpg" class="pull-left" alt="John Doe" />
                    <span class="contacts-title">Patient ID: <?php echo $f['patient_id']. ' - ' .$f['collection_unit']?></span>
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
                <a href="../medtech_laboratory_request.php">Show all laboratory requests</a>
            </div>
        </div>
    </li>
</ul>