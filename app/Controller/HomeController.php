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
App::uses('CakeEmail', 'Network/Email');

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
	public $uses = array('Event', 'User', 'Wine', 'News');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('index', 'about', 'contact', 'sendEmail'));
	}
	
	public function index() {

		$wines = $this->Wine->find('all', array('limit' => 4));
		$users = $this->User->find('all', array('limit' => 4));
		$events = $this->Event->find('all', array('limit' => 9, 'order' => array('Event.date' => 'DESC')));
		$this->set(compact('events', 'users', 'wines'));
		$this->render('/home/index');
		
	}

	public function about() {

		$this->render('/home/about');
		
	}

	public function contact() {

		$this->render('/home/contact');
		
	}

	public function sendEmail() {
		$data = $this->request['data']['Event'];
		
		try{
			$Email = new CakeEmail();
			$Email->emailFormat('text');
			$Email->from($data['email']);
			$Email->to('lucnotsand@gmail.com');
			$Email->subject("Feedback");
			$Email->send($data['notes']);

			$this->Session->setFlash('Votre message a été envoyé !');
			$this->redirect(array('controller' => 'Home', 'action' => 'index'));
		} catch (Exception $e) {
			$this->Session->setFlash('Adresse email invalide !', 'default', array("class" => "alert alert-danger"));
			$this->redirect(array('controller' => 'Home', 'action' => 'contact'));
		}
	}
}
