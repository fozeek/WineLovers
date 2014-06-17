<?php $this->layout = false; ?>
<?php foreach ($news as $actu): ?>
	<?= $this->element('feeds/news', ['actu' => $actu]) ?>
<?php endforeach ?>