<div class="col-md-<?= (isset($size)) ? $size : 4 ?>" style="max-height: 260px;">
	<div class="thumbnail" style="position: relative;">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>">
			<img src="<?= $wine['image'] ?>" alt="..." style="max-height: 220px;">
		</a>
		<div class="caption" style="position: absolute;bottom: 0px;left: 0px;background: rgba(255, 255, 255, 0.6);width: 100%;padding: 20px;padding-top: 0px;padding-bottom: 5px;">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>" style="color: rgb(128, 0, 0);"><?= $wine['name'] ?></a></h3>
			<p><?= $wine['description'] ?></p>
		</div>
	</div>
</div>