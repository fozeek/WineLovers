<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>
<?= $this->element('feeds/page', array(
		'friendsPosts' => $friendsPosts,
		'eventsPosts' => $eventsPosts,
		'winesPosts' => $winesPosts,
		'object' => 'Event',
		'id' => $event['Event']['id']
	)) ?>