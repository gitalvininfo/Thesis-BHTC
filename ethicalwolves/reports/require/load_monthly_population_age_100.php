<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$jonn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$j1 = $q1->fetch_array();

$q2 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$j2 = $q2->fetch_array();

$q3 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$j3 = $q3->fetch_array();

$q4 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$j4 = $q4->fetch_array();

$q5 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$j5 = $q5->fetch_array();

$q6 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$j6 = $q6->fetch_array();

$q7 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$j7 = $q7->fetch_array();

$q8 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$j8 = $q8->fetch_array();

$q9 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$j9 = $q9->fetch_array();

$q10 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$j10 = $q10->fetch_array();

$q11 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$j11 = $q11->fetch_array();

$q12 = $jonn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=91 && age <=100) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$j12 = $q12->fetch_array();

?>