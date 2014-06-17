<?php

class Review extends AppModel {

	public $belongsTo = array(
			'Author' => array(
				'className' => 'User'
			),
			'Wine' => array(
				'className' => 'Wine',
			),
		);

	public function afterFind($results, $primary = false) {
        return parent::afterFindFields($results, $primary, array(
                'created' => function ($created) {return new DateTime($created);},
                'updated' => function ($updated) {return new DateTime($updated);}
            ));
	}

}