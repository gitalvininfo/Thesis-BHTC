<?php
if(ISSET($_POST['add_medication'])){

    $drugs = $_POST['drugs'];
    $dosage = $_POST['dosage'];
    $unit = $_POST['unit'];
    $date = $_POST['date'];
    $itr_no = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `medication` VALUES('', '$drugs', '$dosage', '$unit', '$date', '$itr_no')") or die(mysqli_error());
    $conn->close();

}	