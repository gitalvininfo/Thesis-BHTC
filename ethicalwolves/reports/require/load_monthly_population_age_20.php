<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$query1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$b1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$b2 = $query2->fetch_array();

$query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$b3 = $query3->fetch_array();

$query4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$b4 = $query4->fetch_array();

$query5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$b5 = $query5->fetch_array();

$query6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$b6 = $query6->fetch_array();

$query7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$b7 = $query7->fetch_array();

$query8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$b8 = $query8->fetch_array();

$query9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$b9 = $query9->fetch_array();

$query10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$b10 = $query10->fetch_array();

$query11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$b11 = $query11->fetch_array();

$query12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && (age >=11 && age <=20) && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$b12 = $query12->fetch_array();

?>