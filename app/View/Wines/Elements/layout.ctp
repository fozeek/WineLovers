<?php $this->Html->script('pages/wines/script', array('inline'=>false)); ?>

<div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Noter ce vin</h4>
      </div>
      <input type="hidden" id="ids"/>
      <div class="modal-body" style="padding-bottom: 1px;">
        <form role="form">
          <div class="row">
            <div class="form-group col-md-4" style="padding: 10px;text-align: right;">
              <label for="winenote">Note</label>
            </div>
            <div class="form-group col-md-8" style="padding: 5px;padding-left: 20px;">
			  <span class="glyphicon glyphicon-star-empty" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty" style="font-size: 2em;cursor: pointer;"></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="winecomm">Commentaire</label>
            </div>
            <div class="form-group col-md-8">
            <textarea id="eventdesc" class="form-control"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="eventwhere">Millésime</label>
            </div>
            <div class="form-group col-md-8">
            <input id="eventwhere" class="form-control"/>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="step2submit" type="button" class="btn btn-primary">Enregistrer ma notation</button>
      </div>
    </div>
  </div>
</div>


<div class="row">
	<div class="col-md-3">	
		<img src="<?= $wine['Wine']['image'] ?>" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;width: 100%;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['Wine']['slug'])) ?>">Actualités</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'about', 'name' => $wine['Wine']['slug'])) ?>">À propos</a></li>
		  <li class="<?= $this->fetch('active.testimonials') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'testimonials', 'name' => $wine['Wine']['slug'])) ?>">Appréciations</a></li>
		  <li class="<?= $this->fetch('active.cellars') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'cellars', 'name' => $wine['Wine']['slug'])) ?>">Caves</a></li>
		  <li class="<?= $this->fetch('active.wishlists') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'wishlist', 'name' => $wine['Wine']['slug'])) ?>">Wishlists</a></li>
		</ul>
	</div>
	<div class="col-md-9">	
		<h2><span style="color: rgb(128,0,0);"><?= $wine['Wine']['name'] ?></span> 
      <?php
        $note = 0;
        foreach ($wine['Reviews'] as $key => $review) {
          $note += $review['note'];
        }
        if(count($wine['Reviews'])!=0) {
          $note = round($note/count($wine['Reviews']));
        }
      ?>
			<small>
      <?php  if(count($wine['Reviews'])!=0) : for($cpt = 1;$cpt<=5;$cpt++ ) : ?>
				<span class="glyphicon glyphicon-star<?php if($note<$cpt) : ?>-empty<?php endif ?>" style="font-size: 1.3em;"></span>
      <?php endfor; else: ?>
      Aucune note
    <?php endif ?>
			</small>
		</h2>
		<div class="btn-group">
		  <button id="addCellarWine" data-id="<?= $wine['Wine']['id'] ?>" type="button" class="btn btn-<?php if($isInCellar) : ?>success<?php else: ?>default<?php endif ?>"><span class="glyphicon glyphicon-<?php if($isInCellar) : ?>ok<?php else: ?>plus-sign<?php endif ?>"></span> <span data-original="Ajouter à ma Cave" data-replace="Dans ma Cave" data-over="Retirer de ma Cave" data-remove="Vin retiré de votre Cave"><?php if($isInCellar) : ?>Dans ma Cave<?php else: ?>Ajouter à ma Cave<?php endif ?></span></button>
		  <button id="addWishlistWine" data-id="<?= $wine['Wine']['id'] ?>" type="button" class="btn btn-<?php if($isInWishlist) : ?>success<?php else: ?>default<?php endif ?>"><span class="glyphicon glyphicon-<?php if($isInWishlist) : ?>ok<?php else: ?>heart-empty<?php endif ?>"></span> <span data-original="Ajouter à ma Whishlist" data-replace="Dans votre Wishlist" data-over="Retirer de ma Wishlist" data-remove="Vin retiré de votre Wishlist"><?php if($isInWishlist) : ?>Dans votre Wishlist<?php else: ?>Ajouter à ma Whishlist<?php endif ?></span></button>
		  <button  data-toggle="modal" data-target="#addNote" id="noteWishlistWine" data-id="<?= $wine['Wine']['id'] ?>" type="button" class="btn btn-<?php if($isInWishlist) : ?>success<?php else: ?>default<?php endif ?>"><span class="glyphicon glyphicon-<?php if($isInWishlist) : ?>ok<?php else: ?>star<?php endif ?>"></span> <span data-original="Noter ce vin" data-replace="Vous avez déjà noté ce vin"><?php if($isInWishlist) : ?>Vous avez déjà noté ce vin<?php else: ?>Noter ce vin<?php endif ?></span></button>
		</div>

		<hr />

		<?php echo $this->fetch('content'); ?>

	</div>

</div>