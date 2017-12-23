<?php
if(ISSET($_POST['add_intensive_phase'])){
    $dosage = $_POST['dosage'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `intensive_phase` VALUES('', '$dosage', '$month', '$day', 'Present', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
if(ISSET($_POST['add_absent'])){
    $month = $_POST['month'];
    $day = $_POST['day'];
    $patient_id = $_GET['id'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `intensive_phase` VALUES('', '', '$month', '$day', 'Absent', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
?>