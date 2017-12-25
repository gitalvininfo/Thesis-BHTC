<?php
 $year = date("Y", strtotime("+8 HOURS"));
if(ISSET($_POST['add_continuation_phase'])){
    $month = $_POST['month'];
    $day = $_POST['day'];
    $dosage = $_POST['dosage'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `continuation_phase` VALUES('', '$dosage', '$month', '$day', '$year', 'Present', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
if(ISSET($_POST['add_absent_continuation'])){
    $month = $_POST['month'];
    $day = $_POST['day'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `continuation_phase` VALUES('', '', '$month', '$day', '$year', 'Absent', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
?>