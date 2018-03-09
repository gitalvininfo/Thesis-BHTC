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
		<?php require 'js/loadchart/weight_ipt.php'?>
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
					<?php
	$year = date('Y');
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			require 'config.php';
			$q = $conn->query("SELECT * FROM `patient_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$f = $q->fetch_array();
			$q1 = $conn->query("SELECT `ipt_no` FROM `registration_ipt` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$f1 = $q1->fetch_array();
					?>
					<li><a href="home.php">Home</a></li>
					<li class="#">Transaction</li>
					<li class="#"><a href="patient_treatment_table.php">Treatment</a></li>
					<li class="active"><strong><mark>Clinical Findings</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-8">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Clinical Findings</strong></h3>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<a href="clinical_findings_form_ipt.php?id=<?php echo $f['patient_id']?>"  class="btn btn-default btn-md">New Clinical Findings</a>
										</div>
									</div>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
									<table id="laboratory_request" class="table table-hover">
										<thead>
											<tr class="warning">
												<th data-toggle="tooltip" data-placement="top" title="Date Visited">
													<center>Date</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Weight">
													<center>Weight</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Unexplained fever more than 2 weeks">
													<center>Q1</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Unexplained cough or wheezing more than 2 weeks">
													<center>Q2</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Unimproved general well-being">
													<center>Q3</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Poor appetite">
													<center>Q4</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Positive PE findings for Extra-Pulmonary TB">
													<center>Q5</center>
												</th>
												<th data-toggle="tooltip" data-placement="top" title="Side Effects">
													<center>Q6</center>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
	$conn = new mysqli('localhost', 'root', '', 'thesis') or die(mysqli_error());
											   $query = $conn->query("SELECT * FROM `clinical_findings_ipt` WHERE `patient_id` = '$_GET[id]' ORDER BY `clinical_id` DESC") or die(mysqli_error());
											   while($fetch = $query->fetch_array()){
											?>
											<tr>
												<td><center><?php echo $fetch['date_visited']?></center></td>
												<td><center><?php echo $fetch['weight']?> kgs.</center></td>
												<td><center><?php echo $fetch['q1']?></center></td>
												<td><center><?php echo $fetch['q2']?></center></td>
												<td><center><?php echo $fetch['q3']?></center></td>
												<td><center><?php echo $fetch['q4']?></center></td>
												<td><center><?php echo $fetch['q5']?></center></td>
												<td><center><?php echo $fetch['q6']?></center></td>
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
						<div class="col-md-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Weight Progress</strong><strong></strong></h3>
								</div>
								<div class="panel-body">
									<div id="weight" style="width: 100%; height: 200px"></div>
								</div>
							</div>
							<div class="block">
								<h4>Legend</h4>
								<div class="list-group list-group-simple">                                
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q1 - Unexplained fever for more than 2 weeks</a>
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q2 - Unexplained cough for more than 2 weeks</a>
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q3 - Unimproved general well-being</a>
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q4 - Poor Appetite</a>
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q5 - Positive PE findings for Extra-Pulmonary TB </a>
									<a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Q6 - Side Effects </a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/modals/add_clinical_findings_ipt.php'?>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
	</body>
</html>