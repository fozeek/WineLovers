<div style="padding-bottom: 20px;">	
	<div class="media">
  		<a class="pull-left" href="#">
    		<img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $post['Author']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 50px;">
  		</a>
  		<div class="media-body">
  			<div style="height: 50px;padding: 4px;">
	    		<h4 class="media-heading" style="margin-top: 0px;"><?= $post['Author']['name'] ?></h4>
	    		<a href="#"><?= $post['Post']['created']->format('l j F Y') ?></a>
	    	</div>
	   	</div>
	 </div>
 	<div style="padding: 10px;" >
    	<p class="lead" style="margin-bottom: 4px;">
    		<?= $post['Post']['text'] ?>
    	</p>
    	<?php if (array_key_exists('AttachWine', $post) && $post['AttachWine']['id'] !== null): ?>
    	<div class="row">
    		<?= $this->element('cards/posts/wine', array('wine' => $post['AttachWine'])) ?>
    	</div>
    	<?php endif ?>
    	<?php if (array_key_exists('AttachEvent', $post) && $post['AttachEvent']['id'] !== null): ?>
    	<div class="row">
    		<?= $this->element('cards/posts/event', array('event' => $post['AttachEvent'])) ?>
    	</div>
    	<?php endif ?>
    </div>
    <?php foreach ($post['Comment'] as $comment): ?>
    <div class="media" style="margin-left: 60px;margin-top: 0px;">
		<a class="pull-left" href="#">
		    <img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $comment['Author']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 40px;">
		</a>
		<div class="media-body">
  			<div style="height: 40px;padding: 2px;">
				<h4 class="media-heading" style="margin-bottom: 0px;"><?= $comment['Author']['name'] ?></h4>
				<a href="#" style="font-size: 0.8em;margin-top: 0px;"><?= $comment['created']->format('l j F Y') ?></a>
			</div>
		</div>
	</div>
	<div style="padding: 8px;margin-left: 60px;">
		<p class="lead">
	    	<?= $comment['text'] ?>
		</p>
    </div>
    <?php endforeach ?>
</div>