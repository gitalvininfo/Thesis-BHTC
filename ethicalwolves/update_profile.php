<?php 
session_start();
if(empty($_SESSION['user_id'])):
header('Location:index.php');
endif;

$id = $_SESSION['user_id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$old = $_POST['passwordold'];

$pass = md5($old);
$salt = "HAHAHAHAHA";
$pass = $salt.$pass;

$passnew = md5($password);
$salt = "HAHAHAHAHA";
$passnew = $salt.$passnew;

$conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
$q2 = $conn->query ("SELECT * FROM `user` WHERE `user_id` = $id") or die(mysqli_error());
$f2 = $q2->fetch_array();
$id = $f2['user_id'];


$passold = $f2['password'];

if ($passold==$pass){

    if($password<>""){
        $conn->query("UPDATE `user` SET `firstname` = '$name', `username` = '$username', `password` = '$passnew' WHERE `user_id` = '$id'") or die(mysqli_error());
    }
    else {
        $conn->query("UPDATE `user` SET `firstname` = '$name', `username` = '$username' WHERE `user_id` = '$id'") or die(mysqli_error());
    }

    $_SESSION['firstname'] = $name;
    echo "<script type='text/javascript'> alert('Successfully changed password!'); </script>";
    echo "<script>document.location='change_password.php'</script>";
}
else {
    echo "<script type='text/javascript'> alert ('Old Password does not match!')</script>";
    echo "<script>document.location='change_password.php'</script>";
}


?>