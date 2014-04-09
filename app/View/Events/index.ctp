<div class="page-header">
  <h1>Events <small>Find some events</small></h1>
</div>

<div class="row">
  <?php foreach($events as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
</div>