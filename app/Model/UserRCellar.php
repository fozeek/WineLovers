<?php

class UserRCellar extends AppModel {

	public $useTable = 'cellars';

	public $belongsTo = array('User', 'Wine');

}