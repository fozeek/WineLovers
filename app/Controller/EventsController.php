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
class EventsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Event', 'User', 'Post', 'Wine', 'News', 'EventRGuest');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	private function testEvent($event) {
		$user = $this->User->findById($this->user['id']);
		$bool = false;
		foreach ($user['JoinedEvent'] as $joinedEvent) {
			if($joinedEvent['id'] == $event['Event']['id']) {
				$bool = true;
				break;
			}
		}
		$this->set('isJoined', $bool);
		$bool = false;
		foreach ($user['LikedEvent'] as $likedEvent) {
			if($likedEvent['id'] == $event['Event']['id']) {
				$bool = true;
				break;
			}
		}
		$this->set('isLiked', $bool);
	}


	public function index() {
		$events = $this->Event->find('all');
		$this->set(compact('events'));
		$this->render('/events/index');
		
	}

	public function feeds() {
		$event = $this->Event->findBySlug($this->request->params['name']);
		parent::getNews('Event', $event);
		$this->testEvent($event);
		$this->set(compact('event'));
		$this->render('/events/feeds');
		
	}

	public function about() {
		$event = $this->Event->findBySlug($this->request->params['name']);
		$this->set(compact('event'));
		$this->testEvent($event);
		$this->render('/events/about');
		
	}

	public function guests() {
		$users = $this->User->find('all', array('limit' => 8));
		$event = $this->Event->findBySlug($this->request->params['name']);
		$this->set(compact('event', 'users'));
		$this->testEvent($event);
		$this->render('/events/guests');
		
	}

	public function medias() {
		$event = $this->Event->findBySlug($this->request->params['name']);
		$this->set(compact('event'));
		$this->testEvent($event);
		$this->render('/events/medias');
		
	}

	public function settings() {
		$event = $this->Event->findBySlug($this->request->params['name']);
		$this->set(compact('event'));
		$this->testEvent($event);
		$this->render('/events/settings');
		
	}

	public function likes() {
		$event = $this->Event->findBySlug($this->request->params['name']);
		$this->set(compact('event'));
		$this->testEvent($event);
		$this->render('/events/likes');
		
	}

	public function create() {
		$this->Event->save(array(
			'author_id' => $this->user['id'],
			'name' => $this->request['data']['name'],
			'date' => $this->request['data']['date'],
			'description' => $this->request['data']['description'],
			'where' => $this->request['data']['where'],
		));
		$this->render('/events/create');
	}
}
