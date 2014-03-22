<div class="row">
	<div class="col-md-3">	
		<img src="http://lorempixel.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => 'qdeneuve')) ?>">Feeds</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'cellar', 'pseudo' => 'qdeneuve')) ?>">Cellar</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'about', 'pseudo' => 'qdeneuve')) ?>">About</a></li>
		  <li class="active"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'events', 'pseudo' => 'qdeneuve')) ?>">Events</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'friends', 'pseudo' => 'qdeneuve')) ?>">Friends</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'whishlist', 'pseudo' => 'qdeneuve')) ?>">Whishlist</a></li>
		</ul>
	</div>
	<div class="col-md-9">	
		<h2>Quentin Deneuve <small>inscrit le lundi 12 juillet 1976</small></h2>
		<p class="lead">
			Un aventurier des vins !
		</p>
		<div class="btn-group">
		  <button type="button" class="btn btn-default">Ajouter en ami</button>
		  <button type="button" class="btn btn-default">Envoyer un message</button>

		  <div class="btn-group">
		    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		      Autre
		      <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
		      <li><a href="#">Signaler</a></li>
		      <li><a href="#">Proposer un vin</a></li>
		    </ul>
		  </div>
		</div>
		<hr />
		<div class="well well-lg">
			<h2><p class="text-center">No events.</p></2>
		</div>
	</div>

</div>