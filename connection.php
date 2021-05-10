<?php
	
	$conn = new mysqli('localhost', 'root', '', 'ecole');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>