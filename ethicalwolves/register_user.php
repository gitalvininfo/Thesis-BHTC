
<?php

if(ISSET($_POST['save_user'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $pass1 = md5($password);
    $salt = "HAHAHAHAHA";
    $pass1 = $salt.$pass1;

    $conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `user` WHERE BINARY `username` = '$username'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Username already taken. Try another one.')</script>";
    }
    else{
        $conn->query ("INSERT INTO `user` VALUES(' ', '$firstname', '$lastname', '$position', '$username', '$pass1')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
        echo "<script>window.location='index.php'</script>";
    }
}
?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

    <head>
        <title>BHTC-PMIS</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets2/vendor/linearicons/style.css">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="assets2/css/main.css">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="assets2/css/demo.css">
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <!-- ICONS -->
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/project_logo.png">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    <div class="auth-box ">
                        <div class="left">
                            <div class="content">
                                <div class="header">
                                    <p class="lead">Register Account</p>
                                </div>
                                <form class="form-auth-small" action="register_user.php" method="POST">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="position" required>
                                            <option value="#">Choose Position</option>
                                            <option value="NTP Nurse Coordinator">NTP Nurse Coordinator</option>
                                            <option value="Medical Technologist">Medical Technologist</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                                    </div>
                                    <button type="submit" name="save_user" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-link btn-block" >Already have an Account</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="right">
                            <div class="overlay"></div>
                            <div class="content text">
                                <div class="logo text-center"><img style="height:150px;width:150px;" src="assets/images/project_logo.png" alt="Klorofil Logo"></div> <br>
                                <h1 class="heading">Bacolod City Health TB DOTS Center</h1>
                                <p>Patient Management Information System</p>
                                <hr>
                                <h6><span class="fa fa-map-marker"></span> &nbsp; BBB St., Bacolod City, Philippines 6100</h6>
                                <h6><span class="fa fa-phone"></span> &nbsp; (034) 434 4098</h6>
                                <h6><span class="fa fa-envelope"></span> &nbsp; cho_bacolod_city@yahoo.com</h6>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WRAPPER -->
    </body>

</html>


