<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$c1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$c2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$c3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$c4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$c5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$c6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$c7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$c8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$c9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$c10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$c11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=21 && age <=30) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$c12 = $q12->fetch_array();

?>