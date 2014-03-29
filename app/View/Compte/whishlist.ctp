<div class="btn-group pull-right">
  <button type="button" class="btn btn-default"><span>Add a wine</span></button>
  <button type="button" class="btn btn-default">Share</button>
</div>
<h2>
	My Whishlist
</h2>
<div class="clearfix"></div>

<div class="row">
  <?php for($cpt = 0;$cpt<10;$cpt++) : ?>
  	<?= $this->element('cards/wine') ?>
  <?php endfor ?>
</div>