<?php

class EventRLike extends AppModel {

	public $useTable = 'events_likes';

	public $belongsTo = array('User', 'Event');

}