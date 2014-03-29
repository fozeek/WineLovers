<div class="page-header">
  <h1>Wines <small>Subtext for header</small></h1>
</div>

<div class="row">
  <?php for($cpt = 0;$cpt<10;$cpt++) : ?>
    <?= $this->element('cards/wine') ?>
  <?php endfor ?>
</div>