<div class="col-md-<?= (isset($size)) ? $size : 4 ?>" style="max-height: 260px;position: relative;">
	<div class="thumbnail" style="position: relative;">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>">
			<img src="<?= $wine['image'] ?>" alt="..." style="max-height: 220px;">
		</a>
		<div class="caption" style="position: absolute;bottom: 0px;left: 0px;background: rgba(255, 255, 255, 0.6);width: 100%;padding: 20px;padding-top: 0px;padding-bottom: 5px;">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>" style="color: rgb(128, 0, 0);"><?= $wine['name'] ?></a></h3>
			<p><?= $wine['description'] ?></p>
		</div>
	</div>
	<?php if(isset($button)) : ?>
		<button data-id="<?= $wine['id'] ?>" class="remove" style="position: absolute;top: -10px;right: 0px;padding-top: 4px;background: white;border: 1px solid #ccc;border-radius: 30px;"><span class="glyphicon glyphicon-remove"></span></button>
	<?php endif ?>
</div>