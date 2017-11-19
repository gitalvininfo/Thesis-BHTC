<?php
if(ISSET($_POST['add_continuation_phase'])){
    $dosage = $_POST['dosage'];
    $date_taken = $_POST['date_taken'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `continuation_phase` VALUES('', '$dosage', '$date_taken', 'Present', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
if(ISSET($_POST['adasdd_absent'])){
    $date_absent = $_POST['date_absent'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `continuation_phase` VALUES('', '', '$date_absent', 'Absent', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
?>