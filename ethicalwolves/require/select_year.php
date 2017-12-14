<div class="btn-group pull-right">
    <div class="pull-left">
        <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
            <option>Select Year...</option>
            <option value="<?php 
                           if(isset($_GET['year'])){
                               $value=$_GET['year']; 
                               echo $value;
                           }
                           else{
                               echo date('Y');
                           }
                           ?>">
                <?php 
                if(isset($_GET['year'])){
                    $value=$_GET['year']; 
                    echo $value;
                }
                else{
                    echo date('Y');
                }
                ?></option>
            <?php
            for($y=2013; $y<=2025; $y++){
            ?>
            <option value="<?php echo $y ?>"><?php echo $y; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>