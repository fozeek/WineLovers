<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>

<?= $this->element('feeds/page', array(
		'isyou' => true,
		'friendsPosts' => $friendsPosts,
		'eventsPosts' => $eventsPosts,
		'winesPosts' => $winesPosts,
		'conditions' => $conditions,
		'news' => $news
	)) ?>