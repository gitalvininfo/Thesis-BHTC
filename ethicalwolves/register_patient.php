<?php

if(ISSET($_POST['register_patient'])){
    $tb_case_no = $_POST['tb_case_no'];
    $registration_date = $_POST['registration_date'];
    $dots_facility = $_POST['dots_facility'];
    $source_of_patient = $_POST['source_of_patient'];
    $registration_group = $_POST['registration_group'];
    $diagnosis = $_POST['diagnosis'];
    $bacteriological_status = $_POST['bacteriological_status'];
    $classification_of_tb = $_POST['classification_of_tb'];
    $bcg_scar = $_POST['bcg_scar'];
    $history = $_POST['history'];
    $duration = $_POST['duration'];
    $patient_id = $_GET['id'];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `registration` VALUES('$tb_case_no', '$registration_date', '$dots_facility', '$source_of_patient', '$registration_group', '$diagnosis', '$bacteriological_status', '$classification_of_tb', '$bcg_scar', '$history', '$duration', '$patient_id', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `patient` SET `status` = 'Registered' WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully registered!');</script>";
    echo "<script>document.location='registration_table.php'</script>";
}
?>