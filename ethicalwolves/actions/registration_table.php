<?php
require '../logincheck.php';
require '../config.php';
if(ISSET($_POST['add_new_patient'])){
	$patient_name = $_POST['patient_name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$barangay = $_POST['barangay'];
	$birthdate = $_POST['birthdate'];
	$height = $_POST['height'];
	$contact_number = $_POST['contact_number'];
	$occupation = $_POST['occupation'];
	$philhealth_no = $_POST['philhealth_no'];
	$contact_person = $_POST['contact_person'];
	$emergency_no = $_POST['emergency_no'];
	$year = date("Y", strtotime("+8 HOURS"));

	date_default_timezone_set('Asia/Manila');	
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks = "added patient - $patient_name";

	$conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$age', '$gender', '$address', '$barangay', '$birthdate', '$height', '$contact_number', 'Negros Occidental', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', 'Unregister', 'Pending', '$year')") or die(mysqli_error());
	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transaction - Registration', '$remarks', '$date', '$time')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added new Patient!');</script>";
	echo "<script>document.location='../laboratory_request_table.php'</script>";  
}
if(ISSET($_POST['add_new_ipt'])){
	$name = $_POST['name'];
	$age = $_POST['age'];
	$height = $_POST['height'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact_person = $_POST['contact_person'];
	$emergency_no = $_POST['emergency_no'];
	$birthdate = $_POST['birthdate'];
	$year = date("Y", strtotime("+8 HOURS"));
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("INSERT INTO `patient_ipt` VALUES('', '$name', '$age', '$height', '$gender', '$address', 'Negros Occidental', '$contact_person', '$emergency_no', '$birthdate', 'Unregister', '$year')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added new IPT Case!');</script>";
	echo "<script>document.location='../registration_table.php'</script>";  
}
if(ISSET($_POST['register_patient'])){
	$date = date('F j, Y');
	$registration_date = $date;
	$source_of_patient = $_POST['source_of_patient'];
	$registration_group = $_POST['registration_group'];
	$bacteriological_status = $_POST['bacteriological_status'];
	$classification_of_tb = $_POST['classification_of_tb'];
	$bcg_scar = $_POST['bcg_scar'];
	$history = $_POST['history'];
	$duration = $_POST['duration'];
	$treatment_regimen_category = $_POST['treatment_regimen_category'];
	$treatment_partner_name = $_POST['treatment_partner_name'];
	$designation_treatment_partner = $_POST['designation_treatment_partner'];
	$patient_id = $_POST['patient_id'];
	$patient_name = $_POST['patient_name'];
	$month = date("M", strtotime("+8 HOURS"));
	$year = date("Y", strtotime("+8 HOURS"));


	date_default_timezone_set('Asia/Manila');	
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks = "Registers - $patient_name";

	$conn->query("INSERT INTO `registration` VALUES('', '$registration_date', 'Bacolod City Health TB DOTS Center', '$source_of_patient', '$registration_group', 'TB Disease', '$bacteriological_status', '$classification_of_tb', '$bcg_scar', '$history', '$duration', '$treatment_regimen_category', '$treatment_partner_name', '$designation_treatment_partner', 'Currently in Treatment', '$year', '$patient_id', '$month', '$year')") or die(mysqli_error());

	$conn->query("UPDATE `patient` SET `status` = 'Registered' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());

	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transaction - Registration', '$remarks', '$date', '$time')") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully registered!');</script>";
	echo "<script>document.location='../registration_table.php'</script>";
}
if(ISSET($_POST['register_patient_ipt'])){
	$date_evaluated = date('F j, Y');
	$diagnosis = $_POST['diagnosis'];
	$date_ipt_started = date('F j, Y');
	$source_of_patient = $_POST['source_of_patient'];
	$treatment_partner_name = $_POST['treatment_partner_name'];
	$designation_treatment_partner = $_POST['designation_treatment_partner'];
	$patient_id = $_POST['patient_id'];
	$year = date("Y", strtotime("+8 HOURS"));
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
	$conn->query("INSERT INTO `registration_ipt` VALUES('', '$date_evaluated', '$diagnosis', '$date_ipt_started', '$source_of_patient', '$treatment_partner_name', '$designation_treatment_partner', 'Bacolod City Health TB DOTS Center', 'Currently in Treatment', '$patient_id', '', '$year')") or die(mysqli_error());
	$conn->query("UPDATE `patient_ipt` SET `status` = 'Registered' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully registered IPT Case!');</script>";
	echo "<script>document.location='../registration_table.php'</script>";
}
?>