<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class CompteController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function feeds() {

		$this->render('/compte/feeds');
		
	}

	public function settings() {

		$this->render('/compte/settings');
		
	}

	public function friends() {

		$this->render('/compte/friends');
		
	}

	public function calendar() {

		$this->render('/compte/calendar');
		
	}

	public function cellar() {

		$this->render('/compte/cellar');
		
	}

	public function whishlist() {

		$this->render('/compte/whishlist');
		
	}

	public function profil() {

		$this->render('/compte/profil');
		
	}

	public function inbox() {

		$this->render('/compte/inbox');
		
	}
}