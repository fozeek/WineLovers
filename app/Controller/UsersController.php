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
	public $uses = array('Wine', 'User', 'Post', 'Event', 'News');

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
		$this->Auth->allow('signin', 'loginByFacebook');
	}

	private function isFriend($id) {
		$user = $this->User->findById($this->user['id']);
		if($id == $this->user['id']) {
			$this->set(array('isyou' => true));
			return;
		}
		$isFriend = false;
		$isFriendRequest = false;
		$isFriendRequestSent = false;
		foreach ($user['UserFriendship'] as $friend) {
			if($id == $friend['id']) {
				$isFriend = true;
			}
		}
		foreach ($user['UserFriendshipRequest'] as $friend) {
			if($id == $friend['id']) {
				$isFriendRequest = true;
			}
		}
		foreach ($user['UserFriendshipRequestSent'] as $friend) {
			if($id == $friend['id']) {
				$isFriendRequestSent = true;
			}
		}
		$this->set(compact('isFriend', 'isFriendRequest', 'isFriendRequestSent'));
	}

	public function index() {
		$users = $this->User->find('all');
		$this->set(compact('users'));
		$this->render('/users/index');
	}

	public function about() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/about');
	}

	public function feeds() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		parent::getNews('User', $user);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/feeds');
	}

	public function cellar() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/cellar');
	}

	public function friends() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/friends');
	}

	public function events() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/events');
	}

	public function wishlist() {
		$user = $this->User->findBySlug($this->request->params['pseudo']);
		$this->isFriend($user['User']['id']);
		$this->set(compact('user'));
		$this->render('/users/wishlist');
	}

	public function login() {
		if($this->Auth->loggedIn()){
			return $this->redirect(array('controller' => 'compte', 'action' => 'feeds'));
		}

		if($this->request->is("post")){
			if ($this->Auth->login()) {
	            return $this->redirect(array('controller' => 'compte', 'action' => 'feeds'));
	        } else {
	            $this->Session->setFlash('Username ou password est incorrect');
	        }
		}
		$this->render('/users/login');	
	}

	public function signin() {
		if($this->request->is("post")){
			$this->User->set($this->request->data);

			if($this->User->validates()){
				$info = array_merge($this->request->data["User"], array("code" => uniqid()));
				$this->User->create($info);
				$this->User->save();

				$this->redirect(array('controller' => 'Home', 'action' => 'index'));
			} 
		}

		$this->render('/users/signin');
	}

	public function logout() {
    	$this->redirect($this->Auth->logout());
		$this->render('/users/logout');	
	}

	public function loginByFacebook (){
		$data = $this->request['data'];
		$userByMail = $this->User->findByEmail($data['email']);

		if(count($userByMail) == 0){
			$i = 1;
			$pseudo = $data['firstname'].".".$data['name'];
			
			do{
				$user = $this->User->findByPseudo($pseudo);
				
				if(count($user) != 0){
					$pseudo = $pseudo.$i;
				}	

				$i++;
			} while(count($user)!=0);

			$this->User->create(array("pseudo" => $pseudo, "firstname" => $data['firstname'], "lastname" => $data['name'], "email" => $data['email'], "facebookid" => $data['fbID']));
			$this->User->save();
		}

		$user = $this->User->findByEmail($data['email']);
		$this->Auth->login($user['User']);
	   	exit;
	}
}
