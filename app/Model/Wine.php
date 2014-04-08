<?php

class Wine extends AppModel {

	public $displayField = 'name';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $result) {
			$created = new DateTime($results[$key]['Wine']['created']);
			$updated = new DateTime($results[$key]['Wine']['updated']);
			$results[$key]['Wine']['created_print'] = $created->format('l j F Y');
			$results[$key]['Wine']['updated_print'] = $updated->format('l j F Y');
		}
		return $results;
	}

}