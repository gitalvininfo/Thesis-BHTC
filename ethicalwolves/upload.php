<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

if (isset($_POST['uploadBtn'])){
	$fileName = $_FILES['myFile']['name'];
	$fileTmpName = $_FILES['myFile']['tmp_name'];

	$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);

	$allowedType = array('csv');
	if (!in_array($fileExtension, $allowedType)){
		echo "<script type='text/javascript'>alert('You must upload CSV file only!');</script>";
		echo "<script>document.location='sputum_submission.php'</script>";
?>



<?php } else {
		$handle = fopen($fileTmpName, 'r');
		date_default_timezone_set('Asia/Manila');	
		$date_created=date("F j, Y, g:i a");
		while (($myData = fgetcsv($handle, 1000, ',')) !== FALSE) {
			$patient_name = $myData[0];
			$date1 = $myData[1];
			$date2 = $myData[2];
			$specimen_collector = $myData[3];
			$health_center = $myData[4];

			$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$conn->query("INSERT INTO `submission` VALUES('', '$patient_name', '$date1', '$date2', '$specimen_collector', '$health_center', '$date_created')") or die(mysqli_error());
			$conn->close();
			echo "<script type='text/javascript'>alert('Successfully uploaded file!');</script>";
			echo "<script>document.location='sputum_submission.php'</script>";
		}
		if(!$conn) {
			die("There was an error in uploading the file" . mysql_error());
		}
		else {?>
<div>File uploaded successfully!</div>
<?php }

	}

}
?>