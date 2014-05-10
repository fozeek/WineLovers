<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellars', 'active'); ?>
<div class="row">
  <?php foreach($wine['Cellars'] as $user) : ?>
  	<?= $this->element('cards/user', array('user' => $user, 'size' => 4)) ?>
  <?php endforeach ?>
</div>