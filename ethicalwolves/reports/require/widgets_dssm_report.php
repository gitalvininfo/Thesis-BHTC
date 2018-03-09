<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$pos = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Positive (+)' && `year` = '$year'") or die(mysqli_error());
$f1 = $pos->fetch_array();
$neg = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Negative (0)' && `year` = '$year'") or die(mysqli_error());
$f2 = $neg->fetch_array();
$gra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '$year'") or die(mysqli_error());
$fetch3 = $gra->fetch_array();

?>
<div class="col-md-3">
	<div class="widget widget-default widget-item-icon">
		<div class="widget-item-left">
			<span class="fa fa-male"></span>
		</div>
		<div class="widget-data">
			<div class="widget-int num-count counter" data-count="<?php echo $fetch3['total']?>">0</div>
			<div class="widget-title">Total Patients</div>
			<div class="widget-subtitle">Registered Year - <?php echo $year?></div>
		</div>                            
	</div>
</div>
<div class="col-md-3">
	<div class="widget widget-success widget-item-icon">
		<div class="widget-item-left">
			<span class="fa fa-plus"></span>
		</div>
		<div class="widget-data">
			<div class="widget-int num-count counter" data-count="<?php echo $f1['total']?>">0</div>
			<div class="widget-title">DSSM</div>
			<div class="widget-subtitle">Positive</div>
		</div>                            
	</div>
</div>
<div class="col-md-3">
	<div class="widget widget-info widget-item-icon">
		<div class="widget-item-left">
			<span class="fa fa-minus"></span>
		</div>
		<div class="widget-data">
			<div class="widget-int num-count counter" data-count="<?php echo $f2['total']?>">0</div>
			<div class="widget-title">DSSM</div>
			<div class="widget-subtitle">Negative</div>
		</div>                            
	</div>
</div>