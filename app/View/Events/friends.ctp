<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.friends', 'active'); ?>


<div class="input-group">
  <input type="text" class="form-control">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filters <span class="caret"></span></button>
    <ul class="dropdown-menu pull-right">
      <li><a href="#">Mutual friends</a></li>
      <li><a href="#">Recents add</a></li>
      <li><a href="#">Remove all Filters</a></li>
    </ul>
  </div><!-- /btn-group -->
</div><!-- /input-group -->
<br />

<div class="row">
  <?php for($cpt = 0;$cpt < 10;$cpt++) : ?>
    <?= $this->element('cards/user', [
    	'user' => ['User' => ['pseudo' => 'Pseudo', 'firstname' => 'Ami', 'lastname' => $cpt, 'description' => 'Description']],
    	'size' => 4
    ]) ?>
  <?php endfor ?>
</div>