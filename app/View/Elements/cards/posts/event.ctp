<blockquote style="margin-left: 15px;margin-right: 15px;padding-top: 0px;padding-bottom: 0px;background: #F9F9F9;">	
	<div class="row">
		<div class="col-md-10">
			<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-top: 23px;margin-right: 10px;">
				<span style="font-size: 10px;
	font-weight: 500;
	margin: -2px auto 0 auto;"><?= $event['date']->format('M') ?></span><br />
				<span style="ffont-size: 22px;
	font-weight: 500;
	margin: -2px auto -6px auto;"><?= $event['date']->format('d') ?></span>
			</div>
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>"><?= $event['name'] ?></a></h3>
				<p><?= $event['description'] ?></p>
		</div>
		<div class="col-md-2">
			<a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>">
				<img src="http://placekitten.com/120/120" alt="..." style="max-height: 100px;">
			</a>
		</div>
	</div>
</blockquote>