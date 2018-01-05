<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$c1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();

$a1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();

?>