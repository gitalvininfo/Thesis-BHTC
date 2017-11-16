<?php

if(ISSET($_POST['add_new_clinical'])){
    $date_visited = $_POST['date_visited'];
    $weight = $_POST['weight'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $patient_id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `clinical_findings` VALUES('', '$date_visited', '$weight', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$patient_id')") or die(mysqli_error());
    header ('location:patient_treatment_table.php');
    $conn->close();
}
?>