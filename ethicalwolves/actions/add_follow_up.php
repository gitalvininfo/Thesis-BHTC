<?php
require '../logincheck.php';
require '../config.php';
if(ISSET($_POST['add_follow_up'])){
	$follow_up_date = mysqli_real_escape_string($conn, $_POST['follow_up_date']);
	$remarks = $_POST['remarks'];
	$patient_id = $_POST['patient_id'];
	$patient_name = $_POST['patient_name'];

	date_default_timezone_set('Asia/Manila');
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks2 = "Added a follow-up date for $patient_name";

	$conn->query("INSERT INTO `follow_up` VALUES('', '$follow_up_date', '$remarks', '$patient_id')") or die(mysqli_error());
	
	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transactions - Follow up', '$remarks2', '$date', '$time')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added new Follow-up date!');</script>";
	echo "<script>document.location='../follow_up_table.php'</script>";
}
if(ISSET($_POST['add_follow_up_ipt'])){
	$follow_up_date = $_POST['follow_up_date'];
	$remarks = $_POST['remarks'];
	$patient_id = $_POST['patient_id'];
	$name = $_POST['name'];

	date_default_timezone_set('Asia/Manila');
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks2 = "Added a follow-up date for $name";
	
	$conn->query("INSERT INTO `follow_up_ipt` VALUES('', '$follow_up_date', '$remarks', '$patient_id')") or die(mysqli_error());
	
	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transactions - Follow up', '$remarks2', '$date', '$time')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added new Follow-up date!');</script>";
	echo "<script>document.location='../follow_up_table.php'</script>";
}
?>