<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$donn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$d1 = $q1->fetch_array();

$q2 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$d2 = $q2->fetch_array();

$q3 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$d3 = $q3->fetch_array();

$q4 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$d4 = $q4->fetch_array();

$q5 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$d5 = $q5->fetch_array();

$q6 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$d6 = $q6->fetch_array();

$q7 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$d7 = $q7->fetch_array();

$q8 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$d8 = $q8->fetch_array();

$q9 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$d9 = $q9->fetch_array();

$q10 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$d10 = $q10->fetch_array();

$q11 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$d11 = $q11->fetch_array();

$q12 = $donn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=31 && age <=40) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$d12 = $q12->fetch_array();

?>