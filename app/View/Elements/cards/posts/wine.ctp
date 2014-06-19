<blockquote style="margin-left: 15px;margin-right: 15px;padding-top: 0px;padding-bottom: 0px;background: #F9F9F9;border: 4px solid #eee;border-radius: 4px;padding: 10px;">	
<div class="row">
	<div class="col-md-2">
		<a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>">
			<div style="width: 128px;height: 128px;margin: -14px;border: 1px solid #eee;border-right: none;background: #eee url(/img/upload/<?= $wine['image'] ?>) center center no-repeat;background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;-o-background-size: cover;"></div>
		</a>
	</div>
	<div class="col-md-10">
		<h3><a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $wine['slug'])); ?>" style="color: rgb(128, 0, 0);"><?= $wine['name'] ?></a></h3>
			<p>
				12 <span class="glyphicon glyphicon-thumbs-up"></span> - <?= count($wine['Cellars']) ?> <span class="glyphicon glyphicon-home"></span> - <?= count($wine['Wishlists']) ?> <span class="glyphicon glyphicon-bookmark"></span>
			</p>
	</div>
</div>
</blockquote>