<?php

class EventRGuest extends AppModel {

	public $useTable = 'events_joins';

	public $belongsTo = array('User', 'Event');

}