<?php 
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

?>
<script type="text/javascript">
    window.onload = function() {
        $("#gender").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            //exportFileName: "Male and Female Registration", 
            //exportEnabled: true,
            title: { 
                text: "Male and Female Registration as of Year <?php echo $year?>",
                fontSize: 20
            },
            axisY: { 
                title: "Registration" 
            }, 
            legend :{ 
                verticalAlign: "center", 
                horizontalAlign: "left",
                cursor: "pointer",

            }, 
            data: [ 
                { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { label: "Male",  y: 
                         <?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['total'];
    }	
                         ?>, legendText: "Male"},
                        

                        { label: "Female",  y: 
                         <?php 
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "Female"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>