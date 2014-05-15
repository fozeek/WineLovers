<?php $this->Html->script('pages/comptes/cellar', array('inline'=>false)); ?>

<div class="modal fade" id="addWine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Choississez vos vins</h4>
      </div>
      <div class="modal-body" style="padding: 0px;">
      	<input type="hidden" id="ids"/>
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
        <button type="button" class="btn btn-primary">Ajouter à ma Cave</button>
      </div>
    </div>
  </div>
</div>



<div class="btn-group pull-right">
  <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#addWine">Ajouter un vin</button>
  <button type="button" class="btn btn-default">Partager</button>
</div>
<h2>
	Ma Cave
</h2>
<div class="clearfix"></div>

<div class="row">
  <?php foreach($user['WineCellar'] as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine, 'size' => 4, 'button' => 'Retirer')) ?>
  <?php endforeach ?>
</div>