<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>

<textarea class="form-control" rows="5" style="margin-bottom: 5px;">Laissez un commentaire</textarea>
<button type="submit" class="btn btn-default pull-right">Publier</button>
<div class="clearfix"></div>
<?php foreach ($posts as $post): ?>
	<?= $this->element('feeds/news', ['post' => $post]) ?>
<?php endforeach ?>