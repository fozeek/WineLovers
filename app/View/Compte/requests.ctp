<div class="row">
  <?php foreach($user['UserFriendshipRequest'] as $friend) : ?>
    <?= $this->element('cards/user', [
      'user' => $friend,
      'size' => 4
    ]) ?>
  <?php endforeach ?>
</div>