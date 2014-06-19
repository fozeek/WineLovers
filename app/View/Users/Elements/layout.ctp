<?php $this->Html->script('pages/users/script', array('inline'=>false)); ?>
<div class="row">
	<div class="col-md-3">	
		<img src="<?php if(!empty($user['User']['image'])) : echo '/img/upload/'.$user['User']['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['User']['slug'])) ?>">Actualités</a></li>
		  <li class="<?= $this->fetch('active.cellar') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'cellar', 'pseudo' => $user['User']['slug'])) ?>">Cave</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'about', 'pseudo' => $user['User']['slug'])) ?>">À propos</a></li>
		  <li class="<?= $this->fetch('active.events') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'events', 'pseudo' => $user['User']['slug'])) ?>">Évènements</a></li>
		  <li class="<?= $this->fetch('active.friends') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'friends', 'pseudo' => $user['User']['slug'])) ?>">Amis</a></li>
		  <li class="<?= $this->fetch('active.whishlist') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'wishlist', 'pseudo' => $user['User']['slug'])) ?>">Wishlist</a></li>

		</ul>
	</div>
	<div class="col-md-9">
		<?php if(!$this->fetch('active.feeds')) : ?>

			<?php if(!isset($isyou)) : ?>
			<ul class="nav nav-pills pull-right" style="margin-top: 20px;">
			  <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Action <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li>
				    <a class="btn-success friend-button friend-friend <?php if(!$isFriend) : ?>hidden<?php endif ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Ami" data-replace="Retirer de ma liste d'ami">Ami</span></a>
				<a class="btn-primary friend-button friend-request <?php if(!$isFriendRequest) : ?>hidden<?php endif ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-ok hidden"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Accepter sa demande d'ami" data-replace="Accepter sa demande d'ami">Accepter sa demande d'ami</span></a>
				<a class="btn-default friend-button friend-request-sent <?php if(!$isFriendRequestSent) : ?>hidden<?php endif ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Demande d'ami envoyée" data-replace="Annuler la demande">Demande d'ami envoyée</span></a>
				<a class="btn-default friend-button friend-no <?php if($isFriend || $isFriendRequest || $isFriendRequestSent) : ?>hidden<?php endif ?>" style="cursor: pointer;"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Ajouter comme ami" data-replace="Ajouter comme ami">Ajouter comme ami</span></a>
				  </li>
			    </ul>
			  </li>
			</ul>
			<?php endif ?>
			
		<?php endif ?>
		
		<h2><?= $user['User']['name'] ?></h2>
		
		<?php if($this->fetch('active.feeds')) : ?>
		<p class="lead">
			<?= $user['User']['description'] ?><br />
		</p>
		<?php if(!isset($isyou)) : ?>
		<div class="btn-group">
				<button type="button" class="btn btn-success friend-button friend-friend <?php if(!$isFriend) : ?>hidden<?php endif ?>"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Ami" data-replace="Retirer de ma liste d'ami">Ami</span></button>
				<button type="button" class="btn btn-primary friend-button friend-request <?php if(!$isFriendRequest) : ?>hidden<?php endif ?>"><span class="glyphicon glyphicon-ok hidden"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Accepter sa demande d'ami" data-replace="Accepter sa demande d'ami">Accepter sa demande d'ami</span></button>
				<button type="button" class="btn btn-default friend-button friend-request-sent <?php if(!$isFriendRequestSent) : ?>hidden<?php endif ?>"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Demande d'ami envoyée" data-replace="Annuler la demande">Demande d'ami envoyée</span></button>
				<button type="button" class="btn btn-default friend-button friend-no <?php if($isFriend || $isFriendRequest || $isFriendRequestSent) : ?>hidden<?php endif ?>"><span class="glyphicon glyphicon-ok"></span> <span data-id="<?= $user['User']['id'] ?>" data-original="Ajouter comme ami" data-replace="Ajouter comme ami">Ajouter comme ami</span></button>

		  <div class="btn-group" style="padding: 7px;">
		    <div class="fb-share-button" data-href="<?= rtrim($_SERVER['HTTP_REFERER'], '/').$_SERVER['REQUEST_URI'] ?>" data-type="button_count"></div>
		  </div>
		</div>
		<?php endif ?>
		<?php endif ?>
		
		<hr />
		
		<?php echo $this->fetch('content'); ?>

	</div>

</div>