<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Abcasa'") or die(mysqli_error());
$c1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Alangilan'") or die(mysqli_error());
$c2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Alijis'") or die(mysqli_error());
$c3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Banago'") or die(mysqli_error());
$c4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Bata'") or die(mysqli_error());
$c5 = $bata->fetch_array();

$cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Cabug'") or die(mysqli_error());
$c6 = $cabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Estefania'") or die(mysqli_error());
$c7 = $estefania->fetch_array();

$celisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Felisa'") or die(mysqli_error());
$c8 = $celisa->fetch_array();

$cranada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Granada'") or die(mysqli_error());
$c9 = $cranada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Handumanan'") or die(mysqli_error());
$c10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$c11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Mabini'") or die(mysqli_error());
$c12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Mandalagan'") or die(mysqli_error());
$c13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Mansilingan'") or die(mysqli_error());
$c14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Montevista'") or die(mysqli_error());
$c15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$c16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$c17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Singcang'") or die(mysqli_error());
$c18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Sumag'") or die(mysqli_error());
$c19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Taculing'") or die(mysqli_error());
$c20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Tangub'") or die(mysqli_error());
$c21 = $tangub->fetch_array();

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$c22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Villamonte'") or die(mysqli_error());
$c23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$c24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 1'") or die(mysqli_error());
$c26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 2'") or die(mysqli_error());
$c27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 3'") or die(mysqli_error());
$c28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 4'") or die(mysqli_error());
$c29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 5'") or die(mysqli_error());
$c30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 6'") or die(mysqli_error());
$c31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 7'") or die(mysqli_error());
$c32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 8'") or die(mysqli_error());
$c33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 9'") or die(mysqli_error());
$c34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 10'") or die(mysqli_error());
$c35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 11'") or die(mysqli_error());
$c36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 12'") or die(mysqli_error());
$c37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 13'") or die(mysqli_error());
$c38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 14'") or die(mysqli_error());
$c39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 15'") or die(mysqli_error());
$c40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 16'") or die(mysqli_error());
$c41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 17'") or die(mysqli_error());
$c42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 18'") or die(mysqli_error());
$c43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 19'") or die(mysqli_error());
$c44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 20'") or die(mysqli_error());
$c45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 21'") or die(mysqli_error());
$c46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 22'") or die(mysqli_error());
$c47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 23'") or die(mysqli_error());
$c48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 24'") or die(mysqli_error());
$c49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 25'") or die(mysqli_error());
$c50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 26'") or die(mysqli_error());
$c51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 27'") or die(mysqli_error());
$c52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 28'") or die(mysqli_error());
$c53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 29'") or die(mysqli_error());
$c54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 30'") or die(mysqli_error());
$c55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 31'") or die(mysqli_error());
$c56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 32'") or die(mysqli_error());
$c57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 33'") or die(mysqli_error());
$c58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 34'") or die(mysqli_error());
$c59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 35'") or die(mysqli_error());
$c60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 36'") or die(mysqli_error());
$c61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 37'") or die(mysqli_error());
$c62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 38'") or die(mysqli_error());
$c63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 39'") or die(mysqli_error());
$c64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 40'") or die(mysqli_error());
$c65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` <= 15 && `barangay` = 'Brgy 41'") or die(mysqli_error());
$c66 = $brgy41->fetch_array();


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





$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Abcasa'") or die(mysqli_error());
$a1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Alangilan'") or die(mysqli_error());
$a2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Alijis'") or die(mysqli_error());
$a3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Banago'") or die(mysqli_error());
$a4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Bata'") or die(mysqli_error());
$a5 = $bata->fetch_array();

$aabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Cabug'") or die(mysqli_error());
$a6 = $aabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Estefania'") or die(mysqli_error());
$a7 = $estefania->fetch_array();

$aelisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Felisa'") or die(mysqli_error());
$a8 = $aelisa->fetch_array();

$aranada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Granada'") or die(mysqli_error());
$a9 = $aranada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Handumanan'") or die(mysqli_error());
$a10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$a11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Mabini'") or die(mysqli_error());
$a12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Mandalagan'") or die(mysqli_error());
$a13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Mansilingan'") or die(mysqli_error());
$a14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Montevista'") or die(mysqli_error());
$a15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$a16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$a17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Singcang'") or die(mysqli_error());
$a18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Sumag'") or die(mysqli_error());
$a19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Taculing'") or die(mysqli_error());
$a20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Tangub'") or die(mysqli_error());
$a21 = $tangub->fetch_array();

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$a22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Villamonte'") or die(mysqli_error());
$a23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$a24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 1'") or die(mysqli_error());
$a26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 2'") or die(mysqli_error());
$a27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 3'") or die(mysqli_error());
$a28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 4'") or die(mysqli_error());
$a29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 5'") or die(mysqli_error());
$a30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 6'") or die(mysqli_error());
$a31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 7'") or die(mysqli_error());
$a32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 8'") or die(mysqli_error());
$a33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 9'") or die(mysqli_error());
$a34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 10'") or die(mysqli_error());
$a35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 11'") or die(mysqli_error());
$a36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 12'") or die(mysqli_error());
$a37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 13'") or die(mysqli_error());
$a38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 14'") or die(mysqli_error());
$a39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 15'") or die(mysqli_error());
$a40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 16'") or die(mysqli_error());
$a41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 17'") or die(mysqli_error());
$a42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 18'") or die(mysqli_error());
$a43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 19'") or die(mysqli_error());
$a44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 20'") or die(mysqli_error());
$a45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 21'") or die(mysqli_error());
$a46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 22'") or die(mysqli_error());
$a47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 23'") or die(mysqli_error());
$a48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 24'") or die(mysqli_error());
$a49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 25'") or die(mysqli_error());
$a50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 26'") or die(mysqli_error());
$a51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 27'") or die(mysqli_error());
$a52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 28'") or die(mysqli_error());
$a53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 29'") or die(mysqli_error());
$a54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 30'") or die(mysqli_error());
$a55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 31'") or die(mysqli_error());
$a56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 32'") or die(mysqli_error());
$a57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 33'") or die(mysqli_error());
$a58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 34'") or die(mysqli_error());
$a59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 35'") or die(mysqli_error());
$a60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 36'") or die(mysqli_error());
$a61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 37'") or die(mysqli_error());
$a62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 38'") or die(mysqli_error());
$a63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 39'") or die(mysqli_error());
$a64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 40'") or die(mysqli_error());
$a65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `age` >= 16 && `barangay` = 'Brgy 41'") or die(mysqli_error());
$a66 = $brgy41->fetch_array();


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

$aabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `gender` = 'Female' && `barangay` = 'Cabug'") or die(mysqli_error());
$h6 = $aabug->fetch_array();

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
