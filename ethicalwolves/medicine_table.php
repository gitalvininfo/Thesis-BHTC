<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['new_medicine'])){
    $medicine_name = $_POST['medicine_name'];
    $medicine_description = $_POST['medicine_description'];
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_name` = '$medicine_name'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Medicine name already exist!')</script>";
        echo "<script>document.location='medication_dispensation.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `medicine` VALUES('', '$medicine_name', '$medicine_description', '')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new medicine!');</script>";
        echo "<script>document.location='medicine_table.php'</script>";  
    }
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
                    <li>Data Entry</li>
                    <li class="active">New Medicine</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-file-text"></span> Medicine List <strong></strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#new_medicine"><span class="fa fa-plus"></span>New Medicine </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                    <div class="panel-body">
                                        <table id="medication_dispensation" class="table datatable">
                                            <thead> 
                                                <tr>
                                                    <th><center>Medicine ID</center></th>
                                                    <th><center>Medicine Name</center></th>
                                                    <th><center>Medicine Description</center></th>
                                                    <th><center>Running Balance</center></th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $fetch['medicine_id']?></center></td>
                                                    <td><center><?php echo $fetch['medicine_name']?></center></td>
                                                    <td><center><?php echo $fetch['medicine_description']?></center></td>
                                                    <td><center><strong><?php echo $fetch['running_balance']?></strong></center></td>
                                                    <td><center>
                                                        <a href="#updatedata<?php echo $fetch['medicine_id'];?>" data-target="#updatedata<?php echo $fetch['medicine_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
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
                                <!-- END TABS -->
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>

        <!-- New Medicine-->
        <div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-plus"></span> New Medicine</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="medicine_table.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Name" type="text" class="form-control" name="medicine_name" 
                                                   placeholder="Medicine Name"/>
                                        </div>                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Description" type="text" class="form-control" name="medicine_description" 
                                                   placeholder="Medicine Description"/>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="new_medicine"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New Medicine-->


        <!-- Edit Medicine-->
        <?php
        $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updatedata<?php echo $fetch['medicine_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true" style="display:none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="height:auto">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead"><span class="fa fa-pencil-square-o"></span> Edit Medicine</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="edit_query.php" method="post">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="hidden" class="form-control" name="medicine_id" value="<?php echo $fetch['medicine_id'];?>" required>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Name" type="text" class="form-control" name="medicine_name" 
                                                   value="<?php echo $fetch['medicine_name']?>"/>
                                        </div>                                            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input data-toggle="tooltip" data-placement="right" title="Medicine Description" type="text" class="form-control" name="medicine_description" 
                                                   value="<?php echo $fetch['medicine_description']?>"/>
                                        </div>                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name ="edit_medicine"><span class="fa fa-check"></span>Save</button> 
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
        <!-- End of Edit Medicine-->


        <?php require 'require/logout.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
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






