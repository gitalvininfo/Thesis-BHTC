<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` where `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select COUNT(*) as total from `registration`, `dssm_examination` where dssm_examination.patient_id = registration.patient_id && registration_group = 'New' && dssm_examination.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select COUNT(*) as total from `registration`, `dssm_examination` where dssm_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && dssm_examination.year = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q5 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` where `laboratory_diagnosis` = 'Positive (+)' && `year` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("select COUNT(*) as total from `registration`, `dssm_examination` where dssm_examination.patient_id = registration.patient_id && registration_group = 'New' && laboratory_diagnosis = 'Positive (+)' && dssm_examination.year = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("select COUNT(*) as total from `registration`, `dssm_examination` where dssm_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && laboratory_diagnosis = 'Positive (+)' && dssm_examination.year = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'New' && result = 'RR' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();

$q9 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && result = 'RR' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'New' && result = 'T' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && result = 'T' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'New' && result = 'TI' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

$q13 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && result = 'TI' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f13 = $q13->fetch_array();

$q14 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'New' && result = 'I' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f14 = $q14->fetch_array();

$q15 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && result = 'I' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f15 = $q15->fetch_array();

$q16 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'New' && result = 'N' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f16 = $q16->fetch_array();

$q17 = $conn->query("select COUNT(*) as total from `registration`, `gene_expert_examination` where gene_expert_examination.patient_id = registration.patient_id && registration_group = 'Relapse' && result = 'N' && gene_expert_examination.year = '$year'") or die(mysqli_error());
$f17 = $q17->fetch_array();
?>


