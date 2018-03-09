<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `clinical_findings_ipt` where `patient_id` = '$_GET[id]'") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$d = $result['date_visited'];
	$R = $result['weight'];
	$q1 = $conn->query("SELECT * FROM `clinical_findings_ipt` WHERE `weight` = '$R' && `patient_id` = '$_GET[id]' order by clinical_id DESC") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['weight']);
	$point = array('label' => $d, 'y' => $FR );
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript"> 
	window.onload = function(){

		$("#weight").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Available Stocks", 
			//exportEnabled: true,
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
				interval: 1,
				title: "Date Visited", 
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			},
			axisY: { 
				title: "Weight in Kgs.", 
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "line", 
					color: "#1caf9a",
					markerType: "cross",
					//showInLegend: true, 
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points); ?>
				}
					] 
				}); 
				}
</script>