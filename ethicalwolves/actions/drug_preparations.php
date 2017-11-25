<?php
require_once '../logincheck.php';
require ('../config.php');
$date = date('l jS \of F Y');
if(ISSET($_POST['add_drug_preparations'])){
    $date_visited = $date;
    $isoniazid = $_POST['isoniazid'];
    $rifampicin = $_POST['rifampicin'];
    $pyrazinamide = $_POST['pyrazinamide'];
    $ethambutol = $_POST['ethambutol'];
    $streptomycin = $_POST['streptomycin'];
    $patient_id = $_POST['patient_id'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `drug_preparations` VALUES('', '$date_visited', '$isoniazid', '$rifampicin', '$pyrazinamide', '$ethambutol', '$streptomycin', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Drug Preparations!');</script>";
    echo "<script>document.location='../patient_treatment_table.php'</script>";
}


?>