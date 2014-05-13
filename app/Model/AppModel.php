<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public function afterFindFields($results, $primary, $callbacks) {
		if(!array_key_exists('created', $results)) {
            foreach ($results as $key => $result) {
                if($primary || array_key_exists($this->alias, $result)) {
                    if(!isset($results[$key][$this->alias]['created'])) {
                        return $results;
                    }
                    $results[$key][$this->alias] = $this->_executeChange($results[$key][$this->alias], $callbacks);
                }
                else {
                    $results[$key] = $this->_executeChange($results[$key], $callbacks);
                }
    		}
        }
        else {
            $results = $this->_executeChange($results, $callbacks);
        }
		return $results;
	}

	protected function _executeChange($results, $callbacks) {
		if(array_key_exists('_parsed', $results) && $results['_parsed']) { // because some object can be send to 'afterFind' several time
			return $results;
		}
		$results['_parsed'] = true;
		foreach ($callbacks as $key => $callback) {
			$reflection = new ReflectionFunction($callback);
			$params = array();
			foreach ($reflection->getParameters() as $args => $value) {
				$params[] = $results[$value->getName()];
			}
			$results[$key] = call_user_func_array($callback, $params);
		}
		return $results;
	}

}