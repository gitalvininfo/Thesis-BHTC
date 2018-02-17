<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `intensive_phase` where `patient_id` = '$_GET[id]' group by medicine_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['medicine_name'];
	$q1 = $conn->query("SELECT *, SUM(dosage)  AS total FROM (SELECT * FROM intensive_phase UNION SELECT * FROM continuation_phase ) as total WHERE `medicine_name` = '$R' && `patient_id` = '$_GET[id]'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['total']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript"> 
	window.onload = function(){

		$("#medicines_taken").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Monthly Population", 
			//exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Medicines and Dosages Taken During Treatment",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Intensive and Continuation Phase - 6 months"
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
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "bar", 
					//showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					//legendText: "<?php echo $f1['medicine_name']?>",
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points)?>
				}
					] 
				}); 
				}
</script>