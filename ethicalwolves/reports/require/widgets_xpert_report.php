<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$t = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'T' && `year` = '$year'") or die(mysqli_error());
$f1 = $t->fetch_array();
$rr = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'RR' && `year` = '$year'") or die(mysqli_error());
$f2 = $rr->fetch_array();
$ti = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'TI' && `year` = '$year'") or die(mysqli_error());
$f3 = $ti->fetch_array();
$n = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'N' && `year` = '$year'") or die(mysqli_error());
$f4 = $n->fetch_array();
$i = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `result` = 'I' && `year` = '$year'") or die(mysqli_error());
$f5 = $i->fetch_array();
?>
<div class="row">
	<div class="col-md-3">
		<div class="tile tile-success">
			<div class="widget-big-int counter" data-count="<?php echo $f1['total']?>"><span class="num-count">0</span></div> 
			<p>MTB Detected, Rifampicin resistance detected</p>  
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="tile tile-info">
			<div class="widget-big-int counter" data-count="<?php echo $f2['total']?>"><span class="num-count">0</span></div> 
			<p>MTB Detected, Rifampicin resistance not detected</p>  
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="tile tile-danger">
			<div class="widget-big-int counter" data-count="<?php echo $f3['total']?>"><span class="num-count">0</span></div> 
			<p>MTB Detected, Rifampicin resistance indeterminate</p>    
		</div>                        
	</div>
	<div class="col-md-3">
		<div class="widget widget-primary widget-carousel">
			<div class="owl-carousel" id="owl-example">
				<div> 
					<div class="widget-subtitle">MTB Detected</div>
					<div class="widget-int"><?php echo $f4['total']?></div>
				</div>
				<div> 
					<div class="widget-subtitle">Invalid/No Result</div>
					<div class="widget-int"><?php echo $f5['total']?></div>
				</div>
			</div>         
		</div>
	</div>

</div>
