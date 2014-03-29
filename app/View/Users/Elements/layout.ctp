<div class="row">
	<div class="col-md-3">	
		<img src="http://lorempixel.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['User']['pseudo'])) ?>">Feeds</a></li>
		  <li class="<?= $this->fetch('active.cellar') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'cellar', 'pseudo' => $user['User']['pseudo'])) ?>">Cellar</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'about', 'pseudo' => $user['User']['pseudo'])) ?>">About</a></li>
		  <li class="<?= $this->fetch('active.events') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'events', 'pseudo' => $user['User']['pseudo'])) ?>">Events</a></li>
		  <li class="<?= $this->fetch('active.firends') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'friends', 'pseudo' => $user['User']['pseudo'])) ?>">Friends</a></li>
		  <li class="<?= $this->fetch('active.whishlist') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'whishlist', 'pseudo' => $user['User']['pseudo'])) ?>">Whishlist</a></li>
		</ul>
	</div>
	<div class="col-md-9">	
		<h2><?= $user['User']['firstname'] ?> <?= $user['User']['lastname'] ?> <small>inscrit le <?= $user['User']['created'] ?></small></h2>
		<?php if($this->fetch('active.feeds')) : ?>
		<p class="lead">
			<?= $user['User']['description'] ?>
		</p>
		<?php endif ?>
		<div class="btn-group">
		  <button type="button" class="btn btn-default add-as-friend"><span class="glyphicon glyphicon-ok hidden"></span> <span data-original="Add as friend" data-replace="Friend" data-over="Remove as friend" data-remove="Friend removed">Add as friend</span></button>
		  <button type="button" class="btn btn-default">Send a message</button>

		  <div class="btn-group">
		    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		      Autre
		      <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
		      <li><a href="#">Propose a Wine</a></li>
		      <li><a href="#">Propose an Event</a></li>
		    	<li class="divider"></li>
		      <li><a href="#">Report</a></li>
		    </ul>
		  </div>
		</div>
		<hr />
		
		<?php echo $this->fetch('content'); ?>

	</div>

</div>