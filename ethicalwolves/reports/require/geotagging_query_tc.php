<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$abcasa = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Abcasa' && registration.status = 'Currently in Treatment'") or die(mysqli_error());
$t1 = $abcasa->fetch_array();

$alangilan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'ALangilan' && registration.status = 'Currently in Treatment'") or die(mysqli_error());
$t2 = $alangilan->fetch_array();

$alijis = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Alijis' && registration.status = 'Currently in Treatment'") or die(mysqli_error());
$t3 = $alijis->fetch_array();

$banago = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Banago' && registration.status = 'Currently in Treatment'") or die(mysqli_error());
$t4 = $banago->fetch_array();

$bata = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Bata'") or die(mysqli_error());
$t5 = $bata->fetch_array();

$tabug = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Cabug'") or die(mysqli_error());
$t6 = $tabug->fetch_array();

$estefania = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Estefania'") or die(mysqli_error());
$t7 = $estefania->fetch_array();

$telisa = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Felisa'") or die(mysqli_error());
$t8 = $telisa->fetch_array();

$tranada = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Granada'") or die(mysqli_error());
$t9 = $tranada->fetch_array();

$handumanan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Handumanan'") or die(mysqli_error());
$t10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Lopez Jaena'") or die(mysqli_error());
$t11 = $lopezjaena->fetch_array();

$mabini = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Mabini'") or die(mysqli_error());
$t12 = $mabini->fetch_array();

$mandalagan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Mandalagan'") or die(mysqli_error());
$t13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Mansilingan'") or die(mysqli_error());
$t14 = $mansilingan->fetch_array();

$montevista = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Montevista'") or die(mysqli_error());
$t15 = $montevista->fetch_array();

$pahanocoy = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Pahanocoy'") or die(mysqli_error());
$t16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Punta Taytay'") or die(mysqli_error());
$t17 = $ptataytay->fetch_array();

$singcang = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Singcang'") or die(mysqli_error());
$t18 = $singcang->fetch_array();

$sumag = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Sumag'") or die(mysqli_error());
$t19 = $sumag->fetch_array();

$taculing = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Taculing'") or die(mysqli_error());
$t20 = $taculing->fetch_array();

$tangub = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Tangub'") or die(mysqli_error());
$t21 = $tangub->fetch_array();

$villaesperanza = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Villa Esperanza'") or die(mysqli_error());
$t22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Villamonte'") or die(mysqli_error());
$t23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Vista Alegre'") or die(mysqli_error());
$t24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 1'") or die(mysqli_error());
$t26 = $brgy1->fetch_array();

$brgy2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 2'") or die(mysqli_error());
$t27 = $brgy2->fetch_array();

$brgy3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 3'") or die(mysqli_error());
$t28 = $brgy3->fetch_array();

$brgy4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 4'") or die(mysqli_error());
$t29 = $brgy4->fetch_array();

$brgy5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 5'") or die(mysqli_error());
$t30 = $brgy5->fetch_array();

$brgy6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 6'") or die(mysqli_error());
$t31 = $brgy6->fetch_array();

$brgy7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 7'") or die(mysqli_error());
$t32 = $brgy7->fetch_array();

$brgy8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 8'") or die(mysqli_error());
$t33 = $brgy8->fetch_array();

$brgy9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 9'") or die(mysqli_error());
$t34 = $brgy9->fetch_array();

$brgy10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 10'") or die(mysqli_error());
$t35 = $brgy10->fetch_array();

$brgy11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 11'") or die(mysqli_error());
$t36 = $brgy11->fetch_array();

$brgy12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 12'") or die(mysqli_error());
$t37 = $brgy12->fetch_array();

$brgy13 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 13'") or die(mysqli_error());
$t38 = $brgy13->fetch_array();

$brgy14 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 14'") or die(mysqli_error());
$t39 = $brgy14->fetch_array();

$brgy15 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 15'") or die(mysqli_error());
$t40 = $brgy15->fetch_array();

$brgy16 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 16'") or die(mysqli_error());
$t41 = $brgy16->fetch_array();

$brgy17 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 17'") or die(mysqli_error());
$t42 = $brgy17->fetch_array();

$brgy18 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 18'") or die(mysqli_error());
$t43 = $brgy18->fetch_array();

$brgy19 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 19'") or die(mysqli_error());
$t44 = $brgy19->fetch_array();

$brgy20 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 20'") or die(mysqli_error());
$t45 = $brgy20->fetch_array();

$brgy21 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 21'") or die(mysqli_error());
$t46 = $brgy21->fetch_array();

$brgy22 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 22'") or die(mysqli_error());
$t47 = $brgy22->fetch_array();

$brgy23 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 23'") or die(mysqli_error());
$t48 = $brgy23->fetch_array();

$brgy24 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 24'") or die(mysqli_error());
$t49 = $brgy24->fetch_array();

$brgy25 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 25'") or die(mysqli_error());
$t50 = $brgy25->fetch_array();

$brgy26 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 26'") or die(mysqli_error());
$t51 = $brgy26->fetch_array();

$brgy27 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 27'") or die(mysqli_error());
$t52 = $brgy27->fetch_array();

$brgy28 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 28'") or die(mysqli_error());
$t53 = $brgy28->fetch_array();

$brgy29 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 29'") or die(mysqli_error());
$t54 = $brgy29->fetch_array();

$brgy30 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 30'") or die(mysqli_error());
$t55 = $brgy30->fetch_array();

$brgy31 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 31'") or die(mysqli_error());
$t56 = $brgy31->fetch_array();

$brgy32 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 32'") or die(mysqli_error());
$t57 = $brgy32->fetch_array();

$brgy33 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 33'") or die(mysqli_error());
$t58 = $brgy33->fetch_array();

$brgy34 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 34'") or die(mysqli_error());
$t59 = $brgy34->fetch_array();

$brgy35 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 35'") or die(mysqli_error());
$t60 = $brgy35->fetch_array();

$brgy36 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 36'") or die(mysqli_error());
$t61 = $brgy36->fetch_array();

$brgy37 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 37'") or die(mysqli_error());
$t62 = $brgy37->fetch_array();

$brgy38 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 38'") or die(mysqli_error());
$t63 = $brgy38->fetch_array();

$brgy39 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 39'") or die(mysqli_error());
$t64 = $brgy39->fetch_array();

$brgy40 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 40'") or die(mysqli_error());
$t65 = $brgy40->fetch_array();

$brgy41 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Currently in Treatment' && barangay = 'Brgy 41'") or die(mysqli_error());
$t66 = $brgy41->fetch_array();




$abcasa = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Abcasa' && registration.status = 'Cured'") or die(mysqli_error());
$ok1 = $abcasa->fetch_array();

$alangilan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'ALangilan' && registration.status = 'Cured'") or die(mysqli_error());
$ok2 = $alangilan->fetch_array();

$alijis = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Alijis' && registration.status = 'Cured'") or die(mysqli_error());
$ok3 = $alijis->fetch_array();

$banago = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && barangay = 'Banago' && registration.status = 'Cured'") or die(mysqli_error());
$ok4 = $banago->fetch_array();

$bata = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Bata'") or die(mysqli_error());
$ok5 = $bata->fetch_array();

$okabug = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Cabug'") or die(mysqli_error());
$ok6 = $okabug->fetch_array();

$estefania = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Estefania'") or die(mysqli_error());
$ok7 = $estefania->fetch_array();

$okelisa = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Felisa'") or die(mysqli_error());
$ok8 = $okelisa->fetch_array();

$okranada = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Granada'") or die(mysqli_error());
$ok9 = $okranada->fetch_array();

$handumanan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Handumanan'") or die(mysqli_error());
$ok10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Lopez Jaena'") or die(mysqli_error());
$ok11 = $lopezjaena->fetch_array();

$mabini = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Mabini'") or die(mysqli_error());
$ok12 = $mabini->fetch_array();

$mandalagan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Mandalagan'") or die(mysqli_error());
$ok13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Mansilingan'") or die(mysqli_error());
$ok14 = $mansilingan->fetch_array();

$montevista = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Montevista'") or die(mysqli_error());
$ok15 = $montevista->fetch_array();

$pahanocoy = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Pahanocoy'") or die(mysqli_error());
$ok16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Punta Taytay'") or die(mysqli_error());
$ok17 = $ptataytay->fetch_array();

$singcang = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Singcang'") or die(mysqli_error());
$ok18 = $singcang->fetch_array();

$sumag = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Sumag'") or die(mysqli_error());
$ok19 = $sumag->fetch_array();

$okaculing = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Taculing'") or die(mysqli_error());
$ok20 = $okaculing->fetch_array();

$okangub = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Tangub'") or die(mysqli_error());
$ok21 = $okangub->fetch_array();

$villaesperanza = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Villa Esperanza'") or die(mysqli_error());
$ok22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Villamonte'") or die(mysqli_error());
$ok23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Vista Alegre'") or die(mysqli_error());
$ok24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 1'") or die(mysqli_error());
$ok26 = $brgy1->fetch_array();

$brgy2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 2'") or die(mysqli_error());
$ok27 = $brgy2->fetch_array();

$brgy3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 3'") or die(mysqli_error());
$ok28 = $brgy3->fetch_array();

$brgy4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 4'") or die(mysqli_error());
$ok29 = $brgy4->fetch_array();

$brgy5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 5'") or die(mysqli_error());
$ok30 = $brgy5->fetch_array();

$brgy6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 6'") or die(mysqli_error());
$ok31 = $brgy6->fetch_array();

$brgy7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 7'") or die(mysqli_error());
$ok32 = $brgy7->fetch_array();

$brgy8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 8'") or die(mysqli_error());
$ok33 = $brgy8->fetch_array();

$brgy9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 9'") or die(mysqli_error());
$ok34 = $brgy9->fetch_array();

$brgy10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 10'") or die(mysqli_error());
$ok35 = $brgy10->fetch_array();

$brgy11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 11'") or die(mysqli_error());
$ok36 = $brgy11->fetch_array();

$brgy12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 12'") or die(mysqli_error());
$ok37 = $brgy12->fetch_array();

$brgy13 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 13'") or die(mysqli_error());
$ok38 = $brgy13->fetch_array();

$brgy14 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 14'") or die(mysqli_error());
$ok39 = $brgy14->fetch_array();

$brgy15 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 15'") or die(mysqli_error());
$ok40 = $brgy15->fetch_array();

$brgy16 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 16'") or die(mysqli_error());
$ok41 = $brgy16->fetch_array();

$brgy17 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 17'") or die(mysqli_error());
$ok42 = $brgy17->fetch_array();

$brgy18 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 18'") or die(mysqli_error());
$ok43 = $brgy18->fetch_array();

$brgy19 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 19'") or die(mysqli_error());
$ok44 = $brgy19->fetch_array();

$brgy20 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 20'") or die(mysqli_error());
$ok45 = $brgy20->fetch_array();

$brgy21 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 21'") or die(mysqli_error());
$ok46 = $brgy21->fetch_array();

$brgy22 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 22'") or die(mysqli_error());
$ok47 = $brgy22->fetch_array();

$brgy23 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 23'") or die(mysqli_error());
$ok48 = $brgy23->fetch_array();

$brgy24 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 24'") or die(mysqli_error());
$ok49 = $brgy24->fetch_array();

$brgy25 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 25'") or die(mysqli_error());
$ok50 = $brgy25->fetch_array();

$brgy26 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 26'") or die(mysqli_error());
$ok51 = $brgy26->fetch_array();

$brgy27 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 27'") or die(mysqli_error());
$ok52 = $brgy27->fetch_array();

$brgy28 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 28'") or die(mysqli_error());
$ok53 = $brgy28->fetch_array();

$brgy29 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 29'") or die(mysqli_error());
$ok54 = $brgy29->fetch_array();

$brgy30 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 30'") or die(mysqli_error());
$ok55 = $brgy30->fetch_array();

$brgy31 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 31'") or die(mysqli_error());
$ok56 = $brgy31->fetch_array();

$brgy32 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 32'") or die(mysqli_error());
$ok57 = $brgy32->fetch_array();

$brgy33 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 33'") or die(mysqli_error());
$ok58 = $brgy33->fetch_array();

$brgy34 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 34'") or die(mysqli_error());
$ok59 = $brgy34->fetch_array();

$brgy35 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 35'") or die(mysqli_error());
$ok60 = $brgy35->fetch_array();

$brgy36 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 36'") or die(mysqli_error());
$ok61 = $brgy36->fetch_array();

$brgy37 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 37'") or die(mysqli_error());
$ok62 = $brgy37->fetch_array();

$brgy38 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 38'") or die(mysqli_error());
$ok63 = $brgy38->fetch_array();

$brgy39 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 39'") or die(mysqli_error());
$ok64 = $brgy39->fetch_array();

$brgy40 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 40'") or die(mysqli_error());
$ok65 = $brgy40->fetch_array();

$brgy41 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && patient.status = 'Registered' && registration.status = 'Cured' && barangay = 'Brgy 41'") or die(mysqli_error());
$ok66 = $brgy41->fetch_array();

?>
