<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$intp = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` WHERE `remarks` = 'Present' && `patient_id` = '$_GET[id]'") or die(mysqli_error());
$f1 = $intp->fetch_array();

$inta = $conn->query("SELECT COUNT(*) as total FROM `intensive_phase_ipt` WHERE `remarks` = 'Absent' && `patient_id` = '$_GET[id]'") or die(mysqli_error());
$f3 = $inta->fetch_array();
?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#intensive_ipt").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Intensive Phase Treatment", 
			exportEnabled: true,
			title: { 
                text: "Intensive Phase",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Present and Missed Date of Drug Intake of <?php echo $_GET['name']?>"
                }
            ],
			legend: {
				cursor: "pointer",
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
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
				includeZero: true,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				},
				title: "Number of Days"
			}, 
			data: [ 
				{ 
					type: "stackedBar",
					showInLegend: true, 
					legendText: "Present",
					color: "#95B75D",
					dataPoints: [ 
						{label: "Present", y: <?php echo $f1['total']?> }
						 ] 
						},
						{        
							type: "stackedBar",
							showInLegend: true, 
							legendText: "Missed",
							color:"#ff5050",
							dataPoints: [
								{label: "Missed", y: <?php echo $f3['total']?> }
								 ]
								}
							] 
						});
						}
</script>