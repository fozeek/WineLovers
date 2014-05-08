<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.likes', 'active'); ?>

<div class="row">
  <?php foreach($event['Like'] as $user) : ?>
    <?= $this->element('cards/user', ['user' => $user['User'], 'size' => 3]) ?>
  <?php endforeach ?>
</div>