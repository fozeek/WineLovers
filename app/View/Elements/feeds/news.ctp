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
    <div class="comments-container">
    <?php foreach ($post['Comment'] as $comment): ?>
      <?= $this->element('feeds/comment', array('comment' => $comment)) ?>
    <?php endforeach ?>
  </div>
    <form class="comment-form" role="form" method="post" style="margin-left: 60px;margin-right: 20px;">
    <div class="form-group">
      <input type="hidden" class="post_id" value="<?= $post['Post']['id'] ?>" />
    <textarea class="form-control text" rows="5" style="margin-bottom: 5px;width: 100%;max-width: 100%;height: 35px;" name="text" data-val="Laisser une réponse">Laisser une réponse</textarea>
    <button type="submit" class="btn btn-default pull-right" style="display: none;">Publier</button>
    </div>
  </form>
</div>