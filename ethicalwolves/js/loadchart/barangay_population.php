<?php
$year = date("Y", strtotime("+8 HOURS"));
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
                text: "TB Patient Population Per Barangay as of Year <?php echo $year?>",
                fontSize: 20
            },
            axisY: { 
                title: "", 
                includeZero: false 
            },
            data: [ 
                { 
                    type: "column",
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "Abcasa", y: <?php echo $fetch1['total']?> }, 
                         { label: "Alangilan", y: <?php echo $fetch2['total']?> },
                        { label: "Alijis", y: <?php echo $fetch3['total']?> },
                         { label: "Banago", y: <?php echo $fetch4['total']?> },
                        { label: "Bata", y: <?php echo $fetch5['total']?> },
                         { label: "Cabug", y: <?php echo $fetch6['total']?> },
                        { label: "Estefania", y: <?php echo $fetch7['total']?> },
                         { label: "Felisa", y: <?php echo $fetch8['total']?> },
                        { label: "Granada", y: <?php echo $fetch9['total']?> },
                         { label: "Handumanan", y: <?php echo $fetch10['total']?> },
                        { label: "Lopez Jaena", y: <?php echo $fetch11['total']?> },
                         { label: "Mabini", y: <?php echo $fetch12['total']?> },
                        { label: "Mandalagan", y: <?php echo $fetch13['total']?> },
                         { label: "Mansilingan", y: <?php echo $fetch14['total']?> },
                        { label: "Montevista", y: <?php echo $fetch15['total']?> },
                         { label: "Pahanocoy", y: <?php echo $fetch16['total']?> },
                        { label: "Punta Taytay", y: <?php echo $fetch17['total']?> },
                         { label: "Singcang", y: <?php echo $fetch18['total']?> },
                        { label: "Sum-ag", y: <?php echo $fetch19['total']?> },
                         { label: "Taculing", y: <?php echo $fetch20['total']?> },
                        { label: "Tangub", y: <?php echo $fetch21['total']?> },
                         { label: "Villa Esperanza", y: <?php echo $fetch22['total']?> },
                        { label: "Villamonte", y: <?php echo $fetch23['total']?> },
                         { label: "Vista Alegre", y: <?php echo $fetch24['total']?> }

                    ] 
                } 
            ] 
        }); 
    }
</script>