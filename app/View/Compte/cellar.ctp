<div class="btn-group pull-right">
  <button type="button" class="btn btn-default"><span>Ajouter un vin</span></button>
  <button type="button" class="btn btn-default">Partager</button>
</div>
<h2>
	Ma Cave
</h2>
<div class="clearfix"></div>

<div class="row">
  <?php foreach($wines as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine, 'size' => 4)) ?>
  <?php endforeach ?>
</div>