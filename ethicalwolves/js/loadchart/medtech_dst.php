<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$isoniazid = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f1 = $isoniazid->fetch_array();
$rifampicin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f2 = $rifampicin->fetch_array();
$ethambutol = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f3 = $ethambutol->fetch_array();
$streptomycin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f4 = $streptomycin->fetch_array();
$pyrazinamide = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f5 = $pyrazinamide->fetch_array();
$levofloxacin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f6 = $levofloxacin->fetch_array();
$kanamycin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f7 = $kanamycin->fetch_array();
$amikacin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f8 = $amikacin->fetch_array();
$capreomycin = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
$f9 = $capreomycin->fetch_array();

$isoniazid2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f10 = $isoniazid2->fetch_array();
$rifampicin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f11 = $rifampicin2->fetch_array();
$ethambutol2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f12 = $ethambutol2->fetch_array();
$streptomycin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f13 = $streptomycin2->fetch_array();
$pyrazinamide2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f14 = $pyrazinamide2->fetch_array();
$levofloxacin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f15 = $levofloxacin2->fetch_array();
$kanamycin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f16 = $kanamycin2->fetch_array();
$amikacin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f17 = $amikacin2->fetch_array();
$capreomycin2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
$f18 = $capreomycin2->fetch_array();


?>
<script type="text/javascript"> 
	window.onload = function(){ 
		CanvasJS.addColorSet("customColorSet", [ 
			"#393f63",
			"#ffb367", 
			"#e5d8B0", 
			"#f98461", 
			"#d9695f",
			"#e05850",
			"#7E8F74",
		]);
		$("#dst").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 3800,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 22
			},
			subtitles:[
				{
					text: "Drug Susceptible Test Results - Year <?php echo $year?>"
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
				title: "Number of Patient with Resistant and Susceptible"
			}, 
			data: [ 
				{ 
					type: "stackedBar",
					showInLegend: true, 
					legendText: "Resistant",
					name: "Resistant",
					color: "#95B75D",
					dataPoints: [ 
						{ label: "Isoniazid", y: <?php echo $f1['total']?> },
						 { label: "Rifampicin", y: <?php echo $f2['total']?> },
						{ label: "Ethambutol", y: <?php echo $f3['total']?> },
						 { label: "Streptomycin", y: <?php echo $f4['total']?> },
						{ label: "Pyrazinamide", y: <?php echo $f5['total']?> },
						 { label: "Levofloxacin", y: <?php echo $f6['total']?> },
						{ label: "Kanamycin", y: <?php echo $f7['total']?> },
						 { label: "Amikacin", y: <?php echo $f8['total']?> },
						{ label: "Capreomycin", y: <?php echo $f9['total']?> }
						 ] 
						},
						{        
							type: "stackedBar",
							showInLegend: true, 
							legendText: "Susceptible",
							name: "Susceptible",
							color:"#ff5050",
							dataPoints: [
								{ label: "Isoniazid", y: <?php echo $f10['total']?> },
								 { label: "Rifampicin", y: <?php echo $f11['total']?>},
								{ label: "Ethambutol", y: <?php echo $f12['total']?> },
								 { label: "Streptomycin", y: <?php echo $f13['total']?> },
								{ label: "Pyrazinamide", y: <?php echo $f14['total']?> },
								 { label: "Levofloxacin", y: <?php echo $f15['total']?> },
								{ label: "Kanamycin", y: <?php echo $f16['total']?> },
								 { label: "Amikacin", y: <?php echo $f17['total']?> },
								{ label: "Capreomycin", y: <?php echo $f18['total']?>}
								 ]
								}
							] 
						}); 
						}
</script>