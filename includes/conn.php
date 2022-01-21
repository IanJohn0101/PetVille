<?php
	$conn = new mysqli('localhost', 'root', '', 'petsociety');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>