<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
// A. Clinically Diagnosed
// 1st row
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse')") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse') && source_of_patient = 'Public Health Center'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse') && source_of_patient = 'Other Government Facilities'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse') && source_of_patient = 'Private Hospitals'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse') && source_of_patient = 'Community'") or die(mysqli_error());
$f5 = $q5->fetch_array();


?>