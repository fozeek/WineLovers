<?php $this->layout = false; ?>
<?= $this->element('cards/user', [
  'user' => $friend['User'],
  'size' => 4,
  'button' => true
]) ?>