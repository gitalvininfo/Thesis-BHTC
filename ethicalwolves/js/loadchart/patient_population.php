<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$qjan = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();

$c1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();

$a1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Jan' && registration.year = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Feb' && registration.year = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Mar' && registration.year = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Apr' && registration.year = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'May' && registration.year = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Jun' && registration.year = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Jul' && registration.year = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Aug' && registration.year = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Sep' && registration.year = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Oct' && registration.year = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Nov' && registration.year = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.month = 'Dec' && registration.year = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();

?>

<script type="text/javascript"> 
	window.onload = function(){ 
		$("#patient_population").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Monthly Population", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Monthly Population - Year <?php echo $year?>"
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
				title: "Total Population", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			}, 
			data: [ 
				{ 
					type: "column", 
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Total Patients this month",
					markerType: "cross",
					color: "#7f7f7f",
					dataPoints: [ 
						{ label: "January", y: <?php echo $fjan['total']?> },
						 { label: "February", y: <?php echo $ffeb['total']?> },
						{ label: "March", y: <?php echo $fmar['total']?> },
						 { label: "April", y: <?php echo $fapr['total']?> },
						{ label: "May", y: <?php echo $fmay['total']?> },
						 { label: "June", y: <?php echo $fjun['total']?> },
						{ label: "July", y: <?php echo $fjul['total']?> },
						 { label: "August", y: <?php echo $faug['total']?> },
						{ label: "September", y: <?php echo $fsep['total']?> },
						 { label: "October", y: <?php echo $foct['total']?> },
						{ label: "November", y: <?php echo $fnov['total']?> },
						 { label: "December", y: <?php echo $fdec['total']?> }
					] 
				},

				{ 
					type: "splineArea", 
					showInLegend: true, 
					legendText: "Children",
					name: "Children", 
					markerType: "cross",
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
						 { label: "October", y: <?php echo $c10['total']?>},
						{ label: "November", y: <?php echo $c11['total']?> },
						 { label: "December", y: <?php echo $c12['total']?> }
					] 
				},
				{ 
					type: "spline", 
					showInLegend: true, 
					legendText: "Adult",
					name: "Adult",
					markerType: "cross",
					dataPoints: [ 
						{ label: "January", y: <?php echo $a1['total']?> },
						 { label: "February", y: <?php echo $a2['total']?> },
						{ label: "March", y: <?php echo $a3['total']?> },
						 { label: "April", y: <?php echo $a4['total']?> },
						{ label: "May", y: <?php echo $a5['total']?> },
						 { label: "June", y: <?php echo $a6['total']?> },
						{ label: "July", y: <?php echo $a7['total']?> },
						 { label: "August", y: <?php echo $a8['total']?> },
						{ label: "September", y: <?php echo $a9['total']?> },
						 { label: "October", y: <?php echo $a10['total']?>},
						{ label: "November", y: <?php echo $a11['total']?> },
						 { label: "December", y: <?php echo $a12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>