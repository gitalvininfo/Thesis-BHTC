<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['save_user'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $license = $_POST['license'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $pass1 = md5($password);
    $salt = "HAHAHAHAHA";
    $pass1 = $salt.$pass1;

    require 'config.php';
    $q1 = $conn->query ("SELECT * FROM `user` WHERE BINARY `username` = '$username'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Username already taken. Try another one.')</script>";
    }
    else{
        $conn->query ("INSERT INTO `user` VALUES(' ', '$firstname', '$lastname', '$license', 'Medical Technologist', '$username', '$pass1')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
        echo "<script>window.location='master_file_medtech.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
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
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>System Maintenance</li>
                    <li class="active"><strong><mark>User Management</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Medical Technologists</strong></h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 474px;">
                                    <table class="table table-hover">
                                        <thead> 
                                            <tr class="info">
                                                <th><center>First Name</center></th>
                                                <th><center>Last Name</center></th>
                                                <th><center>License Number</center></th>
                                                <th><center>Username</center></th>
                                                <th><center>Password</center></th>
                                                <th><center>Status</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'config.php';
            $query = $conn->query("SELECT * FROM `user` WHERE `position` = 'Medical Technologist' ORDER BY `user_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><center><?php echo $fetch['firstname']?></center></td>
                                                <td><center><?php echo $fetch['lastname']?></center></td>
                                                <td><center><?php echo $fetch['license']?></center></td>
                                                <td><center><?php echo $fetch['username']?></center></td>
                                                <td><center>*******</center></td>
                                                <td><center><strong><?php echo $fetch['status']?></strong></center></td>
                                                <td><center>
                                                    <a href="#updateuser<?php echo $fetch['user_id'];?>" data-target="#updateuser<?php echo $fetch['user_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit</a>
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
                </div>            
            </div>
        </div>
        <?php require 'require/modals/edit_medtech_account.php'?>
        <?php require 'require/logout.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>    
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>    
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>       
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {
                    username: {
                        required: true,
                        minlength: 6,
                        maxlength: 10
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 100
                    },
                }
            });
        </script>
    </body>
</html>



