<?php
require_once '../logincheck.php';
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
if(ISSET($_POST['end_treatment'])){
	$status = $_POST['status'];
	$patient_id = $_POST['patient_id'];
	$year = date("Y", strtotime("+8 HOURS"));

	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("UPDATE `registration` SET `status` = '$status', `year_ended` = '$year' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully ended treatment!');</script>";
	echo "<script>document.location='../patient_treatment_table.php'</script>";
}
if(ISSET($_POST['end_treatment_ipt'])){
	$status = $_POST['status'];
	$patient_id = $_POST['patient_id'];
	$year = date("Y", strtotime("+8 HOURS"));

	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("UPDATE `registration_ipt` SET `status` = '$status', `year_ended` = '$year' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully ended treatment!');</script>";
	echo "<script>document.location='../patient_treatment_table.php'</script>";
}
?>