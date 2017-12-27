<!-- Dispensed Medicine-->
<div class="modal fade" id="dispensed" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Medication Dispensation</h4>
            </div>
            <form role="form" class="form-horizontal" action="medication_dispensation.php" method="post" onsubmit="return confirm('Are you sure you want to dispense this medicines?');">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Health Center</label>
                            <div class="col-md-9">   
                                <select class="form-control select" data-live-search="true" name="health_center" required>
                                    <option>Choose Health Center</option>
                                    <option value="ABCASA Barangay Health Station">ABCASA Barangay Health Station</option>
                                    <option value="Alangilan Barangay Health Station">Alangilan Barangay Health Station</option>
                                    <option value="Alijis Barangay Health Station">Alijis Barangay Health Station</option>
                                    <option value="Banago Barangay Health Station">Banago Barangay Health Station</option>
                                    <option value="Bata Barangay Health Station">Bata Barangay Health Station</option>
                                    <option value="Cabug Barangay Health Station">Cabug Barangay Health Station</option>
                                    <option value="Estefania Barangay Health Station">Estefania Barangay Health Station</option>
                                    <option value="Felisa Barangay Health Station">Felisa Barangay Health Station</option>
                                    <option value="Granada Barangay Health Station">Granada Barangay Health Station</option>
                                    <option value="Handumanan Barangay Health Station">Handumanan Barangay Health Station</option>
                                    <option value="Lopez Jaena Health Plus">Lopez Jaena Health Plus</option>
                                    <option value="Mabini Health Plus">Mabini Health Plus</option>
                                    <option value="Mandalagan Barangay Health Station">Mandalagan Barangay Health Station</option>
                                    <option value="Mansilingan Barangay Health Station">Mansilingan Barangay Health Station</option>
                                    <option value="Montevista Barangay Health Station">Montevista Barangay Health Station</option>
                                    <option value="Pahanocoy Barangay Health Station">PAHANOCOY Barangay Health Station</option>
                                    <option value="Punta Taytay Barangay Health Station">Punta Taytay Barangay Health Station</option>
                                    <option value="Singcang Barangay Health Station">Singcang Barangay Health Station</option>
                                    <option value="Sum-ag Barangay Health Station">Sum-ag Barangay Health Station</option>
                                    <option value="Taculing Barangay Health Station">Taculing Barangay Health Station</option>
                                    <option value="Tangub Barangay Health Station">Tangub Barangay Health Station</option>
                                    <option value="Villa Esperanza Barangay Health Station">Villa Esperanza Barangay Health Station</option>
                                    <option value="Villamonte Barangay Health Station">Villamonte Barangay Health Station</option>
                                    <option value="Vista Alegre Barangay Health Station">Vista Alegre Barangay Health Station</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                            <div class="col-md-9">                                                 
                                <select class="form-control select" data-live-search="true" name="medicine_name" required>
                                    <option value="#">Select Medicine</option>
                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['medicine_name'];?>"><?php echo $fetch['medicine_name'];?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">                                        
                            <label class="col-md-3 col-xs-12 control-label">Date Given</label>
                            <div class="col-md-9">   
                                <input data-toggle="tooltip" data-placement="right" title="Date Given" type="text" class="form-control datepicker" value="Date Given" name="date_given" required>                        
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                            <div class="col-md-9">   
                                <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" placeholder="Quantity in box" required/>
                            </div>                                            
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Received By</label>
                            <div class="col-md-9">   
                                <input data-toggle="tooltip" data-placement="right" title="Received By" type="text" class="form-control" name="received_by" placeholder="Received by" required/>
                            </div>                                            
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="medication_dispensation"><span class="fa fa-check"></span>Save</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>
            </form>
        </div>
    </div>
</div>  
<!-- End Dispensed Medicine-->

<!-- Add Stocks-->
<div class="modal fade" id="new_stock" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Stocks</h4>
            </div>
            <form role="form" class="form-horizontal" action="medication_dispensation.php" method="post" onsubmit="return confirm('Are you sure you want to add new stocks for this medicine?');">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                            <div class="col-md-9">       
                                <select class="form-control select" data-live-search="true" name="medicine_name" required>
                                    <option>Select Medicine</option>
                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['medicine_name'];?>"><?php echo $fetch['medicine_name'];?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                            <div class="col-md-9">                                  
                                <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" 
                                       placeholder="Quantity / Box" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="medicine_stock"><span class="fa fa-check"></span>Save</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Add Stocks-->

<!-- Edit Dispensed-->
<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatedata<?php echo $fetch['dispensation_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Edit Medicine Dispensed</h4>
            </div>
            <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">                                            
                                <div class="input-group">
                                    <input type="hidden" class="form-control" name="dispensation_id" value="<?php echo $fetch['dispensation_id'];?>" required>
                                </div>                                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Health Center</label>
                            <div class="col-md-9">   
                                <select class="form-control select" data-live-search="true" name="health_center">
                                    <option value="<?php echo $fetch['health_center']?>"><?php echo $fetch['health_center']?></option>
                                    <option value="ABCASA Barangay Health Station">ABCASA Barangay Health Station</option>
                                    <option value="Alangilan Barangay Health Station">Alangilan Barangay Health Station</option>
                                    <option value="Alijis Barangay Health Station">Alijis Barangay Health Station</option>
                                    <option value="Banago Barangay Health Station">Banago Barangay Health Station</option>
                                    <option value="Bata Barangay Health Station">Bata Barangay Health Station</option>
                                    <option value="Cabug Barangay Health Station">Cabug Barangay Health Station</option>
                                    <option value="Estefania Barangay Health Station">Estefania Barangay Health Station</option>
                                    <option value="Felisa Barangay Health Station">Felisa Barangay Health Station</option>
                                    <option value="Granada Barangay Health Station">Granada Barangay Health Station</option>
                                    <option value="Handumanan Barangay Health Station">Handumanan Barangay Health Station</option>
                                    <option value="Lopez Jaena Health Plus">Lopez Jaena Health Plus</option>
                                    <option value="Mabini Health Plus">Mabini Health Plus</option>
                                    <option value="Mandalagan Barangay Health Station">Mandalagan Barangay Health Station</option>
                                    <option value="Mansilingan Barangay Health Station">Mansilingan Barangay Health Station</option>
                                    <option value="Montevista Barangay Health Station">Montevista Barangay Health Station</option>
                                    <option value="Pahanocoy Barangay Health Station">PAHANOCOY Barangay Health Station</option>
                                    <option value="Punta Taytay Barangay Health Station">Punta Taytay Barangay Health Station</option>
                                    <option value="Singcang Barangay Health Station">Singcang Barangay Health Station</option>
                                    <option value="Sum-ag Barangay Health Station">Sum-ag Barangay Health Station</option>
                                    <option value="Taculing Barangay Health Station">Taculing Barangay Health Station</option>
                                    <option value="Tangub Barangay Health Station">Tangub Barangay Health Station</option>
                                    <option value="Villa Esperanza Barangay Health Station">Villa Esperanza Barangay Health Station</option>
                                    <option value="Villamonte Barangay Health Station">Villamonte Barangay Health Station</option>
                                    <option value="Vista Alegre Barangay Health Station">Vista Alegre Barangay Health Station</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                            <div class="col-md-9">                                                  
                                <select class="form-control select" data-live-search="true" name="medicine_name">
                                    <option value="<?php echo $fetch['medicine_name']?>"><?php echo $fetch['medicine_name']?></option>
                                    <?php
    $query2 = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());
                                      while($fetch2 = $query2->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch2['medicine_name'];?>"><?php echo $fetch2['medicine_name'];?></option>
                                    <?php
                                      }
                                    ?> 
                                </select>
                            </div>
                        </div>

                        <div class="form-group">                                        
                            <label class="col-md-3 col-xs-12 control-label">Date Given</label>
                            <div class="col-md-9">
                                <input data-toggle="tooltip" data-placement="right" title="Date Given" type="text" class="form-control datepicker" value="<?php echo $fetch['date_given']?>" name="date_given">                        
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                            <div class="col-md-9">
                                <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" value="<?php echo $fetch['quantity']?>"/>
                            </div>                                            
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Received By</label>
                            <div class="col-md-9">   
                                <input data-toggle="tooltip" data-placement="right" title="Received By" type="text" class="form-control" name="received_by" value="<?php echo $fetch['received_by']?>"/>
                            </div>                                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name ="edit_dispensed"><span class="fa fa-check"></span>Save</button> 
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
<!-- End of Edit Dispensed-->