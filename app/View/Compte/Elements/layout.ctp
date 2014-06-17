<div class="row">

	<div class="col-md-2">
		<ul class="nav nav-pills nav-stacked">
		  <li class="<?= $this->fetch('active.feeds') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'feeds')) ?>">Actualités</a></li>
		  <li class="<?= $this->fetch('active.cellar') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'cellar')) ?>">Cave</a></li>
		  <li class="<?= $this->fetch('active.wishlist') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'wishlist')) ?>">Wishlist</a></li>
		  <li class="<?= $this->fetch('active.friends') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'friends')) ?>">Amis</a></li>
		  <li class="<?= $this->fetch('active.events') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'events')) ?>">Events</a></li>
		  <li class="<?= $this->fetch('active.settings') ?>"><a href="<?php echo $this->Html->url(array('controller' => 'compte', 'action' => 'settings')) ?>">Paramêtres</a></li>
		</ul>
	</div>

	<div class="col-md-10">
		<?php echo $this->fetch('content'); ?>
	</div>

</div>