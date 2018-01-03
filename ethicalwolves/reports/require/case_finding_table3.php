<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=0 && age <=4)") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=0 && age <=4)") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=5 && age <=14)") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=5 && age <=14)") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=15 && age <=24)") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=15 && age <=24)") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=25 && age <=34)") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=25 && age <=34)") or die(mysqli_error());
$f8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=35 && age <=44)") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=35 && age <=44)") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=45 && age <=54)") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=45 && age <=54)") or die(mysqli_error());
$f12 = $q12->fetch_array();

$q13 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && (age >=55 && age <=64)") or die(mysqli_error());
$f13 = $q13->fetch_array();

$q14 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && (age >=55 && age <=64)") or die(mysqli_error());
$f14 = $q14->fetch_array();

$q15 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male' && age >= 65") or die(mysqli_error());
$f15 = $q15->fetch_array();

$q16 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female' && age >= 65") or die(mysqli_error());
$f16 = $q16->fetch_array();

$q17 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Male'") or die(mysqli_error());
$f17 = $q17->fetch_array();

$q18 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'New' && gender = 'Female'") or die(mysqli_error());
$f18 = $q18->fetch_array();


$q19 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=0 && age <=4)") or die(mysqli_error());
$f19 = $q19->fetch_array();

$q20 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=0 && age <=4)") or die(mysqli_error());
$f20 = $q20->fetch_array();

$q21 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=5 && age <=14)") or die(mysqli_error());
$f21 = $q21->fetch_array();

$q22 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=5 && age <=14)") or die(mysqli_error());
$f22 = $q22->fetch_array();

$q23 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=15 && age <=24)") or die(mysqli_error());
$f23 = $q23->fetch_array();

$q24 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=15 && age <=24)") or die(mysqli_error());
$f24 = $q24->fetch_array();

$q25 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=25 && age <=34)") or die(mysqli_error());
$f25 = $q25->fetch_array();

$q26 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=25 && age <=34)") or die(mysqli_error());
$f26 = $q26->fetch_array();

$q27 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=35 && age <=44)") or die(mysqli_error());
$f27 = $q27->fetch_array();

$q28 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=35 && age <=44)") or die(mysqli_error());
$f28 = $q28->fetch_array();

$q29 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=45 && age <=54)") or die(mysqli_error());
$f29 = $q29->fetch_array();

$q30 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=45 && age <=54)") or die(mysqli_error());
$f30 = $q30->fetch_array();

$q31 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && (age >=55 && age <=64)") or die(mysqli_error());
$f31 = $q31->fetch_array();

$q32 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && (age >=55 && age <=64)") or die(mysqli_error());
$f32 = $q32->fetch_array();

$q33 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male' && age >= 65") or die(mysqli_error());
$f33 = $q33->fetch_array();

$q34 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female' && age >= 65") or die(mysqli_error());
$f34 = $q34->fetch_array();

$q35 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Male'") or die(mysqli_error());
$f35 = $q35->fetch_array();

$q36 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration_group = 'Relapse' && gender = 'Female'") or die(mysqli_error());
$f36 = $q36->fetch_array();




$q37 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=0 && age <=4)") or die(mysqli_error());
$f37 = $q37->fetch_array();

$q38 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=0 && age <=4)") or die(mysqli_error());
$f38 = $q38->fetch_array();

$q39 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=5 && age <=14)") or die(mysqli_error());
$f39 = $q39->fetch_array();

$q40 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=5 && age <=14)") or die(mysqli_error());
$f40 = $q40->fetch_array();

$q41 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=15 && age <=24)") or die(mysqli_error());
$f41 = $q41->fetch_array();

$q42 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=15 && age <=24)") or die(mysqli_error());
$f42 = $q42->fetch_array();

$q43 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=25 && age <=34)") or die(mysqli_error());
$f43 = $q43->fetch_array();

$q44 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=25 && age <=34)") or die(mysqli_error());
$f44 = $q44->fetch_array();

$q45 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=35 && age <=44)") or die(mysqli_error());
$f45 = $q45->fetch_array();

$q46 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=35 && age <=44)") or die(mysqli_error());
$f46 = $q46->fetch_array();

$q47 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=45 && age <=54)") or die(mysqli_error());
$f47 = $q47->fetch_array();

$q48 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=45 && age <=54)") or die(mysqli_error());
$f48 = $q48->fetch_array();

$q49 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && (age >=55 && age <=64)") or die(mysqli_error());
$f49 = $q49->fetch_array();

$q50 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && (age >=55 && age <=64)") or die(mysqli_error());
$f50 = $q50->fetch_array();

$q51 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male' && age >= 65") or die(mysqli_error());
$f51 = $q51->fetch_array();

$q52 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female' && age >= 65") or die(mysqli_error());
$f52 = $q52->fetch_array();

$q53 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Male'") or die(mysqli_error());
$f53 = $q53->fetch_array();

$q54 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id  && gender = 'Female'") or die(mysqli_error());
$f54 = $q54->fetch_array();

$q55 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=0 && age <=4)") or die(mysqli_error());
$f55 = $q55->fetch_array();

$q56 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=5 && age <=14)") or die(mysqli_error());
$f56 = $q56->fetch_array();

$q57 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=15 && age <=24)") or die(mysqli_error());
$f57 = $q57->fetch_array();

$q58 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=25 && age <=34)") or die(mysqli_error());
$f58 = $q58->fetch_array();

$q59 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=35 && age <=44)") or die(mysqli_error());
$f59 = $q59->fetch_array();

$q60 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=45 && age <=54)") or die(mysqli_error());
$f60 = $q60->fetch_array();

$q61 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (age >=55 && age <=64)") or die(mysqli_error());
$f61 = $q61->fetch_array();

$q62 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && age >=65") or die(mysqli_error());
$f62 = $q62->fetch_array();

$q63 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && (registration_group ='New' or registration_group ='Relapse')") or die(mysqli_error());
$f63 = $q63->fetch_array();


?>