<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>

<?= $this->element('feeds/page', array(
		'isyou' => true,
		'friendsPosts' => $friendsPosts,
		'eventsPosts' => $eventsPosts,
		'winesPosts' => $winesPosts,
		'object' => 'User',
		'id' => $user['User']['id'],
		'news' => $news
	)) ?>