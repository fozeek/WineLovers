<div class="row">
  <?php foreach($events as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
</div>