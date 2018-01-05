<?php
require '../config.php';
if(ISSET($_POST['add_follow_up'])){
    $follow_up_date = mysqli_real_escape_string($conn, $_POST['follow_up_date']);
    $remarks = $_POST['remarks'];
    $patient_id = $_POST['patient_id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `follow_up` VALUES('', '$follow_up_date', '$remarks', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Follow-up date!');</script>";
    echo "<script>document.location='../follow_up_table.php'</script>";

}

if(ISSET($_POST['add_follow_up_ipt'])){
    $follow_up_date = $_POST['follow_up_date'];
    $remarks = $_POST['remarks'];
    $patient_id = $_POST['patient_id'];

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `follow_up_ipt` VALUES('', '$follow_up_date', '$remarks', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Follow-up date!');</script>";
    echo "<script>document.location='../follow_up_table.php'</script>";

}
?>