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
	public $uses = array('User', 'Wine', 'UserRFriendship', 'Post', 'Comment', 'UserRCellar', 'UserRWishlist');

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
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
		$this->render('/compte/settings');
		
	}

	public function friends() {

		$this->render('/compte/friends');
		
	}

	public function calendar() {
		$this->render('/compte/calendar');
	}

	public function stats() {
		$this->render('/compte/stats');
	}

	public function cellar() {
		$user = $this->User->findById($this->user['id']);
		$wines = $this->Wine->find('all', array('limit' => 20));
		$this->set(compact('user', 'wines'));
		$this->render('/compte/cellar');
		
	}

	public function wishlist() {
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
		$this->render('/compte/wishlist');
		
	}

	public function events() {
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
		$this->render('/compte/events');
		
	}

	public function profil() {
		$this->render('/compte/profil');
	}

	public function addFriend() {
		$this->UserRFriendship->save(array('user_id' => $this->user['id'], 'friend_id' => $this->request['data']['id']));
		exit();
	}

	public function addWishlistWine() {
		$this->UserRWishlist->save(array('user_id' => $this->user['id'], 'wine_id' => $this->request['data']['id']));
		exit();
	}

	public function addCellarWine() {
		$this->UserRCellar->save(array('user_id' => $this->user['id'], 'wine_id' => $this->request['data']['id']));
		exit();
	}

	public function removeWishlistWine() {
		$rWishlist = $this->UserRWishlist->find('first', array(
				'conditions' => array('UserRWishlist.user_id' => $this->user['id'], 'wine_id' => $this->request['data']['id'])
			));
		$this->UserRWishlist->delete($rWishlist['UserRWishlist']['id']);
		exit();
	}

	public function removeCellarWine() {
		$rWishlist = $this->UserRCellar->find('first', array(
				'conditions' => array('UserRCellar.user_id' => $this->user['id'], 'wine_id' => $this->request['data']['id'])
			));
		$this->UserRCellar->delete($rWishlist['UserRCellar']['id']);
		exit();
	}

	public function removeFriend() {
		$rFriendship = $this->UserRFriendship->find('first', array(
				'conditions' => array('UserRFriendship.user_id' => $this->user['id'], 'friend_id' => $this->request['data']['id'])
			));
		$this->UserRFriendship->delete($rFriendship['UserRFriendship']['id']);
		exit();
	}
}
