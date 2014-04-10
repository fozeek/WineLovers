<div class="jumbotron" style="background: url(img/bg.jpeg);color: white;text-shadow: 0px 1px 1px black;">
  <h1>Welcome to La Bonne Cave</h1>
  <p>Come for a Wine !</p>

  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')) ?>" role="button">Login</a>
  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'signin')) ?>" role="button">Sign in</a>
</div>

<div class="row">


	<div class="col-md-8">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'index')) ?>"><h3>Discover some Wines</h3></a>
		<div class="row">
		  <?php foreach($wines as $wine) : ?>
		    <?= $this->element('cards/wine', ['wine' => $wine, 'size' => 4]) ?>
		  <?php endforeach ?>
		</div>
		<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>"><h3>Meet some Friends</h3></a>
		<div class="row">
		  <?php foreach($users as $user) : ?>
		    <?= $this->element('cards/user', ['user' => $user, 'size' => 4]) ?>
		  <?php endforeach ?>
		</div>
	</div>
	<div class="col-md-4">
		<h3>Featured Events<small class="pull-right" style="margin-top: 8px;"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'index')) ?>">All events</a></small></h3>
		<?php foreach($events as $event) : ?>
		<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-right: 10px;">
			<span style="font-size: 10px;font-weight: 500;margin: -2px auto 0 auto;"><?= $event['Event']['date']->format('M') ?></span><br />
			<span style="ffont-size: 22px;font-weight: 500;margin: -2px auto -6px auto;"><?= $event['Event']['date']->format('d') ?></span>
		</div>

		<h4 style="display: block;padding-top: 5px;margin-top: 0px;"><?= $event['Event']['name'] ?><br /><small class="pull-right" style="margin-top: 5px;"> 598 Guests</a></small><small> par <a href="#">Moïse</a></small></h4>
		<div class='clearfix' style="height: 5px;"></div>
		<?php endforeach ?>
	</div>

</div>


