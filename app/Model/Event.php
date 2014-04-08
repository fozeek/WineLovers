<?php

class Event extends AppModel {

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key][$this->alias]['created']);
			$updated = new DateTime($results[$key][$this->alias]['updated']);
			$date = new DateTime($results[$key][$this->alias]['date']);
			$results[$key][$this->alias]['created_print'] = $created->format('l j F Y');
			$results[$key][$this->alias]['updated_print'] = $updated->format('l j F Y');
			$results[$key][$this->alias]['date_print'] = $date->format('l j F Y');
			$results[$key][$this->alias]['date'] = $date;
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