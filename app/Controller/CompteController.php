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
	public $uses = array('User', 'Wine', 'UserRFriendship', 'Post', 'Comment', 'UserRCellar', 'UserRWishlist', 'UserRFriendshipRequest', 'Review', 'Event', 'News', 'EventRGuest', 'EventRLike');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function feeds() {
		$user = $this->User->findById($this->user['id']);

		$conditions = array('OR' => array());
	
		// ajout des amis
		foreach ($user['UserFriendship'] as $key => $friend) {
			array_push($conditions['OR'], array(
					'AND' => array(
		                    'News.link_object' => 'User',
		                    'News.link_id' => $friend['id']
		                )
				));
		}

		// ajout de soi meme
		array_push($conditions['OR'], array(
					'AND' => array(
		                    'News.link_object' => 'User',
		                    'News.link_id' => $this->user['id']
		                )
				));

		// ajout des vins
		foreach ($user['WineCellar'] as $key => $wine) {
			array_push($conditions['OR'], array(
					'AND' => array(
		                    'News.link_object' => 'Wine',
		                    'News.link_id' => $wine['id']
		                )
				));
		}

		// ajout des events
		foreach ($user['JoinedEvent'] as $key => $event) {
			array_push($conditions['OR'], array(
					'AND' => array(
		                    'News.link_object' => 'Event',
		                    'News.link_id' => $event['id']
		                )
				));
		}

		parent::getNews('User', $user, $conditions);
		$this->render('/compte/feeds');
		
	}

	public function settings() {
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
		$this->render('/compte/settings');
		
	}

	public function friends() {
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
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

		$this->set(compact('user', 'datas', 'wines'));
		$this->render('/compte/cellar');
		
	}

	public function wishlist() {
		$user = $this->User->findById($this->user['id']);
		$wines = $this->Wine->find('all', array('limit' => 20));
		$this->set(compact('user', 'wines'));
		$this->render('/compte/wishlist');
		
	}

	public function events() {
		$user = $this->User->findById($this->user['id']);
		$this->set(compact('user'));
		$this->render('/compte/events');
		
	}

	public function update() {
		$data = $this->request->data;
		$this->User->id = $this->user['id'];
		if(!empty($data['email']))
			$this->User->saveField('email', $data['email']);

		if(!empty($data['password']))
			$this->User->saveField('password', $data['password']);

		if(!empty($data['firstname']))
			$this->User->saveField('firstname', $data['firstname']);

		if(!empty($data['lastname']))
			$this->User->saveField('lastname', $data['lastname']);

		if(!empty($data['address']))
			$this->User->saveField('address', $data['address']);

		if(!empty($data['description']))
			$this->User->saveField('description', $data['description']);

		if(!empty($_FILES['image']['name'])) {
			$uniqId = uniqid();
			$image = 'user_'.$uniqId.strrchr($_FILES['image']['name'], '.');
			$this->User->saveField('image', $image);
			$image = parent::uploadFile($_FILES['image'], 'user_'.$uniqId);
			if($image) {
	        	$this->Session->setFlash('Image uploadée', 'default', array("class" => "alert alert-success"));
				$this->Wine->read(null, $this->Wine->id);
				$this->redirect(array("controller" => "compte", "action" => "settings"));
			}
			else {
	        	$this->Session->setFlash('Echec de l\'upload de l\'image', 'default', array("class" => "alert alert-danger"));
				$this->Wine->read(null, $this->Wine->id);
				$this->redirect(array("controller" => "compte", "action" => "settings"));
			}
		}
	        	$this->Session->setFlash('Informations sauvegardées', 'default', array("class" => "alert alert-success"));
		$this->redirect(array("controller" => "compte", "action" => "settings"));
	}

	public function addFriend() {
		$this->UserRFriendship->save(array('user_id' => $this->user['id'], 'friend_id' => $this->request['data']['id']));
		$this->UserRFriendship->create();
		$this->UserRFriendship->save(array('user_id' => $this->request['data']['id'], 'friend_id' => $this->user['id']));
		$remove = $this->UserRFriendshipRequest->find('first', array(
				'conditions' => array('user_id' => $this->request['data']['id'], 'friend_id' => $this->user['id'])
			));
		$this->UserRFriendshipRequest->delete($remove['UserRFriendshipRequest']['id']);


		

		
		$this->set(array('friend' => $this->User->findById($this->request['data']['id'])));
		$this->render('/compte/addfriend');
	}

	public function addNote() {
		$this->Review->save(array('author_id' => $this->user['id'], 'note' => $this->request['data']['note'], 'comment' => $this->request['data']['comment'], 'wine_id' => $this->request['data']['wineId'], 'vintage' => $this->request['data']['vintage']));
		exit();
	}

	public function addFriendRequest() {
		$this->UserRFriendshipRequest->save(array('user_id' => $this->user['id'], 'friend_id' => $this->request['data']['id']));
		exit();
	}

	public function addWishlistWine() {
		if(array_key_exists('ids', $this->request['data'])) {
			$ids = array_values(array_filter(explode(':', $this->request['data']['ids'])));
			foreach ($ids as $key => $id) {
				$this->UserRWishlist->create();
				$this->UserRWishlist->save(array('user_id' => $this->user['id'], 'wine_id' => $id));
			}
			exit();
		}

		$this->UserRWishlist->save(array('user_id' => $this->user['id'], 'wine_id' => $this->request['data']['id']));
		exit();
	}

	public function addEvent() {
		$this->Event->save(array(
				'author_id' => $this->user['id'],
				'private' => $this->request['data']['privacy'],
				'where' => $this->request['data']['where'],
				'date' => $this->request['data']['date'],
				'description' => $this->request['data']['desc'],
				'name' => $this->request['data']['name'],
			));
		$this->EventRGuest->save(array('event_id' => $this->Event->id, 'user_id' => $this->user['id']));
		exit();
	}

	public function addCellarWine() {
		$ids = array_values(array_filter(explode(':', $this->request['data']['ids'])));
		$qtys = array_values(array_filter(explode(':', $this->request['data']['qtys'])));
		$millesimes = array_values(array_filter(explode(':', $this->request['data']['millesimes'])));

		foreach ($ids as $key => $id) {
			$this->UserRCellar->create();
			$this->UserRCellar->save(array('user_id' => $this->user['id'], 'wine_id' => $id, 'qty' => $qtys[$key], 'vintage' => $millesimes[$key]));

			// news pour le vin
			$this->News->save(array(
				'link_id' => $id,
				'link_object' => 'Wine',
				'type' => 'wine_add',
				'msg' => '',
				'attach_wine_id' => $id,
				'author_user_id' => $this->user['id'],
			));
			$this->News->create();

			// news pour l'utilisateur
			$this->News->save(array(
				'link_id' => $this->user['id'],
				'link_object' => 'User',
				'type' => 'wine_add',
				'msg' => '',
				'attach_wine_id' => $id,
				'author_user_id' => $this->user['id'],
			));
			$this->News->create();

		}

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

	public function removeFriendRequest() {
		$rFriendshipRequest = $this->UserRFriendshipRequest->find('first', array(
				'conditions' => array('user_id' => $this->user['id'], 'friend_id' => $this->request['data']['id'])
			));
		$this->UserRFriendshipRequest->delete($rFriendshipRequest['UserRFriendshipRequest']['id']);
		exit();
	}



	public function joinEvent() {
		$this->EventRGuest->save(array('event_id' => $this->request['data']['id'], 'user_id' => $this->user['id']));

		// news pour l'event
		$this->News->save(array(
				'link_id' => $this->request['data']['id'],
				'link_object' => 'Event',
				'type' => 'event_join',
				'msg' => '',
				'attach_event_id' => $this->request['data']['id'],
				'author_user_id' => $this->user['id'],
			));

		$this->News->create();

		// news pour l'utilisateur
		$this->News->save(array(
				'link_id' => $this->user['id'],
				'link_object' => 'User',
				'type' => 'event_join',
				'msg' => '',
				'attach_event_id' => $this->request['data']['id'],
				'author_user_id' => $this->user['id'],
			));


		exit();
	}

	public function leaveEvent() {
		$rEventRGuest = $this->EventRGuest->find('first', array(
				'conditions' => array('EventRGuest.user_id' => $this->user['id'], 'event_id' => $this->request['data']['id'])
			));
		$this->EventRGuest->delete($rEventRGuest['EventRGuest']['id']);
		exit();
	}

	public function likeEvent() {
		$this->EventRLike->save(array('event_id' => $this->request['data']['id'], 'user_id' => $this->user['id']));
		exit();
	}

	public function dislikeEvent() {
		$rEventRLike = $this->EventRLike->find('first', array(
				'conditions' => array('EventRLike.user_id' => $this->user['id'], 'event_id' => $this->request['data']['id'])
			));
		$this->EventRLike->delete($rEventRLike['EventRLike']['id']);
		exit();
	}
}
