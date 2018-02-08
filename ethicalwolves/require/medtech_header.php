<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
	$id = $fetch['patient_id'];
	$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` where `patient_id` = '$id' && `status` = 'Pending' ORDER BY `lab_request_id` ASC") or die(mysqli_error());
	$f = $q->fetch_array();
?>
<?php
}
$conn->close();
?>
<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
	<li class="xn-icon-button">
		<a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
	</li>
	<li class="xn-icon-button pull-right">
		<a href="index.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>
	</li>
	<li class="xn-icon-button pull-right">
		<?php
		$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `patient`") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending' ORDER BY `lab_request_id` DESC") or die(mysqli_error());
		$f = $q->fetch_array();
		?>
		<a href="#"><span class="fa fa-file-text"></span></a>
		<?php if ($f['total']>0)echo "<div class='informer informer-danger'>".$f['total']."</div>";?>
		<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
			<div class="panel-heading">
				<h3 class="panel-title">Pending Laboratory Requests</h3>
				<div class="pull-right">
					<span class="label label-danger"><?php echo $f['total']?></span>
				</div>
			</div>
			<div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
				<?php 
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
						$q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending' order by `lab_request_id`") or die(mysqli_error());
						while($f = $q->fetch_array())
						{
							$id = $f['patient_id'];
							$q2 = $conn->query("SELECT `patient_name` FROM `patient` WHERE `patient_id` = '$id'") or die(mysqli_error());
							$f2 = $q2->fetch_array();
				?>
				<a href="laboratory_request_pending.php?id=<?php echo $f['patient_id']?>" class="list-group-item">
					<img src="assets/images/patient.ico" class="pull-left" alt="John Doe" />
					<span class="contacts-title"><?php echo $f2['patient_name']?></span>
					<p>
						<i><?php echo $f['reason_for_examination']. ' - ' . $f['test_requested']. ' - ' . $f['date_of_request']?><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;<?php echo $f['collection_unit']?></i>
					</p>
				</a>
				<?php
						}
						$conn->close();
				?>
			</div>
			<div class="panel-footer text-center">
				<a href="medtech_laboratory_request.php">Show all laboratory requests</a>
			</div>
		</div>
	</li>
</ul>