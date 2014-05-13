<?php $this->layout = false; ?>
<?php foreach ($posts as $post): ?>
	<?= $this->element('feeds/news', ['post' => $post]) ?>
<?php endforeach ?>