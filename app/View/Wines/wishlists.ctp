<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.wishlists', 'active'); ?>
<div class="row">
  <?php foreach($wine['Wishlists'] as $user) : ?>
  	<?= $this->element('cards/user', array('user' => $user, 'size' => 4)) ?>
  <?php endforeach ?>
</div>