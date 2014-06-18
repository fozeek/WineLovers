<div style="padding-bottom: 20px;">	
	<div class="media">
  		<a class="pull-left" href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $post['Author']['slug'])) ?>">
    		<img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $post['Author']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 50px;">
  		</a>
  		<div class="media-body">
  			<div style="height: 50px;padding: 4px;">
	    		<h4 class="media-heading" style="margin-top: 0px;">
            <a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $post['Author']['slug'])) ?>"><?= $post['Author']['name'] ?></a> 

           

            <?php if (array_key_exists('ToWine', $post) && array_key_exists('id', $post['ToWine']) && !empty($post['ToWine']['id'])): ?>
               > <a href="<?= $this->Html->url(array('controller' => 'wines', 'action' => 'feeds', 'name' => $post['ToWine']['slug'])) ?>"><?= $post['ToWine']['name'] ?></a>
            <?php endif ?>
            <?php if (array_key_exists('ToEvent', $post) && array_key_exists('id', $post['ToEvent']) && !empty($post['ToEvent']['id'])): ?>
               > <a href="<?= $this->Html->url(array('controller' => 'events', 'action' => 'feeds', 'name' => $post['ToEvent']['slug'])) ?>"><?= $post['ToEvent']['name'] ?></a>
            <?php endif ?>
            <?php if (array_key_exists('ToUser', $post) && array_key_exists('id', $post['ToUser']) && !empty($post['ToUser']['id']) && $post['ToUser']['id'] !=  $post['Author']['id']): ?>
               > <a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $post['ToUser']['slug'])) ?>"><?= $post['ToUser']['name'] ?></a>
            <?php endif ?>

          </h4>
	    		<?= $post['created']->format('l j F Y') ?>
	    	</div>
	   	</div>
	 </div>
 	<div style="padding: 10px;" >
    	<p class="lead" style="margin-bottom: 4px;">
    		<?= $post['text'] ?>
    	</p>
    	<?php if (array_key_exists('AttachWine', $post) && array_key_exists('id', $post['AttachWine']) && !empty($post['AttachWine']['id'])): ?>
    	<div class="row">
    		<?= $this->element('cards/posts/wine', array('wine' => $post['AttachWine'])) ?>
    	</div>
    	<?php endif ?>
    	<?php if (array_key_exists('AttachEvent', $post) && array_key_exists('id', $post['AttachEvent']) && !empty($post['AttachEvent']['id'])): ?>
      <div class="row">
        <?= $this->element('cards/posts/event', array('event' => $post['AttachEvent'])) ?>
      </div>
      <?php endif ?>
      <?php if (array_key_exists('AttachUser', $post) && array_key_exists('id', $post['AttachUser']) && !empty($post['AttachUser']['id'])): ?>
      <div class="row">
        <?= $this->element('cards/posts/user', array('user' => $post['AttachUser'])) ?>
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
      <input type="hidden" class="post_id" value="<?= $post['id'] ?>" />
    <textarea class="form-control text" rows="5" style="margin-bottom: 5px;width: 100%;max-width: 100%;height: 35px;" name="text" data-val="Laisser une réponse">Laisser une réponse</textarea>
    <button type="submit" class="btn btn-default pull-right" style="display: none;">Publier</button>
    </div>
  </form>
</div>