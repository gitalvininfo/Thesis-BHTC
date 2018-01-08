<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$fonn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();

$q9 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $fonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=51 && age <=60) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

?>