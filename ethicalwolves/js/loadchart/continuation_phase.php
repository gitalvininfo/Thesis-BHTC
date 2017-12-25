<?php

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$pre = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` WHERE `remarks` = 'Present' && `patient_id` = '$_GET[id]'") or die(mysqli_error());
$f1 = $pre->fetch_array();
$abs = $conn->query("SELECT COUNT(*) as total FROM `continuation_phase` WHERE `remarks` = 'Absent' && `patient_id` = '$_GET[id]'") or die(mysqli_error());
$f2 = $abs->fetch_array();?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#continuation").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Population", 
            exportEnabled: true,
            title: { 
                text: "Present and Missed Date of Drug Intake - Continuation Phase",
                fontSize: 15
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
                    type: "doughnut", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "Present",  y: 
                         <?php
                         if($f1 == ""){
                             echo 0;
                         }else{
                             echo $f1['total'];
                         }	
                         ?>, legendText: "Present"},
                        { label: "Absent",  y: 
                         <?php
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "Absent"},
                    ] 
                }
            ] 
        }); 
    }
</script>