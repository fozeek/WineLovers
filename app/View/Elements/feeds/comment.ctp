<div class="media" style="margin-left: 60px;margin-top: 0px;">
	<a class="pull-left" href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $comment['Author']['slug'])) ?>">
	    <img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $comment['Author']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 40px;">
	</a>
	<div class="media-body">
			<div style="height: 40px;padding: 2px;">
			<h4 class="media-heading" style="margin-bottom: 0px;"><a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $comment['Author']['slug'])) ?>"><?= $comment['Author']['name'] ?></a></h4>
			<span style="font-size: 0.8em;margin-top: 0px;"><?= $comment['created']->format('l j F Y') ?></span>
		</div>
	</div>
</div>
<div style="padding: 8px;margin-left: 60px;">
	<p class="lead" style="margin-bottom: 0px;">
    	<?= $comment['text'] ?>
	</p>
</div>