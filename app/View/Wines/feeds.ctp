<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>
<form id="post-form" role="form" method="post">
  <div class="form-group">
  	<input type="hidden" class="link_id" value="<?= $wine['Wine']['id'] ?>" />
  	<input type="hidden" class="link_object" value="Wine" />
	<textarea class="form-control text" rows="5" style="margin-bottom: 5px;width: 100%;max-width: 100%;height: 35px;" name="text" data-val="Laisser un message">Laisser un message</textarea>
	<button type="submit" class="btn btn-default pull-right" style="display: none;">Publier</button>
  </div>
</form>
<div class="clearfix"></div>
<div class="posts-container">
<?php foreach ($posts as $post): ?>
	<?= $this->element('feeds/news', ['post' => $post]) ?>
<?php endforeach ?>
</div>