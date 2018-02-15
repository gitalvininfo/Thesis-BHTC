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
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
	</head>
	<body>
		<?php 
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-container">

			<!-- START PAGE SIDEBAR -->
			<div class="page-container">
				<?php require 'require/sidebar.php'?>
				<div class="page-content">
					<?php require 'require/header.php'?>
					<ul class="breadcrumb push-down-0">
						<li><a href="#">Home</a></li>
						<li>System Maintenance</li>
						<li class="active"><strong><mark>Import and Export Database</mark></strong></li>
					</ul>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="btn-group pull-right">
										<div class="pull-right">
											<a class="btn btn-default mb-control" data-box="#message-box-info">Export Database</a>
											<a class="btn btn-info mb-control" data-box="#message-box-success">Import Database</a>
										</div>
									</div>
									<h3 class="panel-title"><strong>History Log - Export and Import Database</strong></h3>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 474px;">
									<div class="panel-body">
										<?php
	require 'config.php';
				$query = $conn->query("SELECT * FROM `backup` ORDER BY `backup_id` DESC") or die(mysqli_error());
				while ($fetch = $query->fetch_array()) {
					echo 
						"
                                            <div class='list-group list-group-contacts border-bottom push-down-10'>
                                                 <a href='#' class='list-group-item'> 
                                                         <img src='assets/images/project_logo.png' class='pull-left' alt='Dmitry Ivaniuk'>
                                                    <span class='contacts-title'>".$find['firstname']. " " .$find['lastname']."</span>
                                                <span class='date' style='float:right;'>".$fetch['date']."</span>
                                            <p>".$fetch['remarks']."</p>
                                                 </a>
                                                ";
				}   
										?>
									</div>
								</div>
							</div>
						</div>
					</div>   
				</div>
			</div>            
		</div>

		<?php
		require 'config.php';
		$query = $conn->query("SELECT * FROM `backup` WHERE backup_id=(select max(backup_id) from backup)") or die(mysqli_error());
		while ($fetch = $query->fetch_array()) {
		?>
		<div class="message-box message-box-info animated fadeIn" data-sound="fail" id="message-box-info">
			<div class="mb-container">
				<div class="mb-middle">
					<div class="mb-title"><span class="fa fa-cloud-download"></span> Export Database</div>
					<div class="mb-content">
						<p>You are about to download the database of BHTC-PMIS. Your last backup of database was <?php echo $fetch['date']?></p>
					</div>
					<div class="mb-footer">
						<div class="pull-right">
							<a href="export/export.php" class="btn btn-danger btn-lg pull-right">Export Anyway</a>
							<button class="btn btn-default btn-lg mb-control-close">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<?php
		require 'config.php';
		$query = $conn->query("SELECT * FROM `backup` WHERE backup_id=(select max(backup_id) from backup)") or die(mysqli_error());
		while ($fetch = $query->fetch_array()) {
		?>
		<div class="message-box message-box-success animated fadeIn" data-sound="fail" id="message-box-success">
			<div class="mb-container">
				<div class="mb-middle">
					<div class="mb-title"><span class="fa fa-cloud-upload"></span> Import Database</div>
					<div class="mb-content">
						<p>You are about to upload the recently exported database. Your last backup of database was <?php echo $fetch['date']?></p>
					</div>
					<div class="mb-footer">
						<div class="pull-right">
							<a href="export/import.php" class="btn btn-danger btn-lg pull-right">Import Anyway</a>
							<button class="btn btn-default btn-lg mb-control-close">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>        
		<script type="text/javascript" src="js/actions.js"></script>        
	</body>
</html>