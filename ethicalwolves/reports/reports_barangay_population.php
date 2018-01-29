<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>BHTC-PMIS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
		<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="../js/plugins/jquery/jquery.min.js"></script>
		<script src = "../js/jquery.canvasjs.min.js"></script>
		<?php include_once '../js/loadchart/barangay_population.php'?>
	</head>
	<body>
		<?php 
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="../home.php">Home</a></li>
					<li class="#">Reports</li>
					<li><a href="../reports.php">TB Cases Report</a></li>
					<li class="active"><strong><mark>Barangay Population</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Graphical</a></li>
									<li><a href="#tab-second" role="tab" data-toggle="tab">Tabular</a></li>
									<?php require '../require/select_year.php'?>
									<a href="geotagging.php" class="btn btn sm btn-info"><span class="fa fa-map-marker"></span> Geotagging</a>
								</ul>

								<div class="panel-body tab-content">
									<div class="tab-pane active" id="tab-first">
										<div class="row">
											<div class="panel-body">
												<div id="barangay_population" style="width: 100%; height: 400px"></div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-second">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
											<div class="row">
											</div>
											<table class="table datatable">
												<thead> 
													<tr>
														<th><center>Name of Barangay</center></th>
														<th><center>Action</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
	$year = date('Y');
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			require '../config.php';
			$query = $conn->query("SELECT * FROM `patient`, `registration` WHERE patient.patient_id = registration.patient_id && patient.status = 'Registered' && registration.year = '$year' group by barangay") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
													?>                                      
													<tr>
														<td><center><mark>Barangay <?php echo $fetch['barangay']?></mark></center></td>
														<td><center>
															<a href="viewbarangay.php?id=<?php echo $fetch['barangay']?>&year=<?php echo $year?>" class="btn btn-sm btn-default"  data-toggle="tooltip" data-placement="left" title="View Record"><span class="fa fa-search"></span><Record></Record> </a></center></td>	
													</tr>
													<?php
			}
			$conn->close();
													?>
												</tbody>
											</table>                                    

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/tabular_barangay_population.php'?>  
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'reports_barangay_population.php?year='+year;
				});
			});
		</script>
		<audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="../js/plugins.js"></script>
		<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../js/actions.js"></script>
	</body>
</html>