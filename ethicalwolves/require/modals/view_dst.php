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
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-file-text"></span> DST Examination</h4>
            </div>
            <form role="form" class="form-horizontal" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="TB Culture Laboratory" type="text" class="form-control" name="tb_culture_laboratory" style="color:black;" value="<?php echo $fetch['tb_culture_laboratory']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="DST Laboratory" type="text" class="form-control" name="dst_laboratory" style="color:black;" value="<?php echo $fetch['dst_laboratory']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="TB Culture Laboratory" type="text" class="form-control" name="tb_culture_laboratory" style="color:black;" value="<?php echo $fetch['tb_culture_laboratory']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="DST Laboratory" type="text" class="form-control" name="dst_laboratory" style="color:black;" value="<?php echo $fetch['dst_laboratory']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Method" type="text" class="form-control" name="method" style="color:black;" value="<?php echo $fetch['method']?>"disabled/>
                                </div>
                            </div>
                        </div> <hr>
                        <span class="help-block" style="color:red;">First Line Drug Result mcg/mL</span> <br>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Isoniazid (H)" type="text" class="form-control" name="isoniazid" style="color:black;" value="<?php echo $fetch['isoniazid']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Rifampicin (R)" type="text" class="form-control" name="rifampicin" style="color:black;" value="<?php echo $fetch['rifampicin']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Ethambutol (E)" type="text" class="form-control" name="ethambutol" style="color:black;" value="<?php echo $fetch['ethambutol']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Streptomycin (S)" type="text" class="form-control" name="streptomycin" style="color:black;" value="<?php echo $fetch['streptomycin']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Pyrazinamide (Z)" type="text" class="form-control" name="pyrazinamide" style="color:black;" value="<?php echo $fetch['pyrazinamide']?>"disabled/>
                                </div>
                            </div>
                        </div> <hr>

                        <span class="help-block" style="color:red;">Second Line Drug Result mcg/mL</span> <br>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Levofloxacin (Lfx)" type="text" class="form-control" name="levofloxacin" style="color:black;" value="<?php echo $fetch['levofloxacin']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Kanamycin (Km)" type="text" class="form-control" name="kanamycin" style="color:black;" value="<?php echo $fetch['kanamycin']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Amikacin (Amk)" type="text" class="form-control" name="amikacin" style="color:black;" value="<?php echo $fetch['amikacin']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Capreomycin (Cm)" type="text" class="form-control" name="capreomycin" style="color:black;" value="<?php echo $fetch['capreomycin']?>"disabled/>
                                </div>
                            </div>
                        </div> <hr>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Examined By" type="text" class="form-control" name="examined_by" style="color:black;" value="<?php echo $fetch['examined_by']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Remarks" type="text" class="form-control" name="remarks" style="color:black;" value="<?php echo $fetch['remarks']?>"disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Reviewed By" type="text" class="form-control" name="reviewed_by" style="color:black;" value="<?php echo $fetch['reviewed_by']?>"disabled/>
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input data-toggle="tooltip" data-placement="right" title="Date Released" type="text" class="form-control" name="date_released" style="color:black;" value="<?php echo $fetch['date_released']?>"disabled/>
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
