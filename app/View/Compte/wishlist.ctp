<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.wishlist', 'active'); ?>

<?php $this->Html->script('pages/comptes/wishlist', array('inline'=>false)); ?>

<div class="modal fade" id="addWine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Choississez vos vins</h4>
      </div>
      <input type="hidden" class="ids"/>
      <div id="step1" class="modal-body" style="padding: 0px;">
    <div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
          <input class="form-control" style="margin-top: 15px;margin-left: 15px;width: 568px;" placeholder="Rechercher un vin"/>
      <div class="nodata" style="display: none;text-align: center;font-size: 40px;color: #E7E7E7;padding: 20px;">
        Aucun resultat.
      </div>
      <div class="row" style="margin: 15px;margin-left: 0px;margin-bottom: 0px;" >
        <?php foreach($wines as $wine) : ?>
          <?= $this->element('cards/posts/objects/wine', array('wine' => $wine)) ?>
        <?php endforeach ?>
      </div>
      <div class="paginator" data-page="2" data-object="wines" style="display: none;">
        Chargement ..
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="step1submit" type="button" class="btn btn-primary">Ajouter à ma Whishlist</button>
      </div>
    </div>
  </div>
</div>



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
    <div class="input-group hidden">
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