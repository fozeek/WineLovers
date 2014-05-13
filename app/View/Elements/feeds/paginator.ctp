<?php
	$nb = ceil($countPosts/10);
?>
<div id="load-more" data-page="<?= $pagePosts+1 ?>" data-object="<?= $object ?>" data-id="<?= $id ?>" style="display: none;padding: 40px;text-align: center;">
	Chargement...
</div>