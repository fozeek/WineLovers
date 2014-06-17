<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $user = false;

	public $components = array('DebugKit.Toolbar', 'Session',
		'Auth' => array(
        	'authenticate' => array(
            	'Form' => array(
                	'fields' => array('username' => 'email', 'password' => 'password'),
               		'passwordHasher' => array('className' => 'Simple', 'hashType' => 'md5')
            	)
        	)
    ));

    public function beforeFilter() {
        parent::beforeFilter();

        $this->user = $this->Auth->user();
        $this->set(['auth' => $this->user]);
    }

    public function getNews($name, $object) {
        $page = (array_key_exists('page', $this->request->query)) ? $this->request->query["page"] : 1;
        $this->set('countPosts', $this->Post->find('count', array(
                'conditions' => array(
                        'Post.link_object' => $name,
                        'Post.link_id' => $object[$name]['id']
                    ),
            )));
        $this->set('pagePosts', $page);
        $friends = $this->User->findById($this->user['id']);
        $friends = array_slice($friends['UserFriendship'], 0, 20);
        $this->set('friendsPosts', $friends);
        $events = $this->Event->find('all', array('limit' => 20));
        $this->set('eventsPosts', $events);
        $wines = $this->Wine->find('all', array('limit' => 20));
        $this->set('winesPosts', $wines);
        $this->set('news', $this->News->find('all', array(
                'contain' => array(
                    'LinkPost' => array(
                        'AttachWine' => array(
                                'Cellars',
                                'Wishlists'
                            ),
                        'AttachEvent' => array(
                                'Guest',
                                'Like',
                            ),
                        'AttachUser' => array(
                                'UserFriendship',
                                'WineCellar',
                                'JoinedEvent'
                            ),
                        'ToWine',
                        'ToEvent',
                        'ToUser',
                        'Author',
                        'Comment' => array(
                                'Author'
                            )
                    ),
                    'LinkEvent' => array(
                            'Guest',
                            'Like',
                        ),
                    'LinkUser',
                    'LinkWine' => array(
                            'Cellars',
                            'Wishlists'
                        ),
                    'FromWine',
                    'FromEvent',
                    'FromUser',
                ),
                'conditions' => array(
                        'OR' => array(
                            'News.link_object' => $name,
                            'News.link_id' => $object[$name]['id']
                        )
                    ),
                'order' => array('News.created' => 'DESC'),
                'limit' => 10,
                'page' => $page
            )));
    }
	
}
