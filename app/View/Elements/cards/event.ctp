<div class="col-md-<?= ($size) ? $size : 4 ?>">
	<div class="thumbnail" style="position: relative;">
		<a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>">
			<img src="<?php if(!empty($event['image'])) : echo '/img/upload/'.$event['image']; else: ?>http://www.iconpng.com/png/pictograms/serve-wine.png<?php endif ?>" alt="...">
		</a>
		<div class="caption" style="position: absolute;bottom: 0px;left: 0px;background: rgba(255, 255, 255, 0.6);width: 100%;padding: 20px;padding-top: 0px;padding-bottom: 5px;">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>"><?= $event['name'] ?></a></h3>
			<p><?= $event['description'] ?></p>
		</div>
	</div>
</div>