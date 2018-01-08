<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$a1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$a2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$a3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$a4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$a5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$a6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$a7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$a8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$a9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$a10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$a11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=0 && age <=10) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$a12 = $q12->fetch_array();

?>