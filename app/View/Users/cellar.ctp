<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellar', 'active'); ?>
<div class="row">
  <?php for($cpt = 0;$cpt<10;$cpt++) : ?>
  	<?= $this->element('cards/wine') ?>
  <?php endfor ?>
</div>