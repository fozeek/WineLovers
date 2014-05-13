<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.wishlist', 'active'); ?>
<div class="row">
  <?php foreach($user['WineWishlist'] as $wine) : ?>
  	<?= $this->element('cards/wine', array('wine' => $wine, 'size' => 4)) ?>
  <?php endforeach ?>
</div>