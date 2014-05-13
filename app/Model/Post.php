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
		);

	public $hasMany = array('Comment');


	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

}