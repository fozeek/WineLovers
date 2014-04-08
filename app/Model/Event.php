<?php

class Event extends AppModel {

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key]['Event']['created']);
			$updated = new DateTime($results[$key]['Event']['updated']);
			$results[$key]['Event']['created_print'] = $created->format('l j F Y');
			$results[$key]['Event']['updated_print'] = $updated->format('l j F Y');
		}
		return $results;
	}

}