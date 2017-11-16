<?php

$date = date("Y", strtotime("+ 8 HOURS"));
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$new = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New' && `year` = '$date'") or die(mysqli_error());
$fetch3 = $new->fetch_array();
$relapse = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse' && `year` = '$date'") or die(mysqli_error());
$fetch4 = $relapse->fetch_array();
$talf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'TALF' && `year` = '$date'") or die(mysqli_error());
$fetch5 = $talf->fetch_array();
$taf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Treatment After Failure' && `year` = '$date'") or die(mysqli_error());
$fetch6 = $taf->fetch_array();
$ptou = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'PTOU' && `year` = '$date'") or die(mysqli_error());
$fetch7 = $ptou->fetch_array();
$tra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Transfer-in' && `year` = '$date'") or die(mysqli_error());
$fetch8 = $tra->fetch_array();
$oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Others' && `year` = '$date'") or die(mysqli_error());
$fetch9 = $oth->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() {

        $("#registration_group").CanvasJSChart({
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "TB Patient Registration Group", 
            exportEnabled: true,
            title: { 
                text: "Patient Registration Group as of <?php echo $date?>",
                fontSize: 20
            },
            exportFileName: "TB Patient Population per Barangay", 
            exportEnabled: true,
            axisY: { 
                title: "Registration" 
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
                        { label: "New",  y: 
                         <?php
    if($fetch3 == ""){
        echo 0;
    }else{
        echo $fetch3['total'];
    }	
                         ?>, legendText: "New"},

                        { label: "Relapse",  y: 
                         <?php 
                         if($fetch4 == ""){
                             echo 0;
                         }else{
                             echo $fetch4['total'];
                         }	
                         ?>, legendText: "Relapse"},

                        { label: "Treatment After Loss Follow-up",  y: 
                         <?php 
                         if($fetch5 == ""){
                             echo 0;
                         }else{
                             echo $fetch5['total'];
                         }	
                         ?>, legendText: "Treatment After Loss Follow-up"}, 

                        { label: "Treatment After Failure",  y: 
                         <?php 
                         if($fetch6 == ""){
                             echo 0;
                         }else{
                             echo $fetch6['total'];
                         }	
                         ?>, legendText: "Treatment After Failure"},

                        { label: "PTOU",  y: 
                         <?php 
                         if($fetch7 == ""){
                             echo 0;
                         }else{
                             echo $fetch7['total'];
                         }	
                         ?>, legendText: "PTOU"}, 

                        { label: "Transfer-in",  y: 
                         <?php 
                         if($fetch8 == ""){
                             echo 0;
                         }else{
                             echo $fetch8['total'];
                         }	
                         ?>, legendText: "Transfer-in"}, 

                        { label: "Others",  y: 
                         <?php 
                         if($fetch9 == ""){
                             echo 0;
                         }else{
                             echo $fetch9['total'];
                         }	
                         ?>, legendText: "Others"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>