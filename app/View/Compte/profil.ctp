<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.profil', 'active'); ?>

<div class="row">
	<div class="col-md-3">	
		<img src="http://lorempixel.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
	</div>
	<div class="col-md-9">
		
		<h2><?= $auth['name'] ?> <small>inscrit le <?= $auth['created_print'] ?></small></h2>

		<p class="lead">
			<?= $auth['description'] ?>
		</p>
		
		<hr />

	</div>

</div>