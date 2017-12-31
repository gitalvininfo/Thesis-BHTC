<!-- DST -->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `dst_examination` ORDER BY `dst_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="viewdst<?php echo $fetch['dst_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Drug Susceptible Test Result</h4>
            </div>
            <form role="form" class="form-horizontal" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h3 class="panel-title"> 1st Line Drug Result mcg/mL</h3><hr>
                            <h5 class="push-up-5">Isoniazid</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="isoniazid" value="<?php echo $fetch['isoniazid']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Rifampicin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="rifampicin" value="<?php echo $fetch['rifampicin']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Ethambutol</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="ethambutol" value="<?php echo $fetch['ethambutol']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Streptomycin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="streptomycin" value="<?php echo $fetch['streptomycin']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Pyrazinamide</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="pyrazinamide" value="<?php echo $fetch['pyrazinamide']?>" readonly/>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <h3 class="panel-title">2nd Line Drug Result mcg/mL</h3><hr>
                            <h5 class="push-up-5">Levofloxacin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="levofloxacin" value="<?php echo $fetch['levofloxacin']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Kanamycin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="kanamycin" value="<?php echo $fetch['kanamycin']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Amikacin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="amikacin" value="<?php echo $fetch['amikacin']?>" readonly/>
                                </div>
                            </div>
                            <h5 class="push-up-5">Capreomycin</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" style="font-size:12px;font-weight:bold;color:black" style="font-size:12px;font-weight:bold;color:black" readonly name="capreomycin" value="<?php echo $fetch['capreomycin']?>" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>
            </form>
        </div>
    </div>
</div>
<?php
                                     }
$conn->close();
?> 
<!-- End of DST -->
