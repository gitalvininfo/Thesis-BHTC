<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$gonn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$g1 = $q1->fetch_array();

$q2 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$g2 = $q2->fetch_array();

$q3 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$g3 = $q3->fetch_array();

$q4 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$g4 = $q4->fetch_array();

$q5 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$g5 = $q5->fetch_array();

$q6 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$g6 = $q6->fetch_array();

$q7 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$g7 = $q7->fetch_array();

$q8 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$g8 = $q8->fetch_array();

$q9 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$g9 = $q9->fetch_array();

$q10 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$g10 = $q10->fetch_array();

$q11 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$g11 = $q11->fetch_array();

$q12 = $gonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=61 && age <=70) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$g12 = $q12->fetch_array();

?>