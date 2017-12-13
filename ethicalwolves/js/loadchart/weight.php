<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
$f = $q->fetch_array();
$q1 = $conn->query("SELECT `weight` FROM `clinical_findings` WHERE `patient_id` = '$_GET[id]'") or die (mysqli_error());
$f1 = $q1->fetch_array();
$qjan = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();


?>

<script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("weight",
                                       {
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            axisX: {		       
                gridDashType: "dot",
                gridThickness: 1,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            },
            axisY: { 
                title: "Weight in kg.", 
                includeZero: false,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            }, 

            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "Visit", y: <?php echo $f1['weight']?> }
                         ] 
                        }
                    ] 
                });

                chart.render();
                }
</script>
