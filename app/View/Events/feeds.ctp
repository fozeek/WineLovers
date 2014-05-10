<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>
<form role="form" method="post" action="<?= $this->Html->url(array('controller' => 'users', 'action' => 'feeds')) ?>">
  <div class="form-group">
	<textarea class="form-control" rows="5" style="margin-bottom: 5px;" name="text">Laissez un commentaire</textarea>
	<button type="submit" class="btn btn-default pull-right">Publier</button>
  </div>
</form>
<div class="clearfix"></div>
<?php foreach ($posts as $post): ?>
	<?= $this->element('feeds/news', ['post' => $post]) ?>
<?php endforeach ?>