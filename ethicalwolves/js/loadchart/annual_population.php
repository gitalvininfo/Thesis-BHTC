<?php
$year = date('Y');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$2016'") or die(mysqli_error());
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

?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#annual_population").CanvasJSChart({
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
            axisY: { 
                title: "Total Population", 
                includeZero: false 
            }, 
            data: [ 
                { 
                    type: "spline", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "2016", y: <?php echo $fetch1['total']?> },
                         { label: "2017", y: <?php echo $fetch2['total']?> },
                        { label: "2018", y: <?php echo $fetch3['total']?> },
                         { label: "2019", y: <?php echo $fetch4['total']?> },
                        { label: "2020", y: <?php echo $fetch5['total']?> },
                         { label: "2021", y: <?php echo $fetch6['total']?> },
                        { label: "2022", y: <?php echo $fetch7['total']?> },
                         ] 
                        } 
                    ] 
                }); 
                }
</script>