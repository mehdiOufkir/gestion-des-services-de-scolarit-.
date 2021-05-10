
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_etudiant.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nom complet:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_complet" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">cin:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cin" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">date naissance:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_naissance" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">filiere:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="filiere" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">date inscription:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_inscription" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">niveau:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="niveau" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">modules:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="modules" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>