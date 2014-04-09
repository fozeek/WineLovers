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
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	public $scaffold;

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('signin');
	}

	public function index() {
		$users = $this->User->find('all');
		$this->set(compact('users'));
		$this->render('/users/index');
	}

	public function about() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/about');
	}

	public function feeds() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/feeds');
	}

	public function cellar() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/cellar');
	}

	public function friends() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/friends');
	}

	public function events() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/events');
	}

	public function whishlist() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->set(compact('user'));
		$this->render('/users/whishlist');
	}

	public function login() {
		if($this->request->is("post")){
			if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	            $this->Session->setFlash('Username ou password est incorrect');
	        }

		}

		$this->render('/users/login');	
	}

	public function signin() {
		if($this->request->is("post")){
			$user = new User();
			$user->create($this->request->data);
			$user->save();

			$this->redirect(array('controller' => 'Home', 'action' => 'index'));
		}

		$this->render('/users/signin');
	}

	public function logout() {
    	$this->redirect($this->Auth->logout());
		$this->render('/users/logout');	
	}
}
