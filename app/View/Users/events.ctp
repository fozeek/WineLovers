<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.events', 'active'); ?>

<h2>Évènements créés</h2>
<div class="row">
  <?php foreach($user['CreatedEvent'] as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
</div>

<h2>Évènements joins</h2>
<div class="row">
  <?php foreach($user['JoinedEvent'] as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
</div>