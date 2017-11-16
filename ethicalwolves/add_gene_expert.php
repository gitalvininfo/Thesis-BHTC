<?php
if(ISSET($_POST['add_gene_expert'])){
    $date_examined = $_POST['date_examined'];
    $laboratory_number = $_POST['laboratory_number'];
    $visual_appearance = $_POST['visual_appearance'];
    $reading = $_POST['reading'];
    $examined_by = $_POST['examined_by'];
    $date_released = $_POST['date_released'];
    $result = $_POST['result'];
    $patient_id = $_GET[patient_id];
    $month = date("M", strtotime("+8 HOURS"));
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `gene_expert_examination` VALUES('', '$date_examined', '$laboratory_number', '$visual_appearance', '$reading', '$examined_by', '$date_released', '$result', '$patient_id', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
    header('location:medtech_laboratory_request.php');
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added the Xpert Result!');</script>";
    echo "<script>document.location='medtech_laboratory_request.php'</script>";
}
?>



