<?php
date_default_timezone_set('Asia/Manila');
$year = date("Y");
$month = date("M");
if(ISSET($_POST['add_intensive_phase'])){
	$date_taken = $_POST['date_taken'];
	$dosage = $_POST['dosage'];
	$medicine_name = $_POST['medicine_name'];
	$patient_id = $_GET['id'];

	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
	$conn->query("INSERT INTO `intensive_phase` VALUES('', '$dosage', '$month', '$date_taken', '$medicine_name', '$year', 'Present', '$patient_id')") or die(mysqli_error());
	$conn->close();

}
if(ISSET($_POST['add_absent_intensive'])){
	$date_missed = $_POST['date_missed'];
	$patient_id = $_GET['id'];

	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
	$query = $conn->query ("SELECT * FROM `intensive_phase` WHERE `date_taken` = '$date_missed'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	if($valid > 0){
		echo "<script> alert ('Cannot add the same date!')</script>";
	}
	else{
		$conn->query("INSERT INTO `intensive_phase` VALUES('', '-', '$month', '$date_missed', '', '$year', 'Absent', '$patient_id')") or die(mysqli_error());
	}
	$conn->close();

}
?>