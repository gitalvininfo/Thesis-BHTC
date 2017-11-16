<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("DELETE FROM `itr` WHERE `itr_no` = '$_GET[id]'") or die(mysqli_error());
	header("location:patient_table.php");
?>