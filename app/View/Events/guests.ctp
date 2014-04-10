<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.guests', 'active'); ?>

<div class="input-group">
  <input type="text" class="form-control">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filters <span class="caret"></span></button>
    <ul class="dropdown-menu pull-right">
      <li><a href="#">Amis en commun</a></li>
      <li><a href="#">Ajouter récemment</a></li>
      <li><a href="#">Enlever les filtres</a></li>
    </ul>
  </div><!-- /btn-group -->
</div><!-- /input-group -->
<br />

<div class="row">
  <?php foreach($users as $user) : ?>
    <?= $this->element('cards/user', [
    	'user' => $user,
    	'size' => 4
    ]) ?>
  <?php endforeach ?>
</div>