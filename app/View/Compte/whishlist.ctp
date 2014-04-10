<div class="btn-group pull-right">
  <button type="button" class="btn btn-default"><span>Ajouter un vin</span></button>
  <button type="button" class="btn btn-default">Partager</button>
</div>
<h2>
	Ma Whishlist
</h2>
<div class="clearfix"></div>

<div class="row">
  <?php for($cpt = 0;$cpt<10;$cpt++) : ?>
  	<?= $this->element('cards/wine') ?>
  <?php endfor ?>
</div>