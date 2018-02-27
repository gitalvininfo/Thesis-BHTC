<?php

if(ISSET($_POST['add_dssm'])){
	$date_examined = $_POST['date_examined'];
	$laboratory_number = $_POST['laboratory_number'];
	$visual_appearance = $_POST['visual_appearance'];
	$visual_appearance2 = $_POST['visual_appearance2'];
	$reading = $_POST['reading'];
	$reading2 = $_POST['reading2'];
	$laboratory_diagnosis = $_POST['laboratory_diagnosis'];
	$examined_by = $_POST['examined_by'];
	$date_released = $_POST['date_released'];
	$patient_id = $_GET[patient_id];
	$month = date("M", strtotime("+8 HOURS"));
	$year = date("Y", strtotime("+8 HOURS"));

	date_default_timezone_set('Asia/Manila');	
	$date=date("F j, Y, g:i a");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks = "confirmed the laboratory request of $patient_name";


	$conn->query("INSERT INTO `dssm_examination` VALUES('', '$date_examined', '$laboratory_number', '$visual_appearance', '$visual_appearance2', '$reading', '$reading2', '$laboratory_diagnosis', '$examined_by', '$date_released', '$patient_id', '$month', '$year')") or die(mysqli_error());
	$conn->query("UPDATE `laboratory_request` SET `status` = 'Done' WHERE `patient_id` = '$_GET[patient_id]' && `lab_request_id` = '$_GET[lab_request_id]'") or die(mysqli_error());
	$conn->query("INSERT INTO `history_log` VALUES('', '$id', '$remarks', '$date')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added the DSSM Result!');</script>";
	echo "<script>document.location='medtech_laboratory_request.php'</script>";  
}
?>


