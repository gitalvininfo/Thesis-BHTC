<?php

$date = date("Y", strtotime("+ 8 HOURS"));
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$dssm = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `year` = '$date'") or die(mysqli_error());
$fetch1 = $dssm->fetch_array();
$xpert = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `year` = '$date'") or die(mysqli_error());
$fetch2 = $xpert->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#examination_category").CanvasJSChart({    
            title: { 
                text: "Total Number of Examinations Conducted as of <?php echo $date?>",
                fontSize: 20
            }, 
            axisY: { 
                title: "Examinations" 
            }, 
            legend :{ 
                verticalAlign: "center", 
                horizontalAlign: "left" 
            }, 
            data: [ 
                { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { label: "Direct Sputum Smear Microscopy",  y: 
                         <?php
    if($fetch1 == ""){
        echo 0;
    }else{
        echo $fetch1['total'];
    }	
                         ?>, legendText: "DSSM"},

                        { label: "Xpert MTB/RIF",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "XPERT"}

                    ] 
                } 
            ] 
        }); 
    } 
</script>