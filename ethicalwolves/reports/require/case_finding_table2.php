<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
// A. Clinically Diagnosed
// 1st row
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Male' && registration.year = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Female' && registration.year = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();
$q8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();


// 2nd row

$q9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

$q13 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-pulmonary' && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Male' && registration.year = '$year'") or die(mysqli_error());
$f13 = $q13->fetch_array();

$q14 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-pulmonary' && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Female' && registration.year = '$year'") or die(mysqli_error());
$f14 = $q14->fetch_array();

$q15 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f15 = $q15->fetch_array();

$q16 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && classification_of_tb = 'Extra-Pulmonary' && bacteriological_status = 'Clinically Diagnosed' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f16 = $q16->fetch_array();

// 3rd row

$q17 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f17 = $q17->fetch_array();

$q18 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f18 = $q18->fetch_array();

$q19 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f19 = $q19->fetch_array();

$q20 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f20 = $q20->fetch_array();

$q21 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Male' && registration.year = '$year'") or die(mysqli_error());
$f21 = $q21->fetch_array();

$q22 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && (registration_group = 'Treatment After Failure' or registration_group = 'TALF' or registration_group = 'PTOU') && gender = 'Female' && registration.year = '$year'") or die(mysqli_error());
$f22 = $q22->fetch_array();
$q23 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && gender = 'Male'&& registration.year = '$year'") or die(mysqli_error());
$f23 = $q23->fetch_array();
$q24 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && gender = 'Female'&& registration.year = '$year'") or die(mysqli_error());
$f24 = $q24->fetch_array();


// 4th row
$q25 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'New'&& registration.year = '$year'") or die(mysqli_error());
$f25 = $q25->fetch_array();
$q26 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed' && registration_group = 'Relapse'&& registration.year = '$year'") or die(mysqli_error());
$f26 = $q26->fetch_array();
$q29 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && bacteriological_status = 'Clinically Diagnosed'&& registration.year = '$year'") or die(mysqli_error());
$f29 = $q29->fetch_array();
