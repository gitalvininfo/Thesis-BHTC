<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$xpert = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'T' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $xpert->fetch_array();
$xpert2 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'RR' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $xpert2->fetch_array();
$xpert3 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'TI' && `year` = '$year'") or die(mysqli_error());
$fetch3 = $xpert3->fetch_array();
$xpert4 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'N' && `year` = '$year'") or die(mysqli_error());
$fetch4 = $xpert4->fetch_array();
$xpert5 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'I' && `year` = '$year'") or die(mysqli_error());
$fetch5 = $xpert5->fetch_array();

?>

<script type="text/javascript"> 
    window.onload = function() { 
        $("#xpert").CanvasJSChart({
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "XPERT", 
            exportEnabled: true,
            title: { 
                text: "Xpert MTB/RIF Results as of Year <?php echo $year?>",
                fontSize: 22
            }, 
            axisY: { 
                title: "DSSM" 
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
                        { label: "[T] - MTB detected, Rifampicin resistance not detected",  y: 
                         <?php
    if($fetch1 == ""){
        echo 0;
    }else{
        echo $fetch1['total'];
    }	
                         ?>, legendText: "[T] - MTB detected, Rifampicin resistance not detected"},

                        { label: "[RR] - MTB detected, Rifampicin resistance detected",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "[RR] - MTB detected, Rifampicin resistance detected"},

                        { label: "[TI] - MTB detected, Rifampicin resistance indeterminate",  y: 
                         <?php 
                         if($fetch3 == ""){
                             echo 0;
                         }else{
                             echo $fetch3['total'];
                         }	
                         ?>, legendText: "[TI] - MTB detected, Rifampicin resistance indeterminate"},

                        { label: "[N] - MTB not detected",  y: 
                         <?php 
                         if($fetch4 == ""){
                             echo 0;
                         }else{
                             echo $fetch4['total'];
                         }	
                         ?>, legendText: "[N] - MTB not detected"},

                        { label: "Invalid / No Result",  y: 
                         <?php 
                         if($fetch5 == ""){
                             echo 0;
                         }else{
                             echo $fetch5['total'];
                         }	
                         ?>, legendText: "[I] - Invalid / No Result"},


                    ] 
                } 
            ] 
        }); 
    } 
</script>