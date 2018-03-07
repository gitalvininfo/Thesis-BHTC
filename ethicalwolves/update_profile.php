<?php 
session_start();
if(empty($_SESSION['user_id'])):
header('Location:index.php');
endif;

$id = $_SESSION['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$old = $_POST['passwordold'];

$pass = sha1($old);
$salt = "aTya03gHJdTyqLkWQfg15yU";
$pass = $salt.$pass;

$passnew = sha1($password);
$salt = "aTya03gHJdTyqLkWQfg15yU";
$passnew = $salt.$passnew;


$conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
$q2 = $conn->query ("SELECT * FROM `user` WHERE `user_id` = $id") or die(mysqli_error());
$f2 = $q2->fetch_array();
$id = $f2['user_id'];
date_default_timezone_set('Asia/Manila');	
$time=date("g:i a");
$date=date("F j, Y");
$remarks = "You edited your profile";

$passold = $f2['password'];

if ($passold==$pass){

	if($password<>""){
		$conn->query("UPDATE `user` SET `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username', `password` = '$passnew' WHERE `user_id` = '$id'") or die(mysqli_error());
		$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'System Maintenance - Update Profile', '$remarks', '$date', '$time')") or die(mysqli_error());
	}
	else {
		$conn->query("UPDATE `user` SET `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username' WHERE `user_id` = '$id'") or die(mysqli_error());
		$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'System Maintenance - Update Profile', '$remarks', '$date', '$time')") or die(mysqli_error());

	}
	echo "<script type='text/javascript'> alert('Successfully changed account information!'); </script>";
	echo "<script>document.location='change_password.php'</script>";
}
else {
	echo "<script type='text/javascript'> alert ('Old Password does not match!')</script>";
	echo "<script>document.location='change_password.php'</script>";
}


?>