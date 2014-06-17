<?php

class Post extends AppModel {

	public $actsAs = array('Containable');

	public $belongsTo = array(
			'Author' => array(
				'className' => 'User',
			),
			'AttachWine' => array('className' => 'Wine', 'foreignKey' => 'attach_wine_id'),
			'AttachUser' => array('className' => 'User', 'foreignKey' => 'attach_user_id'),
			'AttachEvent' => array('className' => 'Event', 'foreignKey' => 'attach_event_id'),
			'ToWine' => array('className' => 'Wine', 'foreignKey' => 'link_wine_id'),
			'ToUser' => array('className' => 'User', 'foreignKey' => 'link_user_id'),
			'ToEvent' => array('className' => 'Event', 'foreignKey' => 'link_event_id'),
		);

	public $hasMany = array('Comment');


	public function beforeSave($options = array()) {
		$this->data[$this->alias]['text'] = htmlentities($this->data[$this->alias]['text']);
	}

	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

}