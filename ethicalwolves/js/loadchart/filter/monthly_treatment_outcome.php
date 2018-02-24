<?php require "../../reports/require/load_monthly_treatment_outcome.php"?>
<script type="text/javascript"> 
	window.onload = function(){ 
	
		$("#treatment_outcome").CanvasJSChart({
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
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Cured",
					name: "Cured",
					dataPoints: [ 
						{ label: "January", y: <?php echo $c1['total']?> },
						 { label: "February", y: <?php echo $c2['total']?> },
						{ label: "March", y: <?php echo $c3['total']?> },
						 { label: "April", y: <?php echo $c4['total']?> },
						{ label: "May", y: <?php echo $c5['total']?> },
						 { label: "June", y: <?php echo $c6['total']?> },
						{ label: "July", y: <?php echo $c7['total']?> },
						 { label: "August", y: <?php echo $c8['total']?> },
						{ label: "September", y: <?php echo $c9['total']?> },
						 { label: "October", y: <?php echo $c10['total']?> },
						{ label: "November", y: <?php echo $c11['total']?> },
						 { label: "December", y: <?php echo $c12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Currently in Treatment",
					name: "Currently in Treatment",
					dataPoints: [ 
						{ label: "January", y: <?php echo $t1['total']?> },
						 { label: "February", y: <?php echo $t2['total']?> },
						{ label: "March", y: <?php echo $t3['total']?> },
						 { label: "April", y: <?php echo $t4['total']?> },
						{ label: "May", y: <?php echo $t5['total']?> },
						 { label: "June", y: <?php echo $t6['total']?> },
						{ label: "July", y: <?php echo $t7['total']?> },
						 { label: "August", y: <?php echo $t8['total']?> },
						{ label: "September", y: <?php echo $t9['total']?> },
						 { label: "October", y: <?php echo $t10['total']?> },
						{ label: "November", y: <?php echo $t11['total']?> },
						 { label: "December", y: <?php echo $t12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Died",
					name: "Died",
					dataPoints: [ 
						{ label: "January", y: <?php echo $d1['total']?> },
						 { label: "February", y: <?php echo $d2['total']?> },
						{ label: "March", y: <?php echo $d3['total']?> },
						 { label: "April", y: <?php echo $d4['total']?> },
						{ label: "May", y: <?php echo $d5['total']?> },
						 { label: "June", y: <?php echo $d6['total']?> },
						{ label: "July", y: <?php echo $d7['total']?> },
						 { label: "August", y: <?php echo $d8['total']?> },
						{ label: "September", y: <?php echo $d9['total']?> },
						 { label: "October", y: <?php echo $d10['total']?> },
						{ label: "November", y: <?php echo $d11['total']?> },
						 { label: "December", y: <?php echo $d12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Not Evaluated",
					name: "Not Evaluated",
					dataPoints: [ 
						{ label: "January", y: <?php echo $n1['total']?> },
						 { label: "February", y: <?php echo $n2['total']?> },
						{ label: "March", y: <?php echo $n3['total']?> },
						 { label: "April", y: <?php echo $n4['total']?> },
						{ label: "May", y: <?php echo $n5['total']?> },
						 { label: "June", y: <?php echo $n6['total']?> },
						{ label: "July", y: <?php echo $n7['total']?> },
						 { label: "August", y: <?php echo $n8['total']?> },
						{ label: "September", y: <?php echo $n9['total']?> },
						 { label: "October", y: <?php echo $n10['total']?> },
						{ label: "November", y: <?php echo $n11['total']?> },
						 { label: "December", y: <?php echo $n12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Lost to Follow-up",
					name: "Lost to Follow-up",
					dataPoints: [ 
						{ label: "January", y: <?php echo $l1['total']?> },
						 { label: "February", y: <?php echo $l2['total']?> },
						{ label: "March", y: <?php echo $l3['total']?> },
						 { label: "April", y: <?php echo $l4['total']?> },
						{ label: "May", y: <?php echo $l5['total']?> },
						 { label: "June", y: <?php echo $l6['total']?> },
						{ label: "July", y: <?php echo $l7['total']?> },
						 { label: "August", y: <?php echo $l8['total']?> },
						{ label: "September", y: <?php echo $l9['total']?> },
						 { label: "October", y: <?php echo $l10['total']?> },
						{ label: "November", y: <?php echo $l11['total']?> },
						 { label: "December", y: <?php echo $l12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Failed",
					name: "Failed",
					dataPoints: [ 
						{ label: "January", y: <?php echo $f1['total']?> },
						 { label: "February", y: <?php echo $f2['total']?> },
						{ label: "March", y: <?php echo $f3['total']?> },
						 { label: "April", y: <?php echo $f4['total']?> },
						{ label: "May", y: <?php echo $f5['total']?> },
						 { label: "June", y: <?php echo $f6['total']?> },
						{ label: "July", y: <?php echo $f7['total']?> },
						 { label: "August", y: <?php echo $f8['total']?> },
						{ label: "September", y: <?php echo $f9['total']?> },
						 { label: "October", y: <?php echo $f10['total']?> },
						{ label: "November", y: <?php echo $f11['total']?> },
						 { label: "December", y: <?php echo $f12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Treatment Completed",
					name: "Treatment Completed",
					dataPoints: [ 
						{ label: "January", y: <?php echo $tc1['total']?> },
						 { label: "February", y: <?php echo $tc2['total']?> },
						{ label: "March", y: <?php echo $tc3['total']?> },
						 { label: "April", y: <?php echo $tc4['total']?> },
						{ label: "May", y: <?php echo $tc5['total']?> },
						 { label: "June", y: <?php echo $tc6['total']?> },
						{ label: "July", y: <?php echo $tc7['total']?> },
						 { label: "August", y: <?php echo $tc8['total']?> },
						{ label: "September", y: <?php echo $tc9['total']?> },
						 { label: "October", y: <?php echo $tc10['total']?> },
						{ label: "November", y: <?php echo $tc11['total']?> },
						 { label: "December", y: <?php echo $tc12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>
