<?php

class UserRFriendship extends AppModel {

	public $useTable = 'friendships';

	public $belongsTo = array('User', 'Friend' => array('className' => 'User'));

}