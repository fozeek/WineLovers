<?php $this->Html->script('pages/comptes/wishlist', array('inline'=>false)); ?>
<div class="btn-group pull-right">
  <a href="<?= $this->Html->url(array('controller' => 'wines', 'action' => 'index')) ?>" class="btn btn-primary" role="button">Ajouter un vin</a>
  <button type="button" class="btn btn-default">Partager</button>
</div>
<h2>
	Ma Wishlist
</h2>
<div class="clearfix"></div>

<div class="row">
  <?php foreach($user['WineWishlist'] as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine, 'size' => 4, 'button' => 'Retirer')) ?>
  <?php endforeach ?>
</div>