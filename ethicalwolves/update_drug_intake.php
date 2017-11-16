<?php

if(ISSET($_POST['update_drug_intake'])){
    $status = $_POST['status'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `drug_intake` VALUES('', '$status')") or die(mysqli_error());
    header ('location:patient_treatment.php');
    $conn->close();
    }
?>