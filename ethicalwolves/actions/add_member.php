<?php
require_once '../logincheck.php';
require ('../config.php');
if(ISSET($_POST['add_member'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $date_screened = $_POST['date_screened'];
    $patient_id = $_POST['patient_id'];

    require '../config.php';
    $conn->query("INSERT INTO `family_member` VALUES('', '$name', '$age', '$date_screened', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new family member!');</script>";
    echo "<script>document.location='../master_file_patient.php'</script>";
}
?>