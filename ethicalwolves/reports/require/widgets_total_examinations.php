<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$dssm = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `year` = '$year'") or die(mysqli_error());
$f1 = $dssm->fetch_array();
$xpert = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `year` = '$year'") or die(mysqli_error());
$f2 = $xpert->fetch_array();
$tbculture = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `year` = '$year'") or die(mysqli_error());
$f3 = $tbculture->fetch_array();
$dst = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `year` = '$year'") or die(mysqli_error());
$f4 = $dst->fetch_array();
?>
<div class="row">
	<div class="col-md-3">
		<div class="tile tile-success">
			<div class="widget-big-int counter" data-count="<?php echo $f1['total']?>"><span class="num-count">0</span></div> 
			<p>DSSM</p>
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="tile tile-info">
			<div class="widget-big-int counter" data-count="<?php echo $f2['total']?>"><span class="num-count">0</span></div> 
			<p>Xpert MTB/RIF</p>
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="tile tile-danger">
			<div class="widget-big-int counter" data-count="<?php echo $f3['total']?>"><span class="num-count">0</span></div> 
			<p>TB Culture</p>
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="tile tile-primary">
			<div class="widget-big-int counter" data-count="<?php echo $f4['total']?>"><span class="num-count">0</span></div> 
			<p>Drug Susceptible Test</p>
		</div>                        
	</div>
</div>