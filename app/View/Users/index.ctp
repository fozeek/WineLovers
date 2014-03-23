<div class="page-header">
  <h1>Users <small>Find some friends</small></h1>
</div>

<div class="row">
  <?php foreach($users as $user) : ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="row">
        <div class="col-md-3">
          <img src="http://lorempixel.com/500/500/" alt="..." class="img-responsive img-rounded">
        </div> 
        <div class="col-md-9"> 
          <div class="caption">
            <h3><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['User']['pseudo'])); ?>"><?= $user['User']['firstname'] ?> <?= $user['User']['lastname'] ?></a></h3>
            <p><?= $user['User']['description'] ?></p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <?php endforeach ?>
</div>