<?php

if(ISSET($_POST['add_tb_culture'])){
    $method = $_POST['method'];
    $tb_culture_laboratory = $_POST['tb_culture_laboratory'];
    $laboratory_no = $_POST['laboratory_no'];
    $date_sample_collected = $_POST['date_sample_collected'];
    $date_sample_received = $_POST['date_sample_received'];
    $tb_culture_result = $_POST['tb_culture_result'];
    $remarks = $_POST['remarks'];
    $examined_by = $_POST['examined_by'];
    $reviewed_by = $_POST['reviewed_by'];
    $date_released = $_POST['date_released'];
    $patient_id = $_GET[patient_id];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));
    
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `tb_culture_examination` VALUES('', '$method', '$tb_culture_laboratory', '$laboratory_no', '$date_sample_collected', '$date_sample_received', '$tb_culture_result', '$remarks', '$examined_by', '$reviewed_by', '$date_released', '$patient_id', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added the TB Culture Result!');</script>";
    echo "<script>document.location='medtech_laboratory_request.php'</script>";

}
?>



