<?php
if(ISSET($_POST['add_continuation_phase'])){
    $dosage = $_POST['dosage'];
    $date_taken = $_POST['date_taken'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `continuation_phase` VALUES('', '$dosage', '$date_taken', 'Present', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
if(ISSET($_POST['add_absent'])){
    $month = $_POST['month'];
    $day = $_POST['day'];
    $patient_id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $query = $conn->query ("SELECT * FROM `continuation_phase` WHERE `month` = '$month' && `day` = '$day'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    if($valid > 0){
        echo "<script> alert ('Cannot add the same date!')</script>";
    }
    else{
        $conn->query("INSERT INTO `continuation_phase` VALUES('', '', '$date_absent', 'Absent', '$patient_id')") or die(mysqli_error());
    }
    $conn->close();

}
?>