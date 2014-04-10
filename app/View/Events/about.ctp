<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.about', 'active'); ?>

<div class="row">
	<div class="col-md-6">
		<p class="lead"><strong>529</strong> Invités</p>
	</div>
	<div class="col-md-6">	
		<p class="lead"><strong>32</strong> Vins</p>
	</div>
</div>
<hr />

		<p class="lead">"<?= $event['Event']['description'] ?>"</p>
