<?php
require 'logincheck.php';
require 'config.php';
$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
$f = $q->fetch_array();
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
		<script src="js/jquery.min.js"></script>
		<script src = "js/jquery.canvasjs.min.js"></script>
		<?php require 'js/loadchart/patient_population.php'?>
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
					<li class="active"><strong><mark>Dashboard</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-3">
							<div class="widget widget-info widget-carousel">
								<div class="owl-carousel" id="owl-example">
									<div> 
										<?php
	$year = date('Y');
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending' && `year` = '$year'") or die(mysqli_error());
			$f = $q->fetch_array();
			$q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$year'") or die(mysqli_error());
			$fetch = $q2->fetch_array();
			$q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$year'") or die(mysqli_error());
			$fetch2 = $q3->fetch_array();
			$q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
			$fetch3 = $q4->fetch_array();
			$q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
			$fetch4 = $q5->fetch_array();

										?>                                   
										<div class="widget-title">Pending</div>                                                                        
										<div class="widget-subtitle">Laboratory Request</div>
										<div class="widget-int"><?php echo $f['total']?></div>
									</div>
									<div>                                    
										<div class="widget-title">Status</div>
										<div class="widget-subtitle">Bacteriologically Confirmed</div>
										<div class="widget-int"><?php echo $fetch['total']?> </div>

									</div>
									<div>                                    
										<div class="widget-title">Status</div>
										<div class="widget-subtitle">Clinically Diagnosed</div>
										<div class="widget-int"><?php echo $fetch2['total']?></div>
									</div>
									<div>                                    
										<div class="widget-title">TB Classification</div>
										<div class="widget-subtitle">Pulmonary</div>
										<div class="widget-int"><?php echo $fetch3['total']?></div>
									</div>
									<div>                                    
										<div class="widget-title">TB Classification</div>
										<div class="widget-subtitle">Extra-Pulmonary</div>
										<div class="widget-int"><?php echo $fetch4['total']?></div>
									</div>
								</div>                            
								<div class="widget-controls">                                
									<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>                             
							</div>         
							<!-- END WIDGET SLIDER -->

						</div>
						<div class="col-md-3">
							<div class="widget widget-info widget-item-icon" onclick="location.href='master_file_patient.php';"style="cursor:pointer;">
								<div class="widget-item-left">
									<span class="fa fa-male"></span>
								</div>
								<div class="widget-data">
									<?php
	$year = date('Y');
											if(isset($_GET['year']))
											{
												$year=$_GET['year'];
											}
											$q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` where `year` = '$year'") or die(mysqli_error());
											$f2 = $q2->fetch_array();
									?>
									<div class="widget-int num-count counter" data-count="<?php echo $f2['total']?>">
										0
									</div>
									<div class="widget-title">TB Patients</div>
									<div class="widget-subtitle">Registered - Year <?php echo $year?></div>
								</div>
								<div class="widget-controls">
									<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
							</div>
							<!-- END WIDGET REGISTRED -->

						</div>
						<div class="col-md-3">
							<!-- START WIDGET REGISTRED -->
							<div class="widget widget-info widget-item-icon" onclick="location.href='patient_treatment_table.php';"style="cursor:pointer;">
								<div class="widget-item-left">
									<span class="fa fa-heartbeat"></span>
								</div>
								<div class="widget-data">
									<?php
	$year = date('Y');
										 if(isset($_GET['year']))
										 {
											 $year=$_GET['year'];
										 }
										 $q2 = $conn->query("SELECT COUNT(*) as total FROM `registration_ipt` where `year` = '$year'") or die(mysqli_error());
										 $f2 = $q2->fetch_array();
									?>
									<div class="widget-int num-count counter" data-count="<?php echo $f2['total']?>">
										0
									</div>
									<div class="widget-title">IPT Patients</div>
									<div class="widget-subtitle">Registered - Year <?php echo $year?></div>
								</div>
								<div class="widget-controls">
									<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
							</div>
							<!-- END WIDGET REGISTRED -->

						</div>
						<div class="col-md-3">
							<div class="widget widget-info widget-item-icon" onclick="location.href='master_file_medtech.php';" style="cursor:pointer;">
								<div class="widget-item-left">
									<span class="fa fa-user-md"></span>
								</div>
								<div class="widget-data">
									<?php
	$q = $conn->query("SELECT COUNT(*) as total FROM `user` where `position` = 'Medical Technologist' && `status` = 'Active'") or die(mysqli_error());
										 $f = $q->fetch_array();
									?>
									<div class="widget-int num-count counter" data-count="<?php echo $f['total']?>">
										0
									</div>
									<div class="widget-title">Physician</div>
									<div class="widget-subtitle">In the system</div>
								</div>
								<div class="widget-controls">
									<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php require 'require/select_year.php'?>
								</div>
								<div class="panel-body">
									<div id="patient_population" style="width: 100%; height: 400px"></div>
								</div>

							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Top 10 Barangays with High Cases of TB</strong></h3>
									</div>
									<div class="panel-body">
										<?php
	require 'config.php';
										 $query = $conn->query("select *, count(*) as total from patient where `year` = '$year' && status = 'Registered' group by barangay order by total desc limit 10") or die(mysqli_error());
										 while ($fetch = $query->fetch_array()) {
											 echo 
												 "
                                           <ul class='list-group border-bottom'>
										   <li class='list-group-item'><span class='fa fa-map-marker'></span> Barangay ".$fetch['barangay']." <span class='badge badge-danger'>".$fetch['total']."</span></li>
										   </ul>
                                                ";
										 }   
										?>        
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Treatment Outcome - Year <?php echo $year?></strong></h3>
									</div>
									<div class="panel-body">
										<?php
	require 'config.php';
											$cured = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `year` = '$year'") or die(mysqli_error());
											$f1 = $cured->fetch_array();
											$tc = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `year` = '$year'") or die(mysqli_error());
											$f2 = $tc->fetch_array();
											$died = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `year` = '$year'") or die(mysqli_error());
											$f3 = $died->fetch_array();
											$failed = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `year` = '$year'") or die(mysqli_error());
											$f4 = $failed->fetch_array();
											$lf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to Follow-up' && `year` = '$year'") or die(mysqli_error());
											$f5 = $lf->fetch_array();
											$ne = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `year` = '$year'") or die(mysqli_error());
											$f6 = $ne->fetch_array();
										?>

										<ul class='list-group border-bottom'>
											<li class='list-group-item'><span class='fa fa-smile-o'></span>Cured<span class='badge badge-success'><?php echo $f1['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-thumbs-up'></span>Treatment Completed<span class='badge badge-success'><?php echo $f2['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-times'></span>Died<span class='badge badge-success'><?php echo $f3['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-thumbs-down'></span>Failed<span class='badge badge-success'><?php echo $f4['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-frown-o'></span>Lost to Follow-up<span class='badge badge-success'><?php echo $f5['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-question'></span>Not Evaluated<span class='badge badge-success'><?php echo $f6['total']?></span></li>
										</ul>



									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Patient Classification - Gender</strong></h3>
									</div>
									<div class="panel-body">
										<?php
	require 'config.php';	
												$query1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Male' && registration.year = '$year'") or die(mysqli_error());
												$fetch1 = $query1->fetch_array();
												$query2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && gender = 'Female' && registration.year = '$year'") or die(mysqli_error());
												$fetch2 = $query2->fetch_array();
										?>
										<ul class='list-group border-bottom'>
											<li class='list-group-item'><span class='fa fa-male'></span>Male<span class='badge badge-info'><?php echo $fetch1['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-female'></span>Female<span class='badge badge-info'><?php echo $fetch2['total']?></span></li>

										</ul>
									</div>
								</div>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Patient Classification - Type</strong></h3>
									</div>
									<div class="panel-body">
										<?php
	require 'config.php';	
												$query1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.year = '$year'") or die(mysqli_error());
												$fetch1 = $query1->fetch_array();

												$query2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.year = '$year'") or die(mysqli_error());
												$fetch2 = $query2->fetch_array();
										?>
										<ul class='list-group border-bottom'>
											<li class='list-group-item'><span class='fa fa-child'></span>Children<span class='badge badge-info'><?php echo $fetch1['total']?></span></li>
											<li class='list-group-item'><span class='fa fa-user'></span>Adult<span class='badge badge-info'><?php echo $fetch2['total']?></span></li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'require/logout.php'?>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'home.php?year='+year;
				});
			});
		</script>
		<script>
			$('.counter').each(function() {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({ countNum: $this.text()}).animate({
					countNum: countTo
				},
													 {
					duration: 2000,
					easing:'linear',
					step: function() {
						$this.text(Math.floor(this.countNum));
					},
					complete: function() {
						$this.text(this.countNum);
						//alert('finished');
					}
				});  
			});
		</script>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>      
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

	</body>
</html>