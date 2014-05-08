<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.about', 'active'); ?>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>6</strong> Vins dans sa cave</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>27</strong> Vins dans sa Whishlist</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>239</strong> Amis</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>32</strong> Likes</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead">A participé à <strong>1</strong> Évènements</p>
	</div>
	<div class="col-md-6">	
		<p class="lead">A organisé <strong><?= $user['User']['event_count'] ?></strong> Évènements</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>832</strong> Posts</p>
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