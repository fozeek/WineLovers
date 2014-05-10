<blockquote style="margin-left: 15px;margin-right: 15px;padding-top: 0px;padding-bottom: 0px;background: #F9F9F9;">	
<div class="row">
	<div class="col-md-10">
		<h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>" style="color: rgb(128, 0, 0);"><?= $wine['name'] ?></a></h3>
			<p><?= $wine['description'] ?></p>
	</div>
	<div class="col-md-2">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>">
			<img src="<?= $wine['image'] ?>" alt="..." style="max-height: 100px;">
		</a>
	</div>
</div>
</blockquote>