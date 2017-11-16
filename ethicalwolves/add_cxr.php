<?php
if(ISSET($_POST['add_cxr'])){
    $cxr_findings = $_POST['cxr_findings'];
    $date_of_exam = $_POST['date_of_exam'];
    $tbdc = $_POST['tbdc'];
    $patient_id = $_GET[patient_id];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `cxr` VALUES('', '$cxr_findings', '$date_of_exam', '$tbdc', '$patient_id', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added the Chest X-ray Result!');</script>";
    echo "<script>document.location='medtech_laboratory_request.php'</script>";
}
?>



