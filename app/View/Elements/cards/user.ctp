<div class="col-md-<?= ($size) ? $size : 4 ?>" style="position: relative;">
<div class="thumbnail">
  <div class="row">
    <div class="col-md-5">
      <img src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $user['email'] ) ) ) . '?s=400&d=http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png' ?>" alt="..." class="img-responsive img-rounded">
    </div> 
    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
      <div class="caption" style="padding: 0px;padding-right: 5px;">
        <h3><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['slug'])); ?>"><?= $user['firstname'] ?> <?= $user['lastname'] ?></a></h3>
      </div>
    </div>
  </div>
  
</div>
  <?php if(isset($button)) : ?>
    <button data-id="<?= $user['id'] ?>" class="remove" style="position: absolute;top: -10px;right: 0px;padding-top: 4px;background: white;border: 1px solid #ccc;border-radius: 30px;"><span class="glyphicon glyphicon-remove"></span></button>
  <?php endif ?>
</div>