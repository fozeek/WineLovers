<?php $this->layout = false; ?>
<div class="new-post" style="display: none;">
<?= $this->element('feeds/post', ['post' => array_merge($post[0], $post[0]['Post'])]) ?>
</div>