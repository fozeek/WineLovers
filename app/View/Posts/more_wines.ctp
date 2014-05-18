<?php $this->layout = false; ?>
<?php foreach($winesPosts as $wine) : ?>
	<?= $this->element('cards/posts/objects/wine', array('wine' => $wine, 'ids' => isset($ids) ? $ids : null)) ?>
<?php endforeach ?>