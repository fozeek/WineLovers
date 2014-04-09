<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $displayField = 'name';
	public $virtualFields = array(
	    'name' => "CONCAT(User.firstname, ' ', User.lastname)"
	);

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key][$this->alias]['created']);
			$updated = new DateTime($results[$key][$this->alias]['updated']);
			$results[$key][$this->alias]['created_print'] = $created->format('l j F Y');
			$results[$key][$this->alias]['updated_print'] = $updated->format('l j F Y');
		}
		return $results;
	}

	public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'md5'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        if (!empty($this->data[$this->alias]['pseudo'])) {
            $this->data[$this->alias]['slug'] = Inflector::slug($this->data[$this->alias]['pseudo'], '-');
        }
        return true;
    }
}