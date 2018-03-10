<?php
require_once 'logincheck.php';
require ('config.php');

$message = '';

if(isset($_POST['import']))
{
	if($_FILES['database']['name'] != '')
	{
		$array = explode(".", $_FILES['database']['name']);
		$extension = end($array);
		if($extension == 'sql'){
			$connect = mysqli_connect("localhost", "root", "", "thesis");
			$output = '';
			$count = 0;
			$file_data = file($_FILES['database']['tmp_name']);
			foreach($file_data as $row){
				$start_character = substr(trim($row), 0, 2);
				if($start_character != '--' || $start_character != '/*'
				   || $start_character != '//' || $row != ''){
					$output = $output . $row;
					$end_character = substr(trim($row), -1, 1);
					if($end_character == ';'){
						if(!mysqli_query($connect, $output)){
							$count++;
						}
						$output = '';
					}
				}
			}
			if($count > 0) {
				$message = 'Error occurred';
			}
			else {
				$message = 'Successful';
				date_default_timezone_set('Asia/Manila');
				$date=date("F j, Y, g:i a");
				$time=date("g:i a");
				$date2=date("F j, Y");
				$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
				$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
				$fetch = $query->fetch_array();
				$id=$_SESSION['user_id'];
				$remarks = "Imported database";

				$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'System Maintenance', '$remarks', '$date2', '$time')") or die(mysqli_error());

				$conn->query("INSERT INTO `backup` VALUES('', 'Successfully imported database', '$date')") or die(mysqli_error());
				$conn->close();
				echo "<script>alert('Successfully imported database!')</script>";
				echo "<script>document.location='download_database.php'</script>";  
			}
		}
		else {
			echo "<script type='text/javascript'>alert('You must upload SQL file only!');</script>";
			echo "<script>document.location='download_database.php'</script>";
		}
	}
	else {
		$message = 'Select SQL File.';
	}


}
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
											<a class="btn btn-info mb-control" data-box="#message-box-info">Export Database</a>
											<button class="btn btn-warning btn-md" data-toggle="modal" data-target="#modal_basic">Import Database</button>
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

					if ($fetch['remarks'] == 'Successfully exported database')
						echo 
						"
                                            <div class='list-group list-group-contacts border-bottom push-down-10'>
                                                 <a href='#' class='list-group-item'> 
                                                    <span class='contacts-title'>".$find['firstname']. " " .$find['lastname']."</span>
                                                <span class='date' style='float:right;'>".$fetch['date']."</span>
                                            <p><span class='label label-info'>".$fetch['remarks']."</span></p>
                                                 </a>
                                                ";

					if ($fetch['remarks'] == 'Successfully imported database')
						echo 
						"
                                            <div class='list-group list-group-contacts border-bottom push-down-10'>
                                                 <a href='#' class='list-group-item'>
                                                    <span class='contacts-title'>".$find['firstname']. " " .$find['lastname']."</span>
                                                <span class='date' style='float:right;'>".$fetch['date']."</span>
                                            <p><span class='label label-success'>".$fetch['remarks']."</span></p>
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

		<div class="message-box message-box-info animated fadeIn" data-sound="fail" id="message-box-info">
			<div class="mb-container">
				<div class="mb-middle">
					<div class="mb-title"><span class="fa fa-cloud-download"></span> Export Database</div>
					<div class="mb-content">
						<p>You are about to download the database of BHTC-PMIS.</p>
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
		<div class="modal fade" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="defModalHead"><strong>Upload SQL File</strong></h4>
					</div>
					<form method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<h5>Select from files</h5>
							<input type="file" name="database">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-info" name="import">Upload</button>
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
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>        
		<script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/shortcut.js"></script>        
	</body>
</html>