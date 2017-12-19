<?php
if(ISSET($_POST['add_laboratory_request'])){
    $collection_unit = $_POST['collection_unit'];
    $date_of_request = $_POST['date_of_request'];
    $requesting_physician = $_POST['requesting_physician'];
    $reason_for_examination = $_POST['reason_for_examination'];
    $specimen_type = $_POST['specimen_type'];
    $repeat_collection = $_POST['repeat_collection'];
    $date_sample_collected = $_POST['date_sample_collected'];
    $date_sample_collected2 = $_POST['date_sample_collected2'];
    $sample_collector = $_POST['sample_collector'];
    $contact_number = $_POST['contact_number'];
    $test_requested = $_POST['test_requested'];
    $patient_id = $_POST['patient_id'];
    $year = date("Y", strtotime("+8 HOURS"));

    $conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
    $conn->query("INSERT INTO `laboratory_request` VALUES('', '$collection_unit', '$date_of_request', '$requesting_physician', '$reason_for_examination', '$specimen_type', '$repeat_collection', '$date_sample_collected', '$date_sample_collected2', '$sample_collector', '$contact_number', '$test_requested', '$patient_id', 'Pending', '$year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new laboratory request!');</script>";
    echo "<script>document.location='../laboratory_request_table.php'</script>";
}
?>