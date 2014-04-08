<div class="col-md-<?= ($size) ? $size : 4 ?>">
<div class="thumbnail">
  <div class="row">
    <div class="col-md-5">
      <img src="http://lorempixel.com/500/500/" alt="..." class="img-responsive img-rounded">
    </div> 
    <div class="col-md-7"> 
      <div class="caption">
        <h3><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['User']['pseudo'])); ?>"><?= $user['User']['firstname'] ?> <?= $user['User']['lastname'] ?></a></h3>
      </div>
    </div>
  </div>
  
</div>
</div>