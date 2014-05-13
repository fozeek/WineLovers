<?php $this->layout = false; ?>
<?php foreach($friendsPosts as $friend) : ?>
	<?= $this->element('cards/posts/objects/user', array('friend' => $friend)) ?>
<?php endforeach ?>