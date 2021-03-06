<?php
require '../logincheck.php';
$connection = mysqli_connect('localhost', 'root', '', 'thesis');

$tables = array();
$result = mysqli_query($connection, "SHOW TABLES");
while ($row = mysqli_fetch_row($result)){
	$tables[] = $row[0];
}

$return = '';

foreach ($tables as $table) {
	$result = mysqli_query($connection, "SELECT * FROM ". $table);
	$num_fields = mysqli_num_fields($result);

	$return .= 'DROP TABLE '.$table.';';
	$row2 = mysqli_fetch_row(mysqli_query($connection, 'SHOW CREATE TABLE '.$table));
	$return .= "\n\n".$row2[1].";\n\n";

	for ($i=0;$i<$num_fields;$i++){
		while ($row = mysqli_fetch_row($result)){
			$return .= 'INSERT INTO '.$table.' VALUES(';
			for ($j=0;$j<$num_fields;$j++){
				$row[$j] = addslashes($row[$j]);
				if(isset($row[$j])){$return .= '"' .$row[$j]. '"';} else {$return .= '""';}
				if($j<$num_fields-1){$return .= ',';}
			}
			$return .="); \n";
		}
	}

	$return .="\n\n\n";
}
date_default_timezone_set('Asia/Manila');
$handle = fopen('thesis_'.date('F-j-Y-g-i-a').'.sql','w+');
fwrite($handle, $return);
fclose($handle);
date_default_timezone_set('Asia/Manila');
$date=date("F j, Y, g:i a");

$time=date("g:i a");
$date2=date("F j, Y");
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
$fetch = $query->fetch_array();
$id=$_SESSION['user_id'];
$remarks = "Exported database";

$conn->query("INSERT INTO `history_log` VALUES('', '$id', 'System Maintenance', '$remarks', '$date2', '$time')") or die(mysqli_error());

$conn->query("INSERT INTO `backup` VALUES('', 'Successfully exported database', '$date')") or die(mysqli_error());

echo "<script> alert ('Successfully backed up BHTC-PMIS database!')</script>";
echo "<script>document.location='../download_database.php'</script>";  
?>
