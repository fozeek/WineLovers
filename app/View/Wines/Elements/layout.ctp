<?php $this->Html->script('pages/wines/script', array('inline'=>false)); ?>
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
		  <button id="addCellarWine" data-id="<?= $wine['Wine']['id'] ?>" type="button" class="btn btn-<?php if($isInCellar) : ?>success<?php else: ?>default<?php endif ?>"><span class="glyphicon glyphicon-<?php if($isInCellar) : ?>ok<?php else: ?>plus-sign<?php endif ?>"></span> <span data-original="Ajouter à ma Cave" data-replace="Dans ma Cave" data-over="Retirer de ma Cave" data-remove="Vin retiré de votre Cave"><?php if($isInCellar) : ?>Dans ma Cave<?php else: ?>Ajouter à ma Cave<?php endif ?></span></button>
		  <button id="addWishlistWine" data-id="<?= $wine['Wine']['id'] ?>" type="button" class="btn btn-<?php if($isInWishlist) : ?>success<?php else: ?>default<?php endif ?>"><span class="glyphicon glyphicon-<?php if($isInWishlist) : ?>ok<?php else: ?>heart-empty<?php endif ?>"></span> <span data-original="Ajouter à ma Whishlist" data-replace="Dans votre Wishlist" data-over="Retirer de ma Wishlist" data-remove="Vin retiré de votre Wishlist"><?php if($isInWishlist) : ?>Dans votre Wishlist<?php else: ?>Ajouter à ma Whishlist<?php endif ?></span></button>
		</div>

		<hr />

		<?php echo $this->fetch('content'); ?>

	</div>

</div>