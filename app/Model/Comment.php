<?php

class Comment extends AppModel {

	public $belongsTo = array(
			'Post',
			'Author' => array(
				'className' => 'User'
			)
		);

	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

}