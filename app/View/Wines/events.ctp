<div class="row">
	<div class="col-md-3">	
		<img src="http://lorempixel.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => 'le-rouge-sang')) ?>">Feeds</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'about', 'name' => 'le-rouge-sang')) ?>">About</a></li>
		  <li class="active"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'events', 'name' => 'le-rouge-sang')) ?>">Events</a></li>
		</ul>
	</div>
	<div class="col-md-9">	
		<h2>Le Rouge Sang <small>Since 1324</small></h2>
		<p class="lead">
			Un vin d'exception
		</p>
		<div class="btn-group">
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Add to my Cellar</button>
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-heart-empty"></span> Add to my Whishlist</button>
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-glass"></span> Create a Event</button>
		</div>
		<hr />
		

		<div class="well well-lg">
			<h2><p class="text-center">No events.</p></2>
		</div>


	</div>

</div>