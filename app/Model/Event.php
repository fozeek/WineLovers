<?php

class Event extends AppModel {

	public $belongsTo = array('Author' => array(
			'className' => 'User',
			'counterCache' => true
			// 'foreignKey' => ''
		));

	public $hasMany = array(
			'R_EventGuest' => array('className' => 'EventRGuest'),
			'R_EventLike' => array('className' => 'EventRLike')
		);

	public $hasAndBelongsToMany = array(
			'Guest' => array('className' => 'User', 'joinTable' => 'events_joins'),
			'Like' => array('className' => 'User', 'joinTable' => 'events_likes')
		);

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
        foreach ($results as $key => $result) {
            if($primary || array_key_exists($this->alias, $result)) {
                if(!isset($results[$key][$this->alias]['created'])) {
                    return $results;
                }
                $results[$key][$this->alias]['created'] = new DateTime($results[$key][$this->alias]['created']);
				$results[$key][$this->alias]['updated'] = new DateTime($results[$key][$this->alias]['updated']);
				$results[$key][$this->alias]['date'] = new DateTime($results[$key][$this->alias]['date']);
            }
            else {
                $results[$key]['created'] = new DateTime($results[$key]['created']);
				$results[$key]['updated'] = new DateTime($results[$key]['updated']);
				$results[$key]['date'] = new DateTime($results[$key]['date']);
            }
		}
		return $results;
	}

	public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['name'])) {
            $this->data[$this->alias]['slug'] = Inflector::slug($this->data[$this->alias]['name'], '-');
        }
        return true;
    }

}