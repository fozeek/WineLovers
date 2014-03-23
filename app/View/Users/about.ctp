<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.about', 'active'); ?>
<div class="row">
	<div class="col-md-3">
		<p><strong>Pseudo</strong></p>
	</div>
	<div class="col-md-9">	
		<p class="lead"><?= $user['User']['pseudo'] ?></p>
	</div>
</div>
<hr />
<div class="row">
	<div class="col-md-3">
		<p><strong>Prenom</strong></p>
	</div>
	<div class="col-md-9">	
		<p class="lead"><?= $user['User']['firstname'] ?></p>
	</div>
</div>
<hr />
<div class="row">
	<div class="col-md-3">
		<p><strong>Nom</strong></p>
	</div>
	<div class="col-md-9">	
		<p class="lead"><?= $user['User']['lastname'] ?></p>
	</div>
</div>
<hr />
<div class="row">
	<div class="col-md-3">
		<p><strong>Description</strong></p>
	</div>
	<div class="col-md-9">	
		<p class="lead">"<?= $user['User']['description'] ?>"</p>
	</div>
</div>
<hr />