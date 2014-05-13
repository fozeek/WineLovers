<div class="row">
	<div class="col-md-3">	
		<img src="<?= $wine['Wine']['image'] ?>" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;width: 100%;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['Wine']['slug'])) ?>">Actualités</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'about', 'name' => $wine['Wine']['slug'])) ?>">À propos</a></li>
		  <li class="<?= $this->fetch('active.cellars') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'cellars', 'name' => $wine['Wine']['slug'])) ?>">Caves</a></li>
		  <li class="<?= $this->fetch('active.wishlists') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'wishlist', 'name' => $wine['Wine']['slug'])) ?>">Wishlists</a></li>
		</ul>
	</div>
	<div class="col-md-9">	
		<h2><span style="color: rgb(128,0,0);"><?= $wine['Wine']['name'] ?></span> <small>depuis 1324</small></h2>
		<p class="lead">
			<?= $wine['Wine']['description'] ?>
		</p>
		<div class="btn-group">
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter à ma Cave</button>
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-heart-empty"></span> Ajouter à ma Whishlist</button>
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-glass"></span> Créer un Évènement</button>
		</div>

		<hr />

		<?php echo $this->fetch('content'); ?>

	</div>

</div>