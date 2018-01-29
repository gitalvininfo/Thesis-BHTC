<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Abcasa'") or die(mysqli_error());
$g1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Alangilan'") or die(mysqli_error());
$g2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Alijis'") or die(mysqli_error());
$g3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Banago'") or die(mysqli_error());
$g4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Bata'") or die(mysqli_error());
$g5 = $bata->fetch_array();

$cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Cabug'") or die(mysqli_error());
$g6 = $cabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Estefania'") or die(mysqli_error());
$g7 = $estefania->fetch_array();

$gelisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Felisa'") or die(mysqli_error());
$g8 = $gelisa->fetch_array();

$granada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Granada'") or die(mysqli_error());
$g9 = $granada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Handumanan'") or die(mysqli_error());
$g10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$g11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Mabini'") or die(mysqli_error());
$g12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Mandalagan'") or die(mysqli_error());
$g13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Mansilingan'") or die(mysqli_error());
$g14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Montevista'") or die(mysqli_error());
$g15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$g16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$g17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Singcang'") or die(mysqli_error());
$g18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Sumag'") or die(mysqli_error());
$g19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Taculing'") or die(mysqli_error());
$g20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Tangub'") or die(mysqli_error());
$g21 = $tangub->fetch_array();

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$g22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Villamonte'") or die(mysqli_error());
$g23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$g24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 1'") or die(mysqli_error());
$g26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 2'") or die(mysqli_error());
$g27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 3'") or die(mysqli_error());
$g28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 4'") or die(mysqli_error());
$g29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 5'") or die(mysqli_error());
$g30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 6'") or die(mysqli_error());
$g31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 7'") or die(mysqli_error());
$g32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 8'") or die(mysqli_error());
$g33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 9'") or die(mysqli_error());
$g34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 10'") or die(mysqli_error());
$g35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 11'") or die(mysqli_error());
$g36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 12'") or die(mysqli_error());
$g37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 13'") or die(mysqli_error());
$g38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 14'") or die(mysqli_error());
$g39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 15'") or die(mysqli_error());
$g40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 16'") or die(mysqli_error());
$g41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 17'") or die(mysqli_error());
$g42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 18'") or die(mysqli_error());
$g43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 19'") or die(mysqli_error());
$g44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 20'") or die(mysqli_error());
$g45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 21'") or die(mysqli_error());
$g46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 22'") or die(mysqli_error());
$g47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 23'") or die(mysqli_error());
$g48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 24'") or die(mysqli_error());
$g49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 25'") or die(mysqli_error());
$g50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 26'") or die(mysqli_error());
$g51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 27'") or die(mysqli_error());
$g52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 28'") or die(mysqli_error());
$g53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 29'") or die(mysqli_error());
$g54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 30'") or die(mysqli_error());
$g55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 31'") or die(mysqli_error());
$g56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 32'") or die(mysqli_error());
$g57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 33'") or die(mysqli_error());
$g58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 34'") or die(mysqli_error());
$g59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 35'") or die(mysqli_error());
$g60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 36'") or die(mysqli_error());
$g61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 37'") or die(mysqli_error());
$g62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 38'") or die(mysqli_error());
$g63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 39'") or die(mysqli_error());
$g64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 40'") or die(mysqli_error());
$g65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Male' && `barangay` = 'Brgy 41'") or die(mysqli_error());
$g66 = $brgy41->fetch_array();


$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Abcasa'") or die(mysqli_error());
$h1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Alangilan'") or die(mysqli_error());
$h2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Alijis'") or die(mysqli_error());
$h3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Banago'") or die(mysqli_error());
$h4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Bata'") or die(mysqli_error());
$h5 = $bata->fetch_array();

$cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Cabug'") or die(mysqli_error());
$h6 = $cabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Estefania'") or die(mysqli_error());
$h7 = $estefania->fetch_array();

$helisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Felisa'") or die(mysqli_error());
$h8 = $helisa->fetch_array();

$hranada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Granada'") or die(mysqli_error());
$h9 = $hranada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Handumanan'") or die(mysqli_error());
$h10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$h11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Mabini'") or die(mysqli_error());
$h12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Mandalagan'") or die(mysqli_error());
$h13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Mansilingan'") or die(mysqli_error());
$h14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Montevista'") or die(mysqli_error());
$h15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$h16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$h17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Singcang'") or die(mysqli_error());
$h18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Sumag'") or die(mysqli_error());
$h19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Taculing'") or die(mysqli_error());
$h20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Tangub'") or die(mysqli_error());
$h21 = $tangub->fetch_array();

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$h22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Villamonte'") or die(mysqli_error());
$h23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$h24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 1'") or die(mysqli_error());
$h26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 2'") or die(mysqli_error());
$h27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 3'") or die(mysqli_error());
$h28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 4'") or die(mysqli_error());
$h29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 5'") or die(mysqli_error());
$h30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 6'") or die(mysqli_error());
$h31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 7'") or die(mysqli_error());
$h32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 8'") or die(mysqli_error());
$h33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 9'") or die(mysqli_error());
$h34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 10'") or die(mysqli_error());
$h35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 11'") or die(mysqli_error());
$h36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 12'") or die(mysqli_error());
$h37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 13'") or die(mysqli_error());
$h38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 14'") or die(mysqli_error());
$h39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 15'") or die(mysqli_error());
$h40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 16'") or die(mysqli_error());
$h41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 17'") or die(mysqli_error());
$h42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 18'") or die(mysqli_error());
$h43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 19'") or die(mysqli_error());
$h44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 20'") or die(mysqli_error());
$h45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 21'") or die(mysqli_error());
$h46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 22'") or die(mysqli_error());
$h47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 23'") or die(mysqli_error());
$h48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 24'") or die(mysqli_error());
$h49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 25'") or die(mysqli_error());
$h50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 26'") or die(mysqli_error());
$h51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 27'") or die(mysqli_error());
$h52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 28'") or die(mysqli_error());
$h53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 29'") or die(mysqli_error());
$h54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 30'") or die(mysqli_error());
$h55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 31'") or die(mysqli_error());
$h56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 32'") or die(mysqli_error());
$h57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 33'") or die(mysqli_error());
$h58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 34'") or die(mysqli_error());
$h59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 35'") or die(mysqli_error());
$h60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 36'") or die(mysqli_error());
$h61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 37'") or die(mysqli_error());
$h62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 38'") or die(mysqli_error());
$h63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 39'") or die(mysqli_error());
$h64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 40'") or die(mysqli_error());
$h65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Brgy 41'") or die(mysqli_error());
$h66 = $brgy41->fetch_array();


?>
