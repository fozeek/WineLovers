<blockquote style="margin-left: 15px;margin-right: 15px;padding-top: 0px;padding-bottom: 0px;background: #F9F9F9;border: 4px solid #eee;border-radius: 4px;padding: 10px;">	
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['slug'])); ?>">
				<div style="width: 128px;height: 128px;margin: -14px;border: 1px solid #eee;border-right: none;background: #eee url(<?php if(!empty($user['image'])) : echo $user['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>) center center no-repeat;background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;-o-background-size: cover;"></div>
				
			</a>
		</div>
		<div class="col-md-10">
			<h3><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $user['slug'])); ?>"><?= $user['name'] ?></a></h3>
			<p>
				<?= count($user['UserFriendship']) ?> <span class="glyphicon glyphicon-user"></span> - <?= count($user['WineCellar']) ?> <span class="glyphicon glyphicon-glass"></span> - <?= count($user['JoinedEvent']) ?> <span class="glyphicon glyphicon-calendar"></span>
			</p>
		</div>
	</div>
</blockquote>