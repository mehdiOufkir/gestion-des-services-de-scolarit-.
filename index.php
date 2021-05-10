<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestion etudiants</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
     
	</style>
</head>
<body>
    <?php
   include_once('header.php');
    ?>
    <div class="main">
    
<div class="container">
	<h1 class="page-header text-center">Gestion etudiants</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ajouter</a>
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped ">
					<thead>
						<th>ID</th>
						<th>nom_complet</th>
						<th>cin</th>
						<th>date_naissance</th>
                        <th>filiere</th>
						<th>date_inscription</th>
                        <th>niveau</th>
						<th>modules</th>
						<th>Action</th>
                        
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM etudiants";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['nom_complet']."</td>
									<td>".$row['cin']."</td>
									<td>".$row['date_naissance']."</td>
                                    <td>".$row['filiere']."</td>
									<td>".$row['date_inscription']."</td>
                                    <td>".$row['niveau']."</td>
									<td>".$row['modules']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('delete_edit_etudiant.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('addForm_etudiant.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
    </div>
</body>

<style>
.PP{
	text-align: center;
}
</style>
</html>