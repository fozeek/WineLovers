<div class="row">
	<div class="col-md-3">	
		<img src="<?php if(!empty($event['Event']['image'])) : echo '/img/upload/'.$event['Event']['image']; else: ?>http://www.iconpng.com/png/pictograms/serve-wine.png<?php endif ?>" class="img-responsive img-rounded" alt="Responsive image" style="margin-bottom: 15px;"/>
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['Event']['slug'])) ?>">Actualités</a></li>
		  <li class="<?= $this->fetch('active.guests') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'guests', 'name' => $event['Event']['slug'])) ?>">Participants</a></li>
		  <li class="<?= $this->fetch('active.about') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'about', 'name' => $event['Event']['slug'])) ?>">À propos</a></li>
		  <li class="<?= $this->fetch('active.likes') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'likes', 'name' => $event['Event']['slug'])) ?>">Likes</a></li>
		  <?php if($event['Author']['id'] == $auth['id']) : ?>
		  <li class="<?= $this->fetch('settings.likes') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'settings', 'name' => $event['Event']['slug'])) ?>">Settings</a></li>
		  <?php endif ?>
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
		<h2><?= $event['Event']['name'] ?><small style=""> par <a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $event['Author']['slug'])) ?>"><?= $event['Author']['pseudo'] ?></a></small></h2>
		<br />

		<div class="btn-group">
		  <button type="button" class="btn btn-default" id="joinevent" data-id="<?= $event['Event']['id'] ?>" style="<?php if($isJoined) : ?>display: none;<?php endif ?>"><span class="glyphicon glyphicon-ok hidden"></span>Venir</button>
		  <button type="button" class="btn btn-success" id="leaveevent" data-id="<?= $event['Event']['id'] ?>" style="<?php if(!$isJoined) : ?>display: none;<?php endif ?>"><span class="glyphicon glyphicon-ok hidden"></span>Participe</button>
		  <button type="button" class="btn btn-success" id="dislikeevent" data-id="<?= $event['Event']['id'] ?>" style="<?php if(!$isLiked) : ?>display: none;<?php endif ?>">Like</button>
		  <button type="button" class="btn btn-default" id="likeevent" data-id="<?= $event['Event']['id'] ?>" style="<?php if($isLiked) : ?>display: none;<?php endif ?>">Like</button>
		  <div class="btn-group" style="padding: 7px;">
		    <div class="fb-share-button" data-href="<?= rtrim($_SERVER['HTTP_REFERER'], '/').$_SERVER['REQUEST_URI'] ?>" data-type="button_count"></div>
		  </div>
		  
		</div>
		
		<hr />
		
		<?php echo $this->fetch('content'); ?>

	</div>

</div>