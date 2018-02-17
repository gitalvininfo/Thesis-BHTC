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
		$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$q = $conn->query("SELECT COUNT(*) as total FROM `laboratory_request` WHERE `status` = 'Pending'") or die(mysqli_error());
		$f = $q->fetch_array();
		$check = $q->num_rows;
		?>
		<a href="#"><span class="fa fa-envelope"></span></a>
		<?php if ($f['total']>0)echo "<div class='informer informer-danger'>".$f['total']."</div>";?>
		<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $f['total']. " Pending Laboratory Requests  " ?></h3>
				<div class="pull-right">
					<span class="label label-danger"><?php echo $f['total']?></span>
				</div>
			</div>
			<div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
				<?php 
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
						$q = $conn->query("SELECT * FROM `laboratory_request` WHERE `status` = 'Pending' order by `lab_request_id` limit 10") or die(mysqli_error());
						while($f = $q->fetch_array())
						{
							$id = $f['patient_id'];
							$q2 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$id'") or die(mysqli_error());
							$f2 = $q2->fetch_array();
				?>
				<a href="laboratory_request.php?id=<?php echo $id?>" class="list-group-item">
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
				<a href="laboratory_request_table.php">Show all laboratory requests</a>
			</div>
		</div>
	</li>
	<li class="xn-icon-button pull-right">
		<?php
		$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$q = $conn->query("SELECT COUNT(*) as count from `medicine` WHERE `running_balance` <= 5") or die(mysqli_error());
		$f = $q->fetch_array();
		?>
		<a href="#"><span class="fa fa-medkit"></span></a>
		<?php if ($f['count']>0)echo "<div class='informer informer-danger'>".$f['count']."</div>";
		?>

		<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
			<div class="panel-heading">
				<h3 class="panel-title">
				You have <?php echo $f['count']. " medicines that runs out of balance " ?></h3>
				<div class="pull-right">
					<span class="label label-danger"><?php echo $f['count']?></span>
				</div>
			</div>
			<div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
				<?php 
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
					$q = $conn->query("SELECT * FROM `medicine` WHERE `running_balance` <= 5") or die(mysqli_error());
					while($f = $q->fetch_array()){
				?>
				<a href="#" class="list-group-item">
					<img src="assets/images/medicine.png" class="pull-left" alt="John Doe" />
					<span class="contacts-title"><?php echo $f['medicine_name']. "-" . $f['medicine_type']?></span>
					<p>
						<i>Running Balance: <span style="color:#fc5454"><?php echo $f['running_balance']. " kits"?></span></i>
					</p>
				</a>
				<?php
					}
					$conn->close();
				?>
			</div>
			<div class="panel-footer text-center">
				<a href="medicine_table.php" class="text-left">Show all medicines</a> &nbsp;
				<a href="medication_dispensation.php" class="text-right">Add Stocks Now</a>
			</div>
		</div>
	</li>
</ul>