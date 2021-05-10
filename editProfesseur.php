<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['editProf'])){
		$id = $_POST['id'];
		$matricule = $_POST['matricule'];
		$nom_complet = $_POST['nom_complet'];
		$date_inscription = $_POST['date_inscription'];
        $modules_enseigne = $_POST['modules_enseigne'];
		$sql = "UPDATE professeurs SET matricule = '$matricule', nom_complet = '$nom_complet', date_inscription = '$date_inscription' , modules_enseigne = '$modules_enseigne' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Professor updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: ListerProfesseur.php');

?>