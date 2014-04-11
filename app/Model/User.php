<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $displayField = 'name';
	public $virtualFields = array(
	    'name' => "CONCAT(User.firstname, ' ', User.lastname)"
	);

	public $validate = array(
        'pseudo' => array(
            'size' => array(
                'rule'    => array('between', 6, 200),
                'message' =>   '6 caractères minimum.'
            )
        ),
        'password' => array(
            'rule'    => array('between', 5, 15),
            'message' => 'Saisir entre 5 et 15 caractères.'
        ),
        'email' => array(
            'rule'      => '/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\.-]{2,}[\.][a-zA-Z]{2,}$/i',
            'message'   => 'Saisir une adresse email valide.'
        ),
        'zip'   => array(
            'sizemax'   => array(
                'rule'  => array('maxLength', 5),
                'message'   => 'Saisir un code postal valide.'
            ),
            'sizemin'   => array(
                'rule'      => array('minLength', 5),
                'message'   => 'Saisir un code postal valide.'
            )
        )
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