<div class="col-md-<?= ($size) ? $size : 4 ?>">
	<div class="thumbnail" style="position: relative;">
		<a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['Event']['slug'])); ?>">
			<img src="http://lorempixel.com/500/500/" alt="...">
		</a>
		<div class="caption" style="position: absolute;bottom: 0px;left: 0px;background: rgba(255, 255, 255, 0.6);width: 100%;padding: 20px;padding-top: 0px;padding-bottom: 5px;">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['Event']['slug'])); ?>"><?= $event['Event']['name'] ?></a></h3>
			<p><?= $event['Event']['description'] ?></p>
		</div>
	</div>
</div>