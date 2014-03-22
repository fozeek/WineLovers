<div class="row">
	<div class="col-md-3">	
		<img src="http://lorempixel.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => 'le-rouge-sang')) ?>">Feeds</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'about', 'name' => 'le-rouge-sang')) ?>">About</a></li>
		  <li><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'events', 'name' => 'le-rouge-sang')) ?>">Events</a></li>
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
		<textarea class="form-control" rows="5" style="margin-bottom: 5px;">Laisse un comm' Bro !</textarea>
		<button type="submit" class="btn btn-default pull-right">Publier</button>
		<div class="clearfix"></div>
		<?php for ($cpt=0;$cpt<8;$cpt++): ?>
			<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" src="http://lorempixel.com/64/64/" alt="...">
			  </a>
			  <div class="media-body">
			    <h4 class="media-heading">Quentin Deneuve</h4>
			    À écrit un article
			    <br /><br />
			    <blockquote>
			    	<p>J'adore ce vin !!! *Hips'*</p>
			    	<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
			    </blockquote>
			  </div>
			</div>

		<?php endfor ?>
	</div>

</div>