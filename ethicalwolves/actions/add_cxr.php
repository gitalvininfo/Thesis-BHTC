<?php
require_once '../logincheck.php';
require ('../config.php');
if(ISSET($_POST['add_cxr'])){
    $cxr_findings = $_POST['cxr_findings'];
    $date_of_exam = $_POST['date_of_exam'];
    $tbdc = $_POST['tbdc'];
    $patient_id = $_POST['patient_id'];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    require '../config.php';
    $conn->query("INSERT INTO `cxr` VALUES('', '$cxr_findings', '$date_of_exam', '$tbdc', '$patient_id', '$month', '$year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Chest X-ray findings!');</script>";
    echo "<script>document.location='../master_file_patient.php'</script>";
}
?>