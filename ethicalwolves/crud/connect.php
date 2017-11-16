<?php
	try {
	  $dbh = new PDO("mysql:host=localhost;dbname=thesis", 'root', '');
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}