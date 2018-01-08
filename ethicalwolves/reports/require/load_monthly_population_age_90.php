<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$ionn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$i1 = $q1->fetch_array();

$q2 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$i2 = $q2->fetch_array();

$q3 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$i3 = $q3->fetch_array();

$q4 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$i4 = $q4->fetch_array();

$q5 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$i5 = $q5->fetch_array();

$q6 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$i6 = $q6->fetch_array();

$q7 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$i7 = $q7->fetch_array();

$q8 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$i8 = $q8->fetch_array();

$q9 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$i9 = $q9->fetch_array();

$q10 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$i10 = $q10->fetch_array();

$q11 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$i11 = $q11->fetch_array();

$q12 = $ionn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=81 && age <=90) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$i12 = $q12->fetch_array();

?>