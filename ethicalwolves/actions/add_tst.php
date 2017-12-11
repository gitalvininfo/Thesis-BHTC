<?php
require_once '../logincheck.php';
require ('../config.php');
if(ISSET($_POST['add_tst'])){
    $result = $_POST['result'];
    $date_read = $_POST['date_read'];
    $patient_id = $_POST['patient_id'];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    require '../config.php';
    $conn->query("INSERT INTO `tst` VALUES('', '$result', '$date_read', '$patient_id', '$month', '$year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Tuberculin Skin Test result!');</script>";
    echo "<script>document.location='../master_file_patient.php'</script>";
}
?>