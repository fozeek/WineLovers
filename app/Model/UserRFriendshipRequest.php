<?php

class UserRFriendshipRequest extends AppModel {

	public $useTable = 'friendshipsrequests';

	public $belongsTo = array('User', 'Friend' => array('className' => 'User'));

}