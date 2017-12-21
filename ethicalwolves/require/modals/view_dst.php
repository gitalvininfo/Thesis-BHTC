<!-- DST -->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `dst_examination` ORDER BY `dst_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="viewdst<?php echo $fetch['dst_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">DST Examination Result</h4>
            </div>
            <form role="form" class="form-horizontal" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h3 class="panel-title"> First Line Drug Result mcg/mL</h3><br>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Isoniazid</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Isoniazid (H)" type="text" class="form-control" name="isoniazid" style="color:black;" value="<?php echo $fetch['isoniazid']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Rifampicin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Rifampicin (R)" type="text" class="form-control" name="rifampicin" style="color:black;" value="<?php echo $fetch['rifampicin']?>"readonly/>

                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Ethambutol</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Ethambutol (E)" type="text" class="form-control" name="ethambutol" style="color:black;" value="<?php echo $fetch['ethambutol']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Streptomycin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Streptomycin (S)" type="text" class="form-control" name="streptomycin" style="color:black;" value="<?php echo $fetch['streptomycin']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Pyrazinamide</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Pyrazinamide (Z)" type="text" class="form-control" name="pyrazinamide" style="color:black;" value="<?php echo $fetch['pyrazinamide']?>"readonly/>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <h3 class="panel-title">Second Line Drug Result mcg/mL</h3><br>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Levofloxacin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Levofloxacin (Lfx)" type="text" class="form-control" name="levofloxacin" style="color:black;" value="<?php echo $fetch['levofloxacin']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Kanamycin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Kanamycin (Km)" type="text" class="form-control" name="kanamycin" style="color:black;" value="<?php echo $fetch['kanamycin']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Amikacin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Amikacin (Amk)" type="text" class="form-control" name="amikacin" style="color:black;" value="<?php echo $fetch['amikacin']?>"readonly/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-3 col-xs-12 control-label">Capreomycin</label>
                                <div class="col-md-7 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="right" title="Capreomycin (Cm)" type="text" class="form-control" name="capreomycin" style="color:black;" value="<?php echo $fetch['capreomycin']?>"readonly/>
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
