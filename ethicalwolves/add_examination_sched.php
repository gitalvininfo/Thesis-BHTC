<?php
if(ISSET($_POST['add_examination_sched'])){
    $examination_date = $_POST['examination_date'];
    $test_requested = $_POST['test_requested'];
    $patient_id = $_GET['id'];


    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `examination_sched` VALUES('', '$examination_date', '$test_requested', 'Pending', '$patient_id')") or die(mysqli_error());
    $conn->close();

}
?>