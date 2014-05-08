<?php

class EventRGuest extends AppModel {

	public $useTable = 'events_joins';

	public $hasBelongs = array('User', 'Event');

}