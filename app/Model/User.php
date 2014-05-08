<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	// public $displayField = 'name';
	// public $virtualFields = array(
	//     'name' => "CONCAT(User.firstname, ' ', User.lastname)"
	// );

    public $hasMany = array(
            'CreatedEvent' => array(
                'className' => 'Event',
                'foreignKey' => 'author_id'
            ),
            'R_JoinedEvent' => array('className' => 'EventRGuest'),
            'R_LikedEvent' => array('className' => 'EventRLike'),
        );

    public $hasAndBelongsToMany = array(
            'JoinedEvent' => array(
                'className' => 'Event',
                'joinTable' => 'events_joins'
            ),
            'LikedEvent' => array(
                'className' => 'Event',
                'joinTable' => 'events_likes'
            ),
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
            if($primary || array_key_exists($this->alias, $result)) {
                if(!isset($results[$key][$this->alias]['created'])) {
                    return $results;
                }
                $results[$key][$this->alias]['created'] = new DateTime($results[$key][$this->alias]['created']);
                $results[$key][$this->alias]['updated'] = new DateTime($results[$key][$this->alias]['updated']);
                $results[$key][$this->alias]['name'] = $results[$key][$this->alias]['firstname'].' '.$results[$key][$this->alias]['lastname'];
            }
            else {
                $results[$key]['created'] = new DateTime($results[$key]['created']);
                $results[$key]['updated'] = new DateTime($results[$key]['updated']);
                $results[$key]['name'] = $results[$key]['firstname'].' '.$results[$key]['lastname'];
            }
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