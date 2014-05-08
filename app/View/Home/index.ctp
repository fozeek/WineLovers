<div class="jumbotron" style="background: url(img/bg.jpeg);color: white;text-shadow: 0px 1px 1px black;">
  <h1>Bienvenue sur La Bonne Cave</h1>
  <p>Come for a Wine !</p>
  <?php if(!isset($auth)) : ?>
  	<a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')) ?>" role="button">Connexion</a>
  	<a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'signin')) ?>" role="button">Inscription</a>
  <?php endif ?>
</div>

<div class="row">


	<div class="col-md-8">
		<h3>Découvrez des vins<small class="pull-right" style="margin-top: 8px;"><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'index')) ?>">Voir tous</a></small></h3>
		<div class="row">
		  <?php foreach($wines as $wine) : ?>
		    <?= $this->element('cards/wine', ['wine' => $wine['Wine'], 'size' => 6]) ?>
		  <?php endforeach ?>
		</div>

	</div>
	<div class="col-md-4">
		<h3>Evênements<small class="pull-right" style="margin-top: 8px;"><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'index')) ?>">Voir tous</a></small></h3>
		<?php foreach($events as $event) : ?>
			<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-right: 10px;">
				<span style="font-size: 10px;font-weight: 500;margin: -2px auto 0 auto;"><?= $event['Event']['date']->format('M') ?></span><br />
				<span style="font-weight: 500;margin: -2px auto -6px auto;"><?= $event['Event']['date']->format('d') ?></span>
			</div>

			<a href="<?= $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['Event']['slug'])) ?>"><h4 style="display: block;padding-top: 5px;margin-top: 0px;"><?= $event['Event']['name'] ?></a>
			<br />
			<small class="pull-right" style="margin-top: 5px;"> 598 Invités</a></small><small> par <a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $event['Author']['pseudo'])) ?>"><?= $event['Author']['pseudo'] ?></a></small></h4>
			<div style="clear: both;height: 5px;"></div>
		<?php endforeach ?>
	</div>

</div>
<div class="row">


	<div class="col-md-12">
		<h3>Rencontrez des amis<small class="pull-right" style="margin-top: 8px;"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>">Voir tous</a></small></h3>
		<div class="row">
		  <?php foreach($users as $user) : ?>
		    <?= $this->element('cards/user', ['user' => $user['User'], 'size' => 3]) ?>
		  <?php endforeach ?>
		</div>
	</div>

</div>


