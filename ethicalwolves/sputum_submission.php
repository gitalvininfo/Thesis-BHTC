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
	</head>

	<body>
		<?php
		$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Reports</li>
					<li class="active"><strong><mark>Sputum Submission</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Sputum Collection</strong></h3>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<button class="btn btn-info btn-md" data-toggle="modal" data-target="#modal_basic">Browse</button>
										</div>
									</div>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
									<div class="panel-body">
										<table id="laboratory_request" class="table datatable">
											<thead>
												<tr class="warning">
													<th><center>Name of Patient</center></th>
													<th><center>Date Specimen 1 Collected</center></th>
													<th><center>Date Specimen 2 Collected</center></th>
													<th><center>Specimen Collector</center></th>
													<th><center>Barangay Health Center</center></th>
													<th><center>Date and Time Uploaded</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
	require 'config.php';
			$query = $conn->query("SELECT * FROM `submission` ORDER BY `submission_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
												?>
												<tr>
													<td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
													<td><center><?php echo $fetch['date1']?></center></td>
													<td><center><?php echo $fetch['date2']?></center></td>
													<td><center><?php echo $fetch['specimen_collector']?></center></td>
													<td><center><?php echo $fetch['health_center']?></center></td>
													<td><center><?php echo $fetch['date_created']?></center></td>
												</tr>
												<?php
			}
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

		<div class="modal fade" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="defModalHead"><strong>Upload CSV File</strong></h4>
					</div>
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<h5>Select from files</h5>
							<input type="file" name="myFile">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-info" name="uploadBtn">Upload</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	</body>

</html>