<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$honn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$h1 = $q1->fetch_array();

$q2 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$h2 = $q2->fetch_array();

$q3 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$h3 = $q3->fetch_array();

$q4 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$h4 = $q4->fetch_array();

$q5 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$h5 = $q5->fetch_array();

$q6 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$h6 = $q6->fetch_array();

$q7 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$h7 = $q7->fetch_array();

$q8 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$h8 = $q8->fetch_array();

$q9 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$h9 = $q9->fetch_array();

$q10 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$h10 = $q10->fetch_array();

$q11 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$h11 = $q11->fetch_array();

$q12 = $honn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=71 && age <=80) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$h12 = $q12->fetch_array();

?>