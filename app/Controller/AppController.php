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

    public function getNews($name, $object, $conditions = false) {
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


        if($conditions) {
            $conditions = $conditions;

            if(count($conditions['OR'])<=0)
            $conditions['OR'][] = array(
                    'News.link_object' => 'User',
                    'News.link_id' => 0
                );

            // array(
            //     'OR' => array(
            //         'AND' => array(
            //                 'News.link_object' => $name,
            //                 'News.link_id' => $object[$name]['id']
            //             ),
            //         'AND' => array(
            //                 'News.link_object' => $name,
            //                 'News.link_id' => $object[$name]['id']
            //             ),
            //         'AND' => array(
            //                 'News.link_object' => $name,
            //                 'News.link_id' => $object[$name]['id']
            //             ),
            //     )
            // ),
        }
        else {
            $conditions = array(
                'News.link_object' => $name,
                'News.link_id' => $object[$name]['id']
            );
        }

        

        $this->set('conditions', $conditions);

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
    
                'conditions' => $conditions,
                'order' => array('News.created' => 'DESC'),
                'limit' => 10,
                'page' => $page
            )));
    }

    public function uploadFile($data, $name) {
        $dossier = 'img/upload/';
        $fichier = basename($data['name']);
        $taille_maxi = 100000000;
        $taille = filesize($data['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($data['name'], '.'); 
        
        //Début des vérifications de sécurité...
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
             $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
        }
        if($taille>$taille_maxi)
        {
             $erreur = 'Le fichier est trop gros...';
        }
        if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
             if(move_uploaded_file($data['tmp_name'], $dossier . $name . $extension)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
             {
                  return true;
             }
             else //Sinon (la fonction renvoie FALSE).
             {
                return false;
             }
        }
        else
        {
             return false;
        }
    }
	
}
