<div class="col-md-<?= (isset($size)) ? $size : 4 ?>" style="position: relative;">
	<div class="thumbnail" style="position: relative;height: 260px;" data-id="<?= $wine['id'] ?>">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>">
			<div style="height: 250px;width: 100%;background: #F9F9F9 url(/img/upload/<?= $wine['image'] ?>) center center no-repeat;background-size: contain;">
			</div>
		</a>
		<div class="caption" style="position: absolute;bottom: 0px;left: 0px;background: rgba(255, 255, 255, 0.6);width: 100%;padding: 20px;padding-top: 0px;padding-bottom: 5px;">
			<?php if(isset($attach)) : ?>
			<div style="margin-top: 10px;margin-bottom: -10px;">
				<strong><?= $attach['qty'] ?></strong> bouteilles de <strong><?= $attach['vintage'] ?></strong>
			</div>
			<?php endif ?>
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>" style="color: rgb(128, 0, 0);"><?= $wine['name'] ?></a></h3>
			
			<?php if(!isset($attach)) : ?>
			<p><?= $wine['description'] ?></p>
			<?php endif ?>
		</div>
	</div>
	<?php if(isset($button)) : ?>
		<button data-id="<?= $wine['id'] ?>" class="remove" style="position: absolute;top: -10px;right: 0px;padding-top: 4px;background: white;border: 1px solid #ccc;border-radius: 30px;"><span class="glyphicon glyphicon-remove"></span></button>
	<?php endif ?>
</div>