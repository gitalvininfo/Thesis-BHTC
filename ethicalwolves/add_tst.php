<?php

if(ISSET($_POST['add_tst'])){
    $result = $_POST['result'];
    $date_read = $_POST['date_read'];
    $patient_id = $_GET[patient_id];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `tst` VALUES('', '$result', '$date_read', '$patient_id', '$month', '$year')") or die(mysqli_error());
    $conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added the Tuberculin Skin Testing Result!');</script>";
    echo "<script>document.location='medtech_laboratory_request.php'</script>";
}
?>



