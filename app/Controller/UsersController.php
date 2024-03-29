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
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Wine', 'User', 'Post', 'Event', 'News', 'Review');

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
		$this->Auth->allow('signin', 'loginByFacebook', 'validation');
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


		$reviews = $this->Review->find('all', array('conditions' => array(
				'author_id' => $user['User']['id']
			)));

		$userWines = $user['WineCellar'];
		$userRWines = $user['R_Cellar'];

		$datas = [];

		foreach ($userWines as $key => $wine) {
			if(!array_key_exists($wine['id'], $datas)) {
				$datas[$wine['id']]['wine'] = $wine;
			}
		}

		foreach ($userRWines as $key => $userRWine) {
			if(!array_key_exists('vintages', $datas[$userRWine['wine_id']])) {
				$datas[$userRWine['wine_id']]['vintages'] = array();
			}

			if(!array_key_exists('reviews', $datas[$userRWine['wine_id']])) {
				$datas[$userRWine['wine_id']]['reviews'] = array();
			}

			if(array_key_exists($userRWine['vintage'], $datas[$userRWine['wine_id']]['vintages'])) {
				$datas[$userRWine['wine_id']]['vintages'][$userRWine['vintage']] += $userRWine['qty'];
			}
			else {
				$datas[$userRWine['wine_id']]['vintages'][$userRWine['vintage']] = $userRWine['qty'];
			}
		}
		// supression des vins ou qty == 0
		foreach ($datas as $key => $value) {
			if(count($value['vintages']) <= 0) {
				unset($datas[$key]);
			}
			else {
				$qty = 0;
				foreach ($datas[$key]['vintages'] as $vintage => $qtyVintage) {
					if($qtyVintage <= 0) {
						unset($datas[$key]['vintages'][$vintage]);
					}
					else {
						$qty += $qtyVintage;
					}
				}
				if($qty == 0) {
					unset($datas[$key]);
				}
			}
		}

		// ajout des notes
		foreach ($reviews as $key => $review) {
			if(array_key_exists($review['Review']['wine_id'], $datas)) {
				if(!array_key_exists('reviews', $datas[$review['Review']['wine_id']])) {
					$datas[$review['Review']['id']]['reviews'] = array();
				}
				$datas[$review['Review']['wine_id']]['reviews'][] = $review;
			}
		}



		$this->set(compact('user', 'datas'));
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
				$user = $this->Auth->user();
				if($user['valid'] == 1){
	            	return $this->redirect(array('controller' => 'compte', 'action' => 'feeds'));
	        	} else {
	        		$this->Session->setFlash('Veuillez valider votre adresse mail.', 'default', array("class" => "alert alert-danger"));
	        		$this->Auth->logout();
	        	}
	        } else {
	            $this->Session->setFlash('Adresse email ou mot de passe incorrect', 'default', array("class" => "alert alert-danger"));
	        }
		}
		$this->render('/users/login');	
	}

	public function signin() {
		if($this->request->is("post")){
			$this->User->set($this->request->data);

			if($this->User->validates()){
				$user = $this->request->data["User"];
				$code = uniqid();
				$info = array_merge($user, array("code" => $code));
				$this->User->create($info);
				$this->User->save();

				$Email = new CakeEmail();
				$Email->emailFormat('html');
				$Email->from(array('lucnotsand@gmail.com' => 'WineLovers'));
				$Email->to($user["email"]);
				$Email->subject("Confirmation d'inscription");
				$Email->send('Bonjour '.$user["firstname"].'<br/><br/>Pour valider votre compte, cliquez sur le lien suivant :<br/>
	<a href="'.Router::url(array('controller' => 'users', 'action' => 'validation', 'code' => $code), true).'">'.Router::url(array('controller' => 'users', 'action' => 'validation', 'code' => $code), true).'</a>');

				$this->Session->setFlash('Un email vous a été envoyé pour valider votre compte !');
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

			$this->User->create(array("valid" => 1, "pseudo" => $pseudo, "firstname" => $data['firstname'], "lastname" => $data['name'], "email" => $data['email'], "facebookid" => $data['fbID']));
			$this->User->save();
		}

		$user = $this->User->findByEmail($data['email']);
		$this->Auth->login($user['User']);
	   	exit;	
	}

	public function validation (){
		$user = $this->User->findByCode($this->request->params["code"]);
		$this->User->id = $user["User"]["id"];
		$this->User->saveField('valid', '1');
		$this->Session->setFlash('Votre compte est validé.');
		$this->redirect(array('controller' => 'users', 'action' => 'login'));
	}
}
