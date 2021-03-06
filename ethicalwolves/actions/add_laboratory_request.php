<?php
require '../logincheck.php';
require '../config.php';
date_default_timezone_set('Asia/Manila');
$date_today = date('F j, Y');	
if(ISSET($_POST['add_laboratory_request'])){
	$collection_unit = $_POST['collection_unit'];
	$date_of_request = $_POST['date_of_request'];
	$requesting_physician = $_POST['requesting_physician'];
	$reason_for_examination = $_POST['reason_for_examination'];
	$repeat_collection = $_POST['repeat_collection'];
	$date_sample_collected = $_POST['date_sample_collected'];
	$date_sample_collected2 = $_POST['date_sample_collected2'];
	$sample_collector = $_POST['sample_collector'];
	$designation = $_POST['designation'];
	$test_requested = $_POST['test_requested'];
	$patient_id = $_POST['patient_id'];
	$patient_name = $_POST['patient_name'];
	$date_today = date('F j, Y');
	$year = date("Y", strtotime("+8 HOURS"));

	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks = "added laboratory request for - $patient_name";

	$conn->query("INSERT INTO `laboratory_request` VALUES('', '$collection_unit', '$date_of_request', '$requesting_physician', '$reason_for_examination', 'Sputum', '$repeat_collection', '$date_sample_collected', '$date_sample_collected2', '$sample_collector', '$designation', '$test_requested', '$patient_id', 'Pending', '$date_today', '$year')") or die(mysqli_error());

	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transaction - Laboratory Request', '$remarks', '$date', '$time')") or die(mysqli_error());
	$conn->close();

	echo "<script type='text/javascript'>alert('Successfully added new laboratory request!');</script>";
	echo "<script>document.location='../laboratory_request.php?id=$patient_id'</script>";
}
?>