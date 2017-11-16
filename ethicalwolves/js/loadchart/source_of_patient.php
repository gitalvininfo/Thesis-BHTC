<?php

$date = date("Y", strtotime("+ 8 HOURS"));
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$phc = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Public Health Center' && `year` = '$date'") or die(mysqli_error());
$fetch1 = $phc->fetch_array();
$oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Other Government Facilities' && `year` = '$date'") or die(mysqli_error());
$fetch2 = $oth->fetch_array();
$pri = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Private Hospitals' && `year` = '$date'") or die(mysqli_error());
$fetch3 = $pri->fetch_array();
$com = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Community' && `year` = '$date'") or die(mysqli_error());
$fetch4 = $com->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#source_of_patient").CanvasJSChart({
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Source of Patient", 
            exportEnabled: true,
            title: { 
                text: "Source of Patient as of <?php echo $date?>",
                fontSize: 20
            }, 
            axisY: { 
                title: "Source of Patient" 
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
                        { label: "Public Health Center",  y: 
                         <?php
    if($fetch1 == ""){
        echo 0;
    }else{
        echo $fetch1['total'];
    }	
                         ?>, legendText: "Public Health Center"},

                        { label: "Other Government Facilities/Hospitals",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "Other Government Facilities/Hospitals"},
                        
                        { label: "Private Hospitals/Clinics/Physicians/NGO's",  y: 
                         <?php 
                         if($fetch3 == ""){
                             echo 0;
                         }else{
                             echo $fetch3['total'];
                         }	
                         ?>, legendText: "Private Hospitals/Clinics/Physicians/NGO's"},
                        
                        { label: "Community",  y: 
                         <?php 
                         if($fetch4 == ""){
                             echo 0;
                         }else{
                             echo $fetch4['total'];
                         }	
                         ?>, legendText: "Community"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>