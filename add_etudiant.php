<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$nom_complet = $_POST['nom_complet'];
		$cin = $_POST['cin'];
		$date_naissance = $_POST['date_naissance'];
        $filiere = $_POST['filiere'];
		$date_inscription = $_POST['date_inscription'];
		$niveau = $_POST['niveau'];
        $modules = $_POST['modules'];
		$sql = "INSERT INTO etudiants (nom_complet, cin, date_naissance,filiere,date_inscription,niveau,modules) VALUES ('$nom_complet', '$cin', '$date_naissance', '$filiere','$date_inscription', '$niveau', '$modules')";


		if($conn->query($sql)){
			$_SESSION['success'] = 'student added successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>