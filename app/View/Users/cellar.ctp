<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellar', 'active'); ?>
<div class="row">
  <?php foreach($wines as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine['Wine'], 'size' => 4)) ?>
  <?php endforeach ?>
</div>