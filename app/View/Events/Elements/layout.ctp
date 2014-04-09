<div class="row">
	<div class="col-md-3">	
		<img src="http://placekitten.com/500/500" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['Event']['slug'])) ?>">Feeds</a></li>
		  <li class="<?= $this->fetch('active.guests') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'guests', 'name' => $event['Event']['slug'])) ?>">Guests</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'about', 'name' => $event['Event']['slug'])) ?>">About</a></li>
		  <li class="<?= $this->fetch('active.likes') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'likes', 'name' => $event['Event']['slug'])) ?>">Likes</a></li>
		  <li class="<?= $this->fetch('active.medias') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'medias', 'name' => $event['Event']['slug'])) ?>">Medias</a></li>
		</ul>
	</div>
	<div class="col-md-9">
		<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-top: 10px;margin-right: 10px;">
			<span style="font-size: 10px;
font-weight: 500;
margin: -2px auto 0 auto;"><?= $event['Event']['date']->format('M') ?></span><br />
			<span style="ffont-size: 22px;
font-weight: 500;
margin: -2px auto -6px auto;"><?= $event['Event']['date']->format('d') ?></span>
		</div>
		<h2><?= $event['Event']['name'] ?><small style=""> par Moïse</small></h2>
		<br />

		<div class="btn-group">
		  <button type="button" class="btn btn-default add-as-friend"><span class="glyphicon glyphicon-ok hidden"></span> <span data-original="Come" data-replace="I'm comin'" data-over="I don't want to go there !" data-remove="Removed from the list">Come</span></button>
		  <button type="button" class="btn btn-default">Propose to friends</button>

		  <div class="btn-group">
		    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		      Autre
		      <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
		      <li class="divider"></li>
		      <li><a href="#">Report</a></li>
		    </ul>
		  </div>
		</div>
		
		<hr />
		
		<?php echo $this->fetch('content'); ?>

	</div>

</div>