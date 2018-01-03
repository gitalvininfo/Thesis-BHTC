<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$pos = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Positive (+)' && `year` = '$year'") or die(mysqli_error());
$f1 = $pos->fetch_array();
$neg = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `laboratory_diagnosis` = 'Negative (0)' && `year` = '$year'") or die(mysqli_error());
$f2 = $neg->fetch_array();

?>
<div class="row">
    <div class="col-md-3">                        
        <a href="#" class="tile tile-success">
            <?php echo $f1['total']?>
            <p>Positive</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-plus"></span></div>                          
        </a>                        
    </div>
    <div class="col-md-3">                        
        <a href="#" class="tile tile-info">
            <?php echo $f2['total']?>
            <p>Negative</p>  
            <div class="informer informer-default dir-tr"><span class="fa fa-minus"></span></div>                          
        </a>                        
    </div>
</div>
