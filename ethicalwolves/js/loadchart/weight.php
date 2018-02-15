<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `clinical_findings` where `patient_id` = '$_GET[id]' group by date_visited") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['weight'];
	$q1 = $conn->query("SELECT * FROM `clinical_findings` WHERE `weight` = '$R'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['weight']);
	$point = array('label' => $R, 'y' => $FR);
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
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Weight Progress ka mango",
				fontSize: 20
			},
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
				title: "Products", 
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			},
			axisY: { 
				title: "Total Number of Purchase", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			},
			data: [ 
				{ 
					type: "bar", 
					//showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					//legendText: "<?php echo $f1['weight']?>",
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points); ?>
				}
					] 
				}); 
				}
</script>