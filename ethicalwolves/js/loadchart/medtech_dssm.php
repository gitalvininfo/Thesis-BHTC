<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$dssm = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Positive' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $dssm->fetch_array();
$dssm2 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Negative' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $dssm2->fetch_array();
?>

<script type="text/javascript"> 
    window.onload = function() { 
        $("#dssm").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "DSSM", 
            exportEnabled: true,
            title: { 
                text: "Direct Sputum Smear Microscopy Results as of Year <?php echo $year?>",
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
                        { label: "Positive",  y: 
                         <?php
                         if($fetch1 == ""){
                            echo 0;
                            }else{
                            echo $fetch1['total'];
                        }	
                         ?>, legendText: "Positive"},

                        { label: "Negative",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "Negative"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>