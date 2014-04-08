<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $displayField = 'pseudo';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key]['User']['created']);
			$updated = new DateTime($results[$key]['User']['updated']);
			$results[$key]['User']['created_print'] = $created->format('l j F Y');
			$results[$key]['User']['updated_print'] = $updated->format('l j F Y');
		}
		return $results;
	}

	 public function beforeSave($options = array()) {
        if (!empty($this->data['User']['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'md5'));
            $this->data['User']['password'] = $passwordHasher->hash(
                $this->data['User']['password']
            );
        }
        return true;
    }
}