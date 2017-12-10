<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['medication_dispensation'])){
    $health_center = $_POST['health_center'];
    $medicine_name = $_POST['medicine_name'];
    $date_given = $_POST['date_given'];
    $quantity = $_POST['quantity'];
    $received_by = $_POST['received_by'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `medication_dispensation` VALUES('', '$health_center', '$medicine_name', '$date_given', '$quantity', '$received_by')") or die(mysqli_error());
    $conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` - '$quantity' WHERE `medicine_name` = '$medicine_name'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully dispensed medicine!');</script>";
    echo "<script>document.location='medication_dispensation.php'</script>";  

}

if(ISSET($_POST['medicine_stock'])){
    $medicine_name = $_POST['medicine_name'];
    $quantity = $_POST['quantity'];
    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d H:i:s");
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `medicine_stocks` VALUES('', '$medicine_name', '$quantity', '$date')") or die(mysqli_error());
    $conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` + '$quantity' WHERE `medicine_name` = '$medicine_name'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
    echo "<script>document.location='medication_dispensation.php'</script>";  
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BHTC-PMIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
               <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Transaction</li>
                    <li class="active">Medication Dispensation</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Medication Dispensation</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Medicine Stockin List</a></li>
                                </ul>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title"><span class="fa fa-file-text"></span> Medication Dispensation History <strong></strong></h3>
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#dispensed"><span class="fa fa-arrow-up"></span>Release </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <table id="medication_dispensation" class="table datatable">

                                                            <thead> 
                                                                <tr>
                                                                    <th><center>ID</center></th>
                                                                    <th><center>Health Center</center></th>
                                                                    <th><center>Medicine Name</center></th>
                                                                    <th><center>Date Given</center></th>
                                                                    <th><center>Quantity</center></th>
                                                                    <th><center>Received By</center></th>
                                                                    <th><center>Action</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                   $query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
                                   while($fetch = $query->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td><center><?php echo $fetch['dispensation_id']?></center></td>
                                                                    <td><center><?php echo $fetch['health_center']?></center></td>
                                                                    <td><center><?php echo $fetch['medicine_name']?></center></td>
                                                                    <td><center><?php echo $fetch['date_given']?></center></td>
                                                                    <td><center><?php echo $fetch['quantity']?></center></td>
                                                                    <td><center><?php echo $fetch['received_by']?></center></td>
                                                                    <td><center>
                                                                        <a href="#updatedata<?php echo $fetch['dispensation_id'];?>" data-target="#updatedata<?php echo $fetch['dispensation_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>

                                                                        </center></td>
                                                                </tr>
                                                                <?php
                                   }
                                   $conn->close();
                                                                ?>
                                                            </tbody>
                                                        </table>   
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title"><span class="fa fa-file-text"></span> Medicine Stockin List <strong></strong></h3>
                                                        <div class="btn-group pull-right">
                                                            <div class="pull-left">
                                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#new_stock"><span class="fa fa-plus"></span>Add Stock</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <table id="medication_dispensation" class="table datatable">
                                                            <thead> 
                                                                <tr>
                                                                    <th><center>Medicine Name</center></th>
                                                                    <th><center>Quantity</center></th>
                                                                    <th><center>Date Created</center></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                                                                $query = $conn->query("SELECT * FROM `medicine_stocks` ORDER BY `medicine_stock_id` DESC") or die(mysqli_error());
                                                                while($fetch = $query->fetch_array()){

                                                                ?>
                                                                <tr>
                                                                    <td><center><?php echo $fetch['medicine_name']?></center></td>
                                                                    <td><center><?php echo $fetch['quantity']?></center></td>
                                                                    <td><center><?php echo $fetch['date']?></center></td>
                                                                </tr>

                                                                <?php
                                                                }
                                                                $conn->close();
                                                                ?>  
                                                            </tbody>
                                                        </table>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TABS -->
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
        <div class="modal fade" id="dispensed" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-group"></span> Medication Dispensation</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="medication_dispensation.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12">                                                    
                                        <select class="form-control select" data-live-search="true" name="health_center">
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
                                    <div class="col-md-12">                                                    
                                        <select class="form-control select" data-live-search="true" name="medicine_name">
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
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date Given" type="text" class="form-control datepicker" value="Date Given" name="date_given">                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" placeholder="Quantity in box"/>
                                        </div>                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Received By" type="text" class="form-control" name="received_by" placeholder="Received by"/>
                                        </div>                                            
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
        <div class="modal fade" id="new_stock" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-plus"></span> New Stocks</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="medication_dispensation.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12">                                                    
                                        <select class="form-control select" data-live-search="true" name="medicine_name">
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
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" 
                                                   placeholder="Quantity"/>
                                        </div>                                            
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

        <!-- Edit Dispensed-->
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updatedata<?php echo $fetch['dispensation_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="height:auto">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-plus"></span> Edit Medicine Dispensed</h4>
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
                                    <div class="col-md-12">     
                                        <select class="form-control select" data-live-search="true" name="health_center" required>
                                            <option value="<?php echo $fetch['health_center'];?>"><?php echo $fetch['health_center'];?></option>
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
                                    <div class="col-md-12">                                                    
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
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Received By" type="text" class="form-control" name="received_by" value="<?php echo $fetch['received_by']?>"/>
                                        </div>                                            
                                    </div>
                                </div>
                                <div class="form-group">                                        
                                    <div class="col-md-12 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Date Given" type="text" class="form-control datepicker" value="<?php echo $fetch['date_given']?>" name="date_given">                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Quantity" type="number" class="form-control" name="quantity" value="<?php echo $fetch['quantity']?>"/>
                                        </div>                                            
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


        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-danger btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






