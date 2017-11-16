<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("DELETE FROM `medical_technologist` WHERE `medtech_id` = '$_GET[id]'") or die(mysqli_error());
	header("location:master_file_medtech.php");
?>