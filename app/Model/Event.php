<?php

class Event extends AppModel {

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$results[$key][$this->alias]['created'] = new DateTime($results[$key][$this->alias]['created']);
			$results[$key][$this->alias]['updated'] = new DateTime($results[$key][$this->alias]['updated']);
			$results[$key][$this->alias]['date'] = new DateTime($results[$key][$this->alias]['date']);
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