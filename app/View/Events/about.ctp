<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.about', 'active'); ?>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>6</strong> Wines in Cellar</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>27</strong> Wines in Whishlist</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>239</strong> Friends</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>32</strong> Likes</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead">Partictipate to <strong>8</strong> Events</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>3</strong> Events organised</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>832</strong> Posts</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>0</strong> Companies</p>
	</div>
</div>
<hr />

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