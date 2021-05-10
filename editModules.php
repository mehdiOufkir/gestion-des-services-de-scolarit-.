<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['editMo'])){
		$id = $_POST['id'];
		$nom_module = $_POST['nom_module'];
		$coefficient = $_POST['coefficient'];
		$sql = "UPDATE modules SET nom_module = '$nom_module', coefficient = '$coefficient' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Module updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: ListerModules.php');

?>