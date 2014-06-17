<?php

class News extends AppModel {

	public $actsAs = array('Containable');

	public $belongsTo = array(
			'Author' => array(
				'className' => 'User',
			),
			'LinkWine' => array('className' => 'Wine', 'foreignKey' => 'attach_wine_id'),
			'LinkUser' => array('className' => 'User', 'foreignKey' => 'attach_user_id'),
			'LinkEvent' => array('className' => 'Event', 'foreignKey' => 'attach_event_id'),
			'LinkPost' => array('className' => 'Post', 'foreignKey' => 'attach_post_id'),
			'FromWine' => array('className' => 'Wine', 'foreignKey' => 'author_wine_id'),
			'FromUser' => array('className' => 'User', 'foreignKey' => 'author_user_id'),
			'FromEvent' => array('className' => 'Event', 'foreignKey' => 'author_event_id'),
		);

	public $hasMany = array('Comment');


	public function beforeSave($options = array()) {
		$this->data[$this->alias]['msg'] = htmlentities($this->data[$this->alias]['msg']);
	}

	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

}