<h2>Ajouter un vin</h2><br /><br />
<div class="row">
	<div class="col-md-6">
		<form enctype="multipart/form-data" rel="form" method="post" action="#">

			<div class="row">
				<div class="col-md-4 text-right">
					<label for="name">Nom</label>
				</div>
				<div class="col-md-8">
					<input type="name" class="form-control" name="data[Wine][name]" id="name" placeholder="Nom" required>
					<br /><br />
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 text-right">
					<label for="desc">Description</label>
				</div>
				<div class="col-md-8">
					<textarea class="form-control" name="data[Wine][description]" id="desc" rows="3" required></textarea>
					<br /><br />
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 text-right">
					<label for="file">Image</label>
				</div>
				<div class="col-md-8">
					<input type="file" name="data[Wine][image]" id="file">
					<br /><br />
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 text-right">
				</div>
				<div class="col-md-8">
					<button type="submit" class="btn btn-success">Sauvegarder</button>
					<br /><br />
				</div>
			</div>

		</form>
	</div>
	<div class="col-md-6">
	</div>
</div>
<br /><br /><br />