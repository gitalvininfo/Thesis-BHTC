<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
// A. Clinically Diagnosed
// 1st row
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && age <= 15&& registration.year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-pulmonary' && age <= 15&& registration.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient_ipt`, `registration_ipt` where registration_ipt.patient_id = patient_ipt.patient_id && status = 'Registered' && registration_ipt.year = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();


?>