<div class="page-header">
  <h1>Wines <small>Subtext for header</small></h1>
</div>

<div class="row">
  <?php foreach($wines as $wine) : ?>
    <?= $this->element('cards/wine', ['wine' => $wine, 'size' => 3]) ?>
  <?php endforeach ?>
</div>