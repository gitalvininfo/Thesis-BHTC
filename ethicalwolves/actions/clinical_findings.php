<?php
require_once '../logincheck.php';
require ('../config.php');
$date = date('F j, Y');
if(ISSET($_POST['add_new_clinical'])){
	$date_visited = $date;
	$weight = $_POST['weight'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$new = "";
	if (empty($_POST["q6"])) {
		$new = 'No Side Effects';

	}
	else {
		foreach($q6 as $value)  
		{  
			$new .= $value . ",";  
		}
	}
	$patient_id = $_POST['patient_id'];
	$patient_name = $_POST['patient_name'];

	date_default_timezone_set('Asia/Manila');
	$time=date("g:i a");
	$date=date("F j, Y");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$id=$_SESSION['user_id'];
	$remarks2 = "Added new clinical findings for $patient_name";

	$conn->query("INSERT INTO `clinical_findings` VALUES('', '$date_visited', '$weight', '$q1', '$q2', '$q3', '$q4', '$q5', '$new', '$patient_id')") or die(mysqli_error());

	$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'Transactions - Clinical Findings', '$remarks2', '$date', '$time')") or die(mysqli_error());
	$conn->close();

	echo "<script type='text/javascript'>alert('Successfully added new clinical findings!');</script>";
	echo "<script>document.location='../clinical_findings.php?id=$patient_id&patient_name=$patient_name'</script>";
}
?>