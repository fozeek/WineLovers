<div class="page-header">
  <h1>Wines <small>Subtext for header</small></h1>
</div>

<div class="row">
  <?php for($cpt = 0;$cpt<10;$cpt++) : ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://lorempixel.com/500/500/" alt="...">
      <div class="caption">
        <h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => 'le-rouge-sang')); ?>">Le Rouge Sang</a></h3>
        <p>Un vin d'exception</p>
      </div>
    </div>
  </div>
  <?php endfor ?>
</div>