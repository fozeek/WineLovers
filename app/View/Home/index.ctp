<div class="jumbotron">
  <h1>Welcome to La Bonne Cave</h1>
  <p>Come for a Wine !</p>

  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')) ?>" role="button">Login</a>
  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'signin')) ?>" role="button">Sign in</a>
  <br /><br />
  <a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'index')) ?>">Wines</a> •
  <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>">Users</a>
</div>

<div class="row">


	<div class="col-md-8">
		<h3>Meet some Friends</h3>
	</div>
	<div class="col-md-4">
		<h3>Best Events<small class="pull-right" style="margin-top: 8px;"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'index')) ?>">All events</a></small></h3>
		<hr />
		<?php foreach($events as $event) : ?>
		<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-right: 10px;">
			<span style="font-size: 10px;font-weight: 500;margin: -2px auto 0 auto;"><?= $event['Event']['date']->format('M') ?></span><br />
			<span style="ffont-size: 22px;font-weight: 500;margin: -2px auto -6px auto;"><?= $event['Event']['date']->format('d') ?></span>
		</div>

		<h4 style="display: block;padding-top: 5px;"><?= $event['Event']['name'] ?><br /><small class="pull-right" style="margin-top: 5px;"> 598 Guests</a></small><small> par <a href="#">Moïse</a></small></h4>
		<hr class='clearfix'/>
		<?php endforeach ?>
	</div>

</div>


