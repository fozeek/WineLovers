<?php
	$nb = ceil($countPosts/10);
?>

<div id="load-more" data-page="<?= $pagePosts+1 ?>" data-object="<?= $object ?>" data-id="<?= $id ?>" data-conditions='<?= json_encode($conditions, JSON_HEX_QUOT ) ?>' style="display: none;padding: 40px;text-align: center;">
	Chargement...
</div>