<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT `weight` FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#show_weight").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            title: { 
                text: "Patient Weight Progress",
                fontSize: 20
            }, 
            axisY: { 
                title: "Patient Weight", 
                includeZero: false 
            }, 
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "Weight", y: <?php echo $fetch['weight']?> }
                        
                    ] 
                } 
            ] 
        }); 
    }
</script>