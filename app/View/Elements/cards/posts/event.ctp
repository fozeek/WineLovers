<blockquote style="margin-left: 15px;margin-right: 15px;padding-top: 0px;padding-bottom: 0px;background: #F9F9F9;border: 4px solid #eee;border-radius: 4px;padding: 10px;">	
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>">
				<div style="width: 128px;height: 128px;margin: -14px;border: 1px solid #eee;border-right: none;background: #eee url(http://placekitten.com/120/120) center center no-repeat;background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;-o-background-size: cover;"></div>
			</a>
		</div>
		<div class="col-md-1">
			<div style="border: 2px solid #333;padding: 3px;padding-left: 8px;padding-right: 8px;border-radius: 4px;float: left;margin-top: 13px;">
				<span style="font-size: 18px;
	font-weight: 500;
	margin: -2px auto 0 auto;"><?= $event['date']->format('M') ?></span><br />
				<span style="font-size: 27px;
	font-weight: 500;
	margin: -2px auto -6px auto;"><?= $event['date']->format('d') ?></span>
			</div>
		</div>
		<div class="col-md-9">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $event['slug'])); ?>"><?= $event['name'] ?></a></h3>
				<p><?= count($event['Like']) ?> <span class="glyphicon glyphicon-thumbs-up"></span> - <?= count($event['Guest']) ?> <span class="glyphicon glyphicon-user"></span></p>
		</div>
	</div>
</blockquote>