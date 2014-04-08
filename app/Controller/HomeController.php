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
class HomeController extends AppController {

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
	public function beforeFilter(){
		$this->loadModel("User");
	}

	public function index() {

		$this->render('/home/index');
		
	}

	public function about() {

		$this->render('/home/about');
		
	}

	public function contact() {

		$this->render('/home/contact');
		
	}

	public function signin() {
		if($this->request->is("post")){
			$user = new User();
			$user->create($this->data);
			$user->save();

			$this->redirect(array('controller' => 'Home', 'action' => 'index'));
		}

		$this->render('/home/signin');
		
	}

	public function login() {
		if($this->request->is("post")){
			$user = $this->User->findByEmail($this->data["email"]);
			if(empty($user)){
				$this->Session->setFlash("Utilisateur non trouvé.");
			}
			else{
				if($user["User"]["password"] == $this->data["password"]){
					$this->redirect(array('controller' => 'Users', 'action' => 'feeds'));
				}
				else{
					$this->Session->setFlash("Mot de passe incorrecte.");
				}
			}
		}

		$this->render('/home/login');
		
	}

	public function logout() {

		$this->render('/home/logout');
		
	}
}
