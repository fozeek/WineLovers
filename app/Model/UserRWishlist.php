<?php

class UserRWishlist extends AppModel {

	public $useTable = 'wishlists';

	public $belongsTo = array('User', 'Wine');

}