<?php

class EventRLike extends AppModel {

	public $useTable = 'events_likes';

	public $hasBelongs = array('User', 'Event');

}