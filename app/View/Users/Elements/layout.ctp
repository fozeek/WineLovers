<div class="row">
	<div class="col-md-3">	
		<img src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $user['User']['email'] ) ) ) . '?s=400' ?>" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
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
			<ul class="nav nav-pills pull-right" style="margin-top: 20px;">
			  <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Action <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'feeds')) ?>">
				      Add as friend
				    </a>
				  </li>
				  <li>
				    <a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'inbox')) ?>">
				      Send a Message
				    </a>
				  </li>
				  <li><a href="#">Proposer un Vin</a></li>
		      	  <li><a href="#">Proposer un Évènement</a></li>
		    	  <li class="divider"></li>
		      	  <li><a href="#">Signaler</a></li>
			    </ul>
			  </li>
			</ul>
			
		<?php endif ?>
		
		<h2><?= $user['User']['name'] ?> <small>inscrit le <?= $user['User']['created']->format('l j F Y') ?></small></h2>
		
		<?php if($this->fetch('active.feeds')) : ?>
		<p class="lead">
			<?= $user['User']['description'] ?>
		</p>
		<div class="btn-group">
		  <button type="button" class="btn btn-default add-as-friend"><span class="glyphicon glyphicon-ok hidden"></span> <span data-original="Ajouter comme ami" data-replace="Ami" data-over="Retirer de ma liste d'ami" data-remove="Ami retiré de votre liste">Ajouter comme ami</span></button>
		  <button type="button" class="btn btn-default">Envoyer un message</button>

		  <div class="btn-group">
		    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		      Autre
		      <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
		      <li><a href="#">Proposer un Vin</a></li>
		      <li><a href="#">Proposer un Évènement</a></li>
		    	<li class="divider"></li>
		      <li><a href="#">Signaler</a></li>
		    </ul>
		  </div>
		</div>
		<?php endif ?>
		
		<hr />
		
		<?php echo $this->fetch('content'); ?>

	</div>

</div>