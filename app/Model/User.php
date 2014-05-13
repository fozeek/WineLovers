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
            'Post' => array('conditions' => array('Post.link_object' => 'User'), 'foreignKey' => 'link_id'),
            'R_JoinedEvent' => array('className' => 'EventRGuest'),
            'R_LikedEvent' => array('className' => 'EventRLike'),
            'R_Cellar' => array('className' => 'UserRCellar'),
            'R_Whishlist' => array('className' => 'UserRWishlist'),
            'R_Friendship' => array('className' => 'UserRFriendship')
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
            'WineCellar' => array(
                'className' => 'Wine',
                'joinTable' => 'cellars'
            ),
            'WineWishlist' => array(
                'className' => 'Wine',
                'joinTable' => 'wishlists'
            ),
            'UserFriendship' => array(
                'className' => 'User',
                'joinTable' => 'friendships',
                'associationForeignKey' => 'friend_id'
            ),
        );

	public $validate = array(
        'pseudo' => array(
            'size' => array(
                'rule'    => array('between', 6, 200),
                'message' =>   '6 caractères minimum.'
            ),
            'unique' => array(
                'rule'      => 'isUnique',
                'message'   => 'Pseudo déjà pris.'
            )
        ),
        'password' => array(
            'rule'    => array('between', 5, 15),
            'message' => 'Saisir entre 5 et 15 caractères.'
        ),
        'email' => array(
            'valid' => array(
                'rule'      => '/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\.-]{2,}[\.][a-zA-Z]{2,}$/i',
                'message'   => 'Saisir une adresse email valide.'
            ),
            'unique' => array(
                'rule'      => 'isUnique',
                'message'   => 'Adresse email déjà pris.'
            )
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
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);},
                'name' => function ($firstname, $lastname) {return $firstname.' '.$lastname;},
            ));
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