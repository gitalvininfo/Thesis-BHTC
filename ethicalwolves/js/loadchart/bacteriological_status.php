<?php

$date = date("Y", strtotime("+ 8 HOURS"));
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$bs = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$date'") or die(mysqli_error());
$fetch1 = $bs->fetch_array();
$cd = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$date'") or die(mysqli_error());
$fetch2 = $cd->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#bacteriological_status").CanvasJSChart({
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Bacteriological Status", 
            exportEnabled: true,
            title: { 
                text: "Patient Bacteriological Status as of <?php echo $date?>",
                fontSize: 20
            }, 
            axisY: { 
                title: "Bacteriological Status" 
            }, 
            legend :{ 
                verticalAlign: "center", 
                horizontalAlign: "left" 
            }, 
            data: [ 
                { 
                    type: "doughnut", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { label: "Bacteriologically Confirmed",  y: 
                         <?php
                        if($fetch1 == ""){
                        echo 0;
                            }else{
                                echo $fetch1['total'];
                        }	
                         ?>, legendText: "Bacteriologically Confirmed"},

                        { label: "Clinically Diagnosed",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "Clinically Diagnosed"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>