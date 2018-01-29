<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Abcasa'") or die(mysqli_error());
$fetch1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Alangilan'") or die(mysqli_error());
$fetch2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Alijis'") or die(mysqli_error());
$fetch3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Banago'") or die(mysqli_error());
$fetch4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Bata'") or die(mysqli_error());
$fetch5 = $bata->fetch_array();

$cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Cabug'") or die(mysqli_error());
$fetch6 = $cabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Estefania'") or die(mysqli_error());
$fetch7 = $estefania->fetch_array();

$felisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Felisa'") or die(mysqli_error());
$fetch8 = $felisa->fetch_array();

$granada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Granada'") or die(mysqli_error());
$fetch9 = $granada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Handumanan'") or die(mysqli_error());
$fetch10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$fetch11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mabini'") or die(mysqli_error());
$fetch12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mandalagan'") or die(mysqli_error());
$fetch13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Mansilingan'") or die(mysqli_error());
$fetch14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Montevista'") or die(mysqli_error());
$fetch15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$fetch16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$fetch17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Singcang'") or die(mysqli_error());
$fetch18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Sumag'") or die(mysqli_error());
$fetch19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Taculing'") or die(mysqli_error());
$fetch20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Tangub'") or die(mysqli_error());
$fetch21 = $tangub->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Villamonte'") or die(mysqli_error());
$fetch23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$fetch24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 1'") or die(mysqli_error());
$fetch26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 2'") or die(mysqli_error());
$fetch27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 3'") or die(mysqli_error());
$fetch28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 4'") or die(mysqli_error());
$fetch29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 5'") or die(mysqli_error());
$fetch30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 6'") or die(mysqli_error());
$fetch31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 7'") or die(mysqli_error());
$fetch32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 8'") or die(mysqli_error());
$fetch33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 9'") or die(mysqli_error());
$fetch34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 10'") or die(mysqli_error());
$fetch35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 11'") or die(mysqli_error());
$fetch36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 12'") or die(mysqli_error());
$fetch37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 13'") or die(mysqli_error());
$fetch38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 14'") or die(mysqli_error());
$fetch39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 15'") or die(mysqli_error());
$fetch40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 16'") or die(mysqli_error());
$fetch41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 17'") or die(mysqli_error());
$fetch42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 18'") or die(mysqli_error());
$fetch43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 19'") or die(mysqli_error());
$fetch44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 20'") or die(mysqli_error());
$fetch45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 21'") or die(mysqli_error());
$fetch46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 22'") or die(mysqli_error());
$fetch47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 23'") or die(mysqli_error());
$fetch48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 24'") or die(mysqli_error());
$fetch49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 25'") or die(mysqli_error());
$fetch50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 26'") or die(mysqli_error());
$fetch51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 27'") or die(mysqli_error());
$fetch52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 28'") or die(mysqli_error());
$fetch53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 29'") or die(mysqli_error());
$fetch54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 30'") or die(mysqli_error());
$fetch55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 31'") or die(mysqli_error());
$fetch56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 32'") or die(mysqli_error());
$fetch57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 33'") or die(mysqli_error());
$fetch58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 34'") or die(mysqli_error());
$fetch59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 35'") or die(mysqli_error());
$fetch60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 36'") or die(mysqli_error());
$fetch61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 37'") or die(mysqli_error());
$fetch62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 38'") or die(mysqli_error());
$fetch63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 39'") or die(mysqli_error());
$fetch64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 40'") or die(mysqli_error());
$fetch65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Brgy 41'") or die(mysqli_error());
$fetch22 = $brgy41->fetch_array();


?>