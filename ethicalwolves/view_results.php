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
					<li>Transaction</li>
					<li><a href="laboratory_request_table.php">Laboratory Request</a></li>
					<li class="active"><strong><mark>View Results</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel-group accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#accOneColOne">
												Direct Sputum Smear Microscopy
											</a>
										</h4>
										<div class="btn-group pull-right">
											<div class="pull-left">
												<a href="laboratory_request.php?id=<?php echo $_GET['id']?>"  class="btn btn-default btn-md">Back</a>
											</div>
										</div>
									</div>                                
									<div class="panel-body panel-body-open" id="accOneColOne">
										<div class="row">
											<table class="table table-hover">
												<thead>
													<tr class="warning">
														<th><center>Date Examined</center></th>
														<th><center>Laboratory Number</center></th>
														<th><center>Visual Appearance 1</center></th>
														<th><center>Visual Appearance 2</center></th>
														<th><center>Reading 1</center></th>
														<th><center>Reading 2</center></th>
														<th><center>Lab. Diagnosis</center></th>
														<th><center>Examined By</center></th>
														<th><center>Date Released</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `dssm_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dssm_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
													?>
													<tr>
														<td><center><?php echo $fetch['date_examined']?></center></td>
														<td><center><?php echo $fetch['laboratory_number']?></center></td>
														<td><center><?php echo $fetch['visual_appearance']?></center></td>
														<td><center><?php echo $fetch['visual_appearance2']?></center></td>
														<td><center><?php echo $fetch['reading']?></center></td>
														<td><center><?php echo $fetch['reading2']?></center></td>
														<td><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
														<td><center><?php echo $fetch['examined_by']?></center></td>
														<td><center><?php echo $fetch['date_released']?></center></td>
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
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#accOneColTwo">
												Xpert MTB/RIF
											</a>
										</h4>
									</div>                                
									<div class="panel-body" id="accOneColTwo">
										<div class="row">
											<table class="table table-hover">
												<thead>
													<tr class="warning">
														<th><center>Date Examined</center></th>
														<th><center>Laboratory Number</center></th>
														<th><center>Visual Appearance</center></th>
														<th><center>Result</center></th>
														<th><center>Examined By</center></th>
														<th><center>Date Released</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
													$query = $conn->query("SELECT * FROM `gene_expert_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `xpert_id` DESC") or die(mysqli_error());
													while($fetch = $query->fetch_array()){
													?>
													<tr>
														<td><center><?php echo $fetch['date_examined']?></center></td>
														<td><center><?php echo $fetch['laboratory_number']?></center></td>
														<td><center><?php echo $fetch['visual_appearance']?></center></td>
														<td><center><?php echo $fetch['result']?></center></td>
														<td><center><?php echo $fetch['examined_by']?></center></td>
														<td><center><?php echo $fetch['date_released']?></center></td>
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
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#accOneColThree">
												TB Culture
											</a>
										</h4>
									</div>                                
									<div class="panel-body" id="accOneColThree">
										<div class="row">
											<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
												<table class="table table-hover">
													<thead>
														<tr class="warning">
															<th style="font-size:10px"><center>Method</center></th>
															<th style="font-size:10px"><center>TB Culture Lab</center></th>
															<th style="font-size:10px"><center>Laboratory Number</center></th>
															<th style="font-size:10px"><center>Date Sample Collected</center></th>
															<th style="font-size:10px"><center>Date Sample Received</center></th>
															<th style="font-size:10px"><center>TB Culture Result</center></th>
															<th style="font-size:10px"><center>Remarks</center></th>
															<th style="font-size:10px"><center>Examined By</center></th>
															<th style="font-size:10px"><center>Reviewed By</center></th>
															<th style="font-size:10px"><center>Date Released</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
														$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `tb_culture_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `tb_culture_id` DESC") or die(mysqli_error());
														while($fetch = $query->fetch_array()){
														?>
														<tr>
															<td><center><?php echo $fetch['method']?></center></td>
															<td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
															<td><center><?php echo $fetch['laboratory_no']?></center></td>
															<td><center><?php echo $fetch['date_sample_collected']?></center></td>
															<td><center><?php echo $fetch['date_sample_received']?></center></td>
															<td><center><?php echo $fetch['tb_culture_result']?></center></td>
															<td><center><?php echo $fetch['remarks']?></center></td>
															<td><center><?php echo $fetch['examined_by']?></center></td>
															<td><center><?php echo $fetch['reviewed_by']?></center></td>
															<td><center><?php echo $fetch['date_released']?></center></td>
														</tr>
														<?php
														}
														$conn->close();
														?>
													</tbody>
												</table>
											</form>
										</div>

									</div>                                
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="#accOneColFour">
												Drug Susceptible Test
											</a>
										</h4>
									</div>                                
									<div class="panel-body" id="accOneColFour">
										<div class="row">
											<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
												<table class="table table-hover">
													<thead>
														<tr class="warning">
															<th><center>TB Culture Laboratory</center></th>
															<th><center>DST Laboratory</center></th>
															<th><center>Method</center></th>
															<th><center>Date Collected</center></th>
															<th><center>Date Released</center></th>
															<th><center>Examined By</center></th>
															<th><center>Reviewed By</center></th>
															<th><center>Remarks</center></th>
														</tr>
													</thead>
													<tbody>
														<?php
														$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
														$query = $conn->query("SELECT * FROM `dst_examination` WHERE `patient_id` = '$_GET[id]' ORDER BY `dst_id` DESC") or die(mysqli_error());
														$id = $f['patient_id'];
														while($fetch = $query->fetch_array()){
															$id = $fetch['patient_id'];
														?>
														<tr>
															<td><center><?php echo $fetch['tb_culture_laboratory']?></center></td>
															<td><center><?php echo $fetch['dst_laboratory']?></center></td>
															<td><center><?php echo $fetch['method']?></center></td>
															<td><center><?php echo $fetch['date_collected']?></center></td>
															<td><center><?php echo $fetch['date_released']?></center></td>
															<td><center><?php echo $fetch['examined_by']?></center></td>
															<td><center><?php echo $fetch['reviewed_by']?></center></td>
															<td><center><?php echo $fetch['remarks']?></center></td>
														</tr>
														<?php
														}
														$conn->close();
														?>
													</tbody>
												</table>
											</form>
										</div>

									</div>                                
								</div>

							</div>
						</div>
					</div>
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
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	</body>

</html>