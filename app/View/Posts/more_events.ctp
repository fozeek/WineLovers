<?php $this->layout = false; ?>
<?php foreach($eventsPosts as $event) : ?>
	<?= $this->element('cards/posts/objects/event', array('event' => $event)) ?>
<?php endforeach ?>