<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$pul = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $pul->fetch_array();
$ext = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $ext->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#classification_of_tb").CanvasJSChart({
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "TB Classification", 
            exportEnabled: true,
            title: { 
                text: "Classification of Tuberculosis as of Year <?php echo $year?>",
                fontSize: 20
            }, 
            axisY: { 
                title: "Classification of Tuberculosis" 
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
                        { label: "Pulmonary",  y: 
                         <?php
    if($fetch1 == ""){
        echo 0;
    }else{
        echo $fetch1['total'];
    }	
                         ?>, legendText: "Pulmonary"},

                        { label: "Extra-Pulmonary",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "Extra-Pulmonary"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>