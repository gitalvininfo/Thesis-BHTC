<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$cured = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Cured' && `year` = '$year'") or die(mysqli_error());
$f1 = $cured->fetch_array();
$tc = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Treatment Completed' && `year` = '$year'") or die(mysqli_error());
$f2 = $tc->fetch_array();
$died = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Died' && `year` = '$year'") or die(mysqli_error());
$f3 = $died->fetch_array();
$failed = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Failed' && `year` = '$year'") or die(mysqli_error());
$f4 = $failed->fetch_array();
$lf = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Lost to Follow-up' && `year` = '$year'") or die(mysqli_error());
$f5 = $lf->fetch_array();
$ne = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Not Evaluated' && `year` = '$year'") or die(mysqli_error());
$f6 = $ne->fetch_array();
$ec = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Excluded from Cohort' && `year` = '$year'") or die(mysqli_error());
$f7 = $ec->fetch_array();
$ct = $conn->query("SELECT COUNT(*) as total FROM `treatment_record` WHERE `status` = 'Currently in Treatment' && `year` = '$year'") or die(mysqli_error());
$f8 = $ct->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#treatment_outcome").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Treatment Outcome", 
            exportEnabled: true,
            title: { 
                text: "Treatment Outcome as of Year <?php echo $year?>",
                fontSize: 20
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
                title: "Number of Patients", 
                includeZero: false,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            }, 
            data: [ 
                { 
                    type: "bar", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "Cured", y: <?php echo $f1['total']?> },
                         { label: "Treatment Completed", y: <?php echo $f2['total']?> },
                        { label: "Died", y: <?php echo $f3['total']?> },
                         { label: "Failed", y: <?php echo $f4['total']?> },
                        { label: "Lost to Follow-up", y: <?php echo $f5['total']?> },
                         { label: "Not Evaluated", y: <?php echo $f6['total']?> },
                        { label: "Excluded from Cohort", y: <?php echo $f7['total']?> },
                         { label: "Currently in Treatment", y: <?php echo $f8['total']?> }
                    ] 
                }
            ] 
        }); 
    }
</script>