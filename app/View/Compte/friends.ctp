<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.friends', 'active'); ?>

<?php $this->Html->script('pages/comptes/friends', array('inline'=>false)); ?>

<div class="modal fade" id="requests" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Invitation d'ami</h4>
      </div>
      <input type="hidden" id="ids"/>
      <div class="modal-body" style="padding-bottom: 1px;">
        <?php foreach($user['UserFriendshipRequest'] as $friend) : ?>
          <div class="row">
            <div class="col-md-7">
              <div style="padding: 5px;">
                <a style="font-size: 1.2em;" href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $friend['slug'])) ?>"><?= $friend['name'] ?></a>
              </div>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right" style="margin-left: 20px;">
                <button class="btn btn-primary accept-request" role="button" data-toggle="modal" data-id="<?= $friend['id'] ?>" data-target="#requests">Accepter</button>
                <button type="button" class="btn btn-default decline-request" data-id="<?= $friend['id'] ?>">Refuser</button>
               </div>
            </div>
          </div>
          <hr />
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
  	<h2 style="margin-top: 5px;">
		Amis
	</h2>
  </div>
  <div class="col-md-8" style="padding-top: 5px;">

	<div class="btn-group pull-right" style="margin-left: 20px;">
	  <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#requests">Demandes (<span id="counterRequest"><?= count($user['UserFriendshipRequest']) ?></span>)</button>
	  <button type="button" class="btn btn-default">Inviter par Facebook</button>
	 </div>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Rechercher">
      <span class="input-group-btn">
      	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Nom <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Prénom</a></li>
          <li><a href="#">Pseudo</a></li>
        </ul>
      </span>
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->

<br />
<div class="row" id="friendsList">
  <?php foreach($user['UserFriendship'] as $friend) : ?>
    <?= $this->element('cards/user', [
      'user' => $friend,
      'size' => 4,
      'button' => true
    ]) ?>
  <?php endforeach ?> 
  <?php if(count($user['UserFriendship']) == 0) : ?>
    <div class="alert alert-info">vous n'avez pas encore ajouté d'amis. <a href="<?= $this->Html->url(array("controller" => "users", "action" => "index")) ?>">Aller les retrouver</a>.</div>
  <?php endif ?>
</div>