<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom_complet = $_POST['nom_complet'];
		$cin = $_POST['cin'];
		$date_naissance = $_POST['date_naissance'];
        $filiere = $_POST['filiere'];
		$date_inscription = $_POST['date_inscription'];
		$niveau = $_POST['niveau'];
        $modules = $_POST['modules'];
		$sql = "UPDATE etudiants SET nom_complet = '$nom_complet', cin = '$cin', date_naissance = '$date_naissance', filiere = '$filiere', date_inscription = '$date_inscription', niveau = '$niveau', modules = '$modules' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'student updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>