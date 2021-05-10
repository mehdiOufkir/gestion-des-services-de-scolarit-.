<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$nom_module = $_POST['nom_module'];
		$coefficient = $_POST['coefficient'];
		$sql = "INSERT INTO modules (nom_module, coefficient) VALUES ('$nom_module', '$coefficient')";


		if($conn->query($sql)){
			$_SESSION['success'] = 'Module added successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ListerModules.php');
?>