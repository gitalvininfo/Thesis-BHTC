<?php
require_once 'logincheck.php';
require ('config.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>BHTC-PMIS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="js/plugins/jquery/jquery.min.js"></script>
		<script src = "js/jquery.canvasjs.min.js"></script>
		<?php require 'js/loadchart/medicines_dispensed.php'?>
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
					<li><a href="home.php">Home</a></li>
					<li>Reports</li>
					<li class="active"><strong><mark>Medicines Dispensed</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-5">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Barangay Health Stations</strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
									<div class="panel-body">
										<table class="table datatable">
											<thead>
												<tr >
													<th>Name</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												require 'config.php';
												$query = $conn->query("SELECT * FROM `medication_dispensation` group by health_center") or die(mysqli_error());
												while($fetch = $query->fetch_array()){
												?>
												<tr>
													<td><?php echo $fetch['health_center']?></td>
													<td>
														<a href="view_drug_dispensation.php?health_center=<?php echo $fetch['health_center']?>" class="btn btn-sm btn-default">View</a>
													</td>
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
						<div class="col-md-7">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php require 'require/select_year.php'?>
								</div>
								<div class="panel-body scroll" style="height: 470px;">
									<div id="medicine" style="width: 100%; height: 425px"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/view_dispensation.php'?>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'medication_dispense_table.php?year='+year;
				});
			});
		</script>
	
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/shortcut.js"></script>
	</body>
</html>