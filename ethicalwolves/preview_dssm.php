<form role="form" class="form-horizontal" method="post" enctype="multi-part/form-data">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-md-2 control-label">Date Examined</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    <input type="text" class="form-control datepicker" name="date_examined" placeholder="Date Examined" data-toggle="tooltip" data-placement="top" title="Date Examined" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Laboratory Number</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                    <input type="text" class="form-control" name="laboratory_number" value="<?php echo $laboratory_number = $_POST['laboratory_number']; ?>" data-toggle="tooltip" data-placement="top" title="Laboratory Number" required/>
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Visual Appearance</label>
            <div class="col-md-9">
                <select class="form-control select" name="visual_appearance" required >
                    <option value = "">Choose Visual Appearance</option>
                    <option value = "Salivary">Salivary</option>
                    <option value = "Muco-Purulent">Muco-Purulent</option>
                    <option value = "Blood-Stained">Blood-Stained</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Reading</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                    <input type="text" class="form-control" name="reading" placeholder="Reading" data-toggle="tooltip" data-placement="top" title="Reading" required/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Laboratory Diagnosis</label>
            <div class="col-md-9">
                <select class="form-control select" name="laboratory_diagnosis" required >
                    <option value = "">Choose Laboratory Diagnosis</option>
                    <option value = "Positive">Positive</option>
                    <option value = "Negative">Negative</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Examined By</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                    <input type="text" class="form-control" name="examined_by" placeholder="Examined By" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Date Released</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    <input type="text" class="form-control datepicker" name="date_released" placeholder="Date Released" data-toggle="tooltip" data-placement="top" title="Date Released" required/> </div>
            </div>
        </div>
        <div class="tab-footer">
            <button type="submit" name="add_dssm" class="btn btn-info pull-right"> <span class="fa fa-check"> Submit </span></button>
        </div>
    </div>
</form>