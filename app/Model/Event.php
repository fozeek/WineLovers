<?php

class Event extends AppModel {

	public $belongsTo = array('Author' => array(
			'className' => 'User'
		));

	public $hasMany = array(
			'R_EventGuest' => array('className' => 'EventRGuest'),
			'R_EventLike' => array('className' => 'EventRLike'),
			'Post' => array('conditions' => array('Post.link_object' => 'Event'), 'foreignKey' => 'link_id')
		);

	public $hasAndBelongsToMany = array(
			'Guest' => array('className' => 'User', 'joinTable' => 'events_joins'),
			'Like' => array('className' => 'User', 'joinTable' => 'events_likes')
		);

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);},
                'date' => function ($date) {return new DateTime($date);}
            ));
	}

	public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['name'])) {
            $this->data[$this->alias]['slug'] = Inflector::slug($this->data[$this->alias]['name'], '-');
        }
        return true;
    }

}