<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$matricule = $_POST['matricule'];
		$nom_complet = $_POST['nom_complet'];
		$date_inscription = $_POST['date_inscription'];
		$modules_enseigne = $_POST['modules_enseigne'];
		$sql = "INSERT INTO professeurs (matricule, nom_complet, date_inscription,modules_enseigne) VALUES ('$matricule', '$nom_complet', '$date_inscription', '$modules_enseigne')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'professor added successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ListerProfesseur.php');
?>