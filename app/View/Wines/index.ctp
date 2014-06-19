<div class="page-header">
  <h1>Wines <small><a href="<?= $this->Html->url(array("controller" => "wines", "action" => "add")) ?>"><button type="button" class="btn btn-primary" style="margin-top: -10px;margin-left: 30px;">Ajouter un vin</button></a></small></h1>
</div>

<div class="row">
  <?php foreach($wines as $wine) : ?>
    <?= $this->element('cards/wine', ['wine' => $wine['Wine'], 'size' => 3]) ?>
  <?php endforeach ?>
</div>