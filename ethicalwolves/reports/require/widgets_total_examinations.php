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
        <a href="#" class="tile tile-success">
            <?php echo $f1['total']?>
            <p>Direct Sputum Smear Micro.</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-leaf"></span></div>                          
        </a>                        
    </div>
    <div class="col-md-3">                        
        <a href="#" class="tile tile-info">
            <?php echo $f2['total']?>
            <p>Xpert MTB/RIF</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-code-fork"></span></div>                          
        </a>                        
    </div>
    <div class="col-md-3">                        
        <a href="#" class="tile tile-danger">
            <?php echo $f3['total']?>
            <p>TB Culture</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-search-plus"></span></div>                          
        </a>                        
    </div>
    <div class="col-md-3">                        
        <a href="#" class="tile tile-primary">
            <?php echo $f4['total']?>
            <p>Drug Susceptible Test</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-star"></span></div>                          
        </a>                        
    </div>
</div>