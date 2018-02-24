<?php require "../../reports/require/load_quarter_treatment_outcome.php"?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#line").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Treatment Outcome", 
			//exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Treatment Outcome - Year <?php echo $year?>"
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
				title: "Number of Patients", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Cured",
					name: "Cured",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $c1['total']?> },
						 { label: "Quarter2", y: <?php echo $c2['total']?> },
						{ label: "Quarter3", y: <?php echo $c3['total']?> },
						 { label: "Quarter4", y: <?php echo $c4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Currently in Treatment",
					name: "Currently in Treatment",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $t1['total']?> },
						 { label: "Quarter2", y: <?php echo $t2['total']?> },
						{ label: "Quarter3", y: <?php echo $t3['total']?> },
						 { label: "Quarter4", y: <?php echo $t4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Died",
					name: "Died",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $d1['total']?> },
						 { label: "Quarter2", y: <?php echo $d2['total']?> },
						{ label: "Quarter3", y: <?php echo $d3['total']?> },
						 { label: "Quarter4", y: <?php echo $d4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Not Evaluated",
					name: "Not Evaluated",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $n1['total']?> },
						 { label: "Quarter2", y: <?php echo $n2['total']?> },
						{ label: "Quarter3", y: <?php echo $n3['total']?> },
						 { label: "Quarter4", y: <?php echo $n4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Lost tol Follow-up",
					name: "Lost tol Follow-up",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $l1['total']?> },
						 { label: "Quarter2", y: <?php echo $l2['total']?> },
						{ label: "Quarter3", y: <?php echo $l3['total']?> },
						 { label: "Quarter4", y: <?php echo $l4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Failed",
					name: "Failed",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $f1['total']?> },
						 { label: "Quarter2", y: <?php echo $f2['total']?> },
						{ label: "Quarter3", y: <?php echo $f3['total']?> },
						 { label: "Quarter4", y: <?php echo $f4['total']?> }
					] 
				},
				{ 
					type: "line",
					showInLegend: true, 
					legendText: "Treatment Completed",
					name: "Treatment Completed",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $tc1['total']?> },
						 { label: "Quarter2", y: <?php echo $tc2['total']?> },
						{ label: "Quarter3", y: <?php echo $tc3['total']?> },
						 { label: "Quarter4", y: <?php echo $tc4['total']?> }
					] 
				}
			] 
		}); 
	}
</script>