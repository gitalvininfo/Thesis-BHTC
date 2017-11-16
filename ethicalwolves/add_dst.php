<?php

if(ISSET($_POST['add_dst'])){
    $tb_culture_laboratory = $_POST['tb_culture_laboratory'];
    $dst_laboratory = $_POST['dst_laboratory'];
    $date_collected = $_POST['date_collected'];
    $date_received = $_POST['date_received'];
    $method = $_POST['method'];
    $isoniazid = $_POST['isoniazid'];
    $rifampicin = $_POST['rifampicin'];
    $ethambutol = $_POST['ethambutol'];
    $streptomycin = $_POST['streptomycin'];
    $pyrazinamide = $_POST['pyrazinamide'];
    $levofloxacin = $_POST['levofloxacin'];
    $kanamycin = $_POST['kanamycin'];
    $amikacin = $_POST['amikacin'];
    $capreomycin = $_POST['capreomycin'];
    $examined_by = $_POST['examined_by'];
    $remarks = $_POST['remarks'];
    $reviewed_by = $_POST['reviewed_by'];
    $date_released = $_POST['date_released'];
    $patient_id = $_GET[patient_id];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `dst_examination` VALUES('', '$tb_culture_laboratory', '$dst_laboratory', '$date_collected', '$date_received', '$method', '$isoniazid', '$rifampicin', '$ethambutol', '$streptomycin', '$pyrazinamide', '$levofloxacin', '$kanamycin', '$amikacin', '$capreomycin', '$examined_by', '$remarks', '$reviewed_by', '$date_released', '$patient_id', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added the DST Result!');</script>";
    echo "<script>document.location='medtech_laboratory_request.php'</script>";
}
?>




