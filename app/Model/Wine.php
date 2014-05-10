<?php

class Wine extends AppModel {

	public $displayField = 'name';

	public $hasAndBelongsToMany = array(
			'Cellars' => array(
                'className' => 'User',
                'joinTable' => 'cellars'
            ),
            'Wishlists' => array(
                'className' => 'User',
                'joinTable' => 'wishlists'
            ),
		);

	public function afterFind($results, $primary = false) {
		return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

	public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['name'])) {
            $this->data[$this->alias]['slug'] = Inflector::slug($this->data[$this->alias]['name'], '-');
        }
        return true;
    }

}