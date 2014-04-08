<?php

class Event extends AppModel {

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key]['User']['created']);
			$updated = new DateTime($results[$key]['User']['updated']);
			$results[$key]['User']['created_print'] = $created->format('l j F Y');
			$results[$key]['User']['updated_print'] = $updated->format('l j F Y');
		}
		return $results;
	}

}