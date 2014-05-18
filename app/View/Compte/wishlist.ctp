<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.wishlist', 'active'); ?>

<?php $this->Html->script('pages/comptes/wishlist', array('inline'=>false)); ?>
<div class="row">
  <div class="col-md-4">
  	<h2 style="margin-top: 5px;">
		Ma Wishlist
	</h2>
  </div>
  <div class="col-md-8" style="padding-top: 5px;">

	<div class="btn-group pull-right" style="margin-left: 20px;">
	  <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#addWine">Ajouter un vin</button>
	  <button type="button" class="btn btn-default">Partager</button>
	 </div>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Rechercher">
      <span class="input-group-btn">
      	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Nom <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Millésime</a></li>
          <li><a href="#">Note</a></li>
        </ul>
      </span>
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->
<div class="clearfix"></div>
<br />
<div class="row">
  <?php foreach($user['WineWishlist'] as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine, 'size' => 4, 'button' => 'Retirer')) ?>
  <?php endforeach ?>
</div>