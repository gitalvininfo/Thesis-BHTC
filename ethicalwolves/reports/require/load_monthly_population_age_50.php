<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$eonn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$e1 = $q1->fetch_array();

$q2 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$e2 = $q2->fetch_array();

$q3 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$e3 = $q3->fetch_array();

$q4 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$e4 = $q4->fetch_array();

$q5 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$e5 = $q5->fetch_array();

$q6 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$e6 = $q6->fetch_array();

$q7 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$e7 = $q7->fetch_array();

$q8 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$e8 = $q8->fetch_array();

$q9 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$e9 = $q9->fetch_array();

$q10 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$e10 = $q10->fetch_array();

$q11 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$e11 = $q11->fetch_array();

$q12 = $eonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=41 && age <=50) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$e12 = $q12->fetch_array();

?>