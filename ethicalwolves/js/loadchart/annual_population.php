<?php
$year = date('Y');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2013'") or die(mysqli_error());
$fetch11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2014'") or die(mysqli_error());
$fetch12 = $q12->fetch_array();
$q13 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2015'") or die(mysqli_error());
$fetch13 = $q13->fetch_array();
$q1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2016'") or die(mysqli_error());
$fetch1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2017'") or die(mysqli_error());
$fetch2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2018'") or die(mysqli_error());
$fetch3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2019'") or die(mysqli_error());
$fetch4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2020'") or die(mysqli_error());
$fetch5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2021'") or die(mysqli_error());
$fetch6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2022'") or die(mysqli_error());
$fetch7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2023'") or die(mysqli_error());
$fetch8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2024'") or die(mysqli_error());
$fetch9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2025'") or die(mysqli_error());
$fetch10 = $q10->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#annual_population").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Annual Patient Population", 
            exportEnabled: true,
            title: { 
                text: "Patient Annual Population",
                fontSize: 20
            },
            axisX: {		       
                gridDashType: "dot",
                gridThickness: 1,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            },
            axisY: { 
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            }, 
            data: [ 
                { 
                    type: "splineArea", 
                    toolTipContent: "{label}: {y}",
                    color:"#DB9079",
                    markerType: "cross",
                    dataPoints: [ 
                        { label: "2013", y: <?php echo $fetch11['total']?> },
                         { label: "2014", y: <?php echo $fetch12['total']?> },
                        { label: "2015", y: <?php echo $fetch13['total']?> },
                         { label: "2016", y: <?php echo $fetch1['total']?> },
                        { label: "2017", y: <?php echo $fetch2['total']?> },
                         { label: "2018", y: <?php echo $fetch3['total']?> },
                        { label: "2019", y: <?php echo $fetch4['total']?> },
                         { label: "2020", y: <?php echo $fetch5['total']?> },
                        { label: "2021", y: <?php echo $fetch6['total']?> },
                         { label: "2022", y: <?php echo $fetch7['total']?> },
                        { label: "2023", y: <?php echo $fetch8['total']?> },
                         { label: "2024", y: <?php echo $fetch9['total']?> },
                        { label: "2025", y: <?php echo $fetch10['total']?> },
                         ] 
                        } 
                    ] 
                }); 
                }
</script>