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

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered' && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$fetch22 = $villaesperanza->fetch_array();

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

$grandtotal = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` =  '$year' && `status` = 'Registered'") or die(mysqli_error());
$fetch25 = $grandtotal->fetch_array();
?>
<script type="text/javascript"> 
    window.onload = function(){ 

        $("#barangay_population").CanvasJSChart({
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "TB Patient Population per Barangay", 
            exportEnabled: true,
            title: { 
                text: "TB Patient Population Per Barangay as of Year <?php echo $year. " | Total: " .$fetch25['total']?> TB patients",
                fontSize: 20
            },
            axisY: { 
                title: "", 
                includeZero: false 
            },
            axisX:{
                interval: 100
            },
            data: [ 
                { 
                    type: "column",

                    dataPoints: [ 
                        { label: " Brgy. Abcasa", x:70, y: <?php echo $fetch1['total']?>}, 
                         { label: " Brgy. Alangilan", y: <?php echo $fetch2['total']?> },
                        { label: " Brgy. Alijis", y: <?php echo $fetch3['total']?> },
                         { label: " Brgy. Banago", y: <?php echo $fetch4['total']?> },
                        { label: " Brgy. Bata", y: <?php echo $fetch5['total']?> },
                         { label: " Brgy. Cabug", y: <?php echo $fetch6['total']?> },
                        { label: " Brgy. Estefania", y: <?php echo $fetch7['total']?> },
                         { label: " Brgy. Felisa", y: <?php echo $fetch8['total']?> },
                        { label: " Brgy. Granada", y: <?php echo $fetch9['total']?> },
                         { label: " Brgy. Handumanan", y: <?php echo $fetch10['total']?> },
                        { label: " Brgy. Lopez Jaena", y: <?php echo $fetch11['total']?> },
                         { label: " Brgy. Mabini", y: <?php echo $fetch12['total']?> },
                        { label: " Brgy. Mandalagan", y: <?php echo $fetch13['total']?> },
                         { label: " Brgy. Mansilingan", y: <?php echo $fetch14['total']?> },
                        { label: " Brgy. Montevista", y: <?php echo $fetch15['total']?> },
                         { label: " Brgy. Pahanocoy", y: <?php echo $fetch16['total']?> },
                        { label: " Brgy. Punta Taytay", y: <?php echo $fetch17['total']?> },
                         { label: " Brgy. Singcang", y: <?php echo $fetch18['total']?> },
                        { label: " Brgy. Sum-ag", y: <?php echo $fetch19['total']?> },
                         { label: " Brgy. Taculing", y: <?php echo $fetch20['total']?> },
                        { label: " Brgy. Tangub", y: <?php echo $fetch21['total']?> },
                         { label: " Brgy. Villa Esperanza", y: <?php echo $fetch22['total']?> },
                        { label: " Brgy. Villamonte", y: <?php echo $fetch23['total']?> },
                         { label: " Brgy. Vista Alegre", y: <?php echo $fetch24['total']?> },
                        { label: " Brgy. 1", y: <?php echo $fetch26['total']?> },
                         { label: " Brgy. 2", y: <?php echo $fetch27['total']?> },
                        { label: " Brgy. 3", y: <?php echo $fetch28['total']?> },
                         { label: " Brgy. 4", y: <?php echo $fetch29['total']?> },
                        { label: " Brgy. 5", y: <?php echo $fetch30['total']?> },
                         { label: " Brgy. 6", y: <?php echo $fetch31['total']?> },
                        { label: " Brgy. 7", y: <?php echo $fetch32['total']?> },
                         { label: " Brgy. 8", y: <?php echo $fetch33['total']?> },
                        { label: " Brgy. 9", y: <?php echo $fetch34['total']?> },
                         { label: " Brgy. 10", y: <?php echo $fetch35['total']?> },
                        { label: " Brgy. 11", y: <?php echo $fetch36['total']?> },
                         { label: " Brgy. 12", y: <?php echo $fetch37['total']?> },
                        { label: " Brgy. 13", y: <?php echo $fetch38['total']?> },
                         { label: " Brgy. 14", y: <?php echo $fetch39['total']?> },
                        { label: " Brgy. 15", y: <?php echo $fetch40['total']?> },
                         { label: " Brgy. 16", y: <?php echo $fetch41['total']?> },
                        { label: " Brgy. 17", y: <?php echo $fetch42['total']?> },
                         { label: " Brgy. 18", y: <?php echo $fetch43['total']?> },
                        { label: " Brgy. 19", y: <?php echo $fetch44['total']?> },
                         { label: " Brgy. 20", y: <?php echo $fetch45['total']?> },
                        { label: " Brgy. 21", y: <?php echo $fetch46['total']?> },
                         { label: " Brgy. 22", y: <?php echo $fetch47['total']?> },
                        { label: " Brgy. 23", y: <?php echo $fetch48['total']?> },
                         { label: " Brgy. 24", y: <?php echo $fetch49['total']?> },
                        { label: " Brgy. 25", y: <?php echo $fetch50['total']?> },
                         { label: " Brgy. 26", y: <?php echo $fetch51['total']?> },
                        { label: " Brgy. 27", y: <?php echo $fetch52['total']?> },
                         { label: " Brgy. 28", y: <?php echo $fetch53['total']?> },
                        { label: " Brgy. 29", y: <?php echo $fetch54['total']?> },
                         { label: " Brgy. 30", y: <?php echo $fetch55['total']?> },
                        { label: " Brgy. 31", y: <?php echo $fetch56['total']?> },
                         { label: " Brgy. 32", y: <?php echo $fetch57['total']?> },
                        { label: " Brgy. 33", y: <?php echo $fetch58['total']?> },
                         { label: " Brgy. 34", y: <?php echo $fetch59['total']?> },
                        { label: " Brgy. 35", y: <?php echo $fetch60['total']?> },
                         { label: " Brgy. 36", y: <?php echo $fetch61['total']?> },
                        { label: " Brgy. 37", y: <?php echo $fetch62['total']?> },
                         { label: " Brgy. 38", y: <?php echo $fetch63['total']?> },
                        { label: " Brgy. 39", y: <?php echo $fetch64['total']?> },
                         { label: " Brgy. 40", y: <?php echo $fetch65['total']?> },



                    ] 
                } 
            ] 
        }); 
    }
</script>