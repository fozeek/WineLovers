<?php

class PostsController extends AppController
{

	public $uses = array('Post', 'Comment', 'Wine', 'User', 'Event', 'News');

	public function createPost() {
		$data = array(
				'author_id' => $this->user['id'], 
				'link_id' => $this->request['data']['link_id'],
				'link_object' => $this->request['data']['link_object'],
				'text' => $this->request['data']['text'],
				'link_'.strtolower($this->request['data']['link_object']).'_id' => $this->request['data']['link_id']
			);
		$attachObject = $this->request['data']['attach_object'];
		$attachId = $this->request['data']['attach_id'];
		if($attachObject != '') {
			$data['attach_'.$attachObject.'_id'] = intval($attachId);
		}
		$this->Post->save($data);

		$this->News->save(array(

				'link_id' => $this->request['data']['link_id'],
				'link_object' => $this->request['data']['link_object'],
				'type' => 'post',
				'msg' => '',
				'attach_post_id' => $this->Post->id,
				'author_user_id' => $this->user['id'],


			));

		$post = $this->Post->find('all', array(
				'contain' => array(
                    'AttachWine' => array(
                    		'Cellars',
                    		'Wishlists'
                    	),
                    'AttachEvent' => array(
                            'Guest',
                            'Like'
                        ),
                    'AttachUser' => array(
                            'UserFriendship',
                            'WineCellar',
                            'JoinedEvent'
                        ),
                    'Author',
                    'Comment' => array(
                            'Author'
                        ),
                    'ToWine',
                    'ToEvent',
                    'ToUser',
                ),
                'conditions' => array(
                        'Post.id' => $this->Post->id,
                    ),
			));
		$this->set(compact('post'));
	}

	public function commentPost() {
		$data = array(
				'author_id' => $this->user['id'], 
				'post_id' => $this->request['data']['post_id'],
				'text' => $this->request['data']['text']
			);
		$this->Comment->save($data);
		$comment = $this->Comment->findById($this->Comment->id);
		$author = $comment['Author'];
		$comment = $comment['Comment'];
		$comment['Author'] = $author;
		$this->set(compact('comment'));
	}

	public function morePosts() {
		$object = $this->request['data']['object'];
		$id = $this->request['data']['id'];
		$conditions = $this->request['data']['conditions'];

		if(!empty($conditions)) {
			$conditions = json_decode($conditions, true);
		}
		else {
			$conditions = array(
                    'News.link_object' => $object,
                    'News.link_id' => $id
                );
		}

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
                'page' => $this->request['data']['page']
            )));
	}

	public function moreWines() {
		$options = array('limit' => 20, 'page' => $this->request['data']['page']);
		if($this->request['data']['value'] !== '') {
			$options['conditions'] = array('Wine.name LIKE' => '%'.$this->request['data']['value'].'%');
		}
        $wines = $this->Wine->find('all', $options);
        $this->set('winesPosts', $wines);
        if(array_key_exists('ids', $this->request['data'])) {
        	$this->set('ids', $this->request['data']['ids']);
        }
	}

	public function moreFriends() {
		$friends = $this->User->findById($this->user['id']);
		$friends = $friends['UserFriendship'];
		$friendsPosts = array();
		if($this->request['data']['value'] !== '') {
			foreach ($friends as $key => $friend) {
				if(preg_match('/'.$this->request['data']['value'].'/i', $friend['name'])) {
					$friendsPosts[] = $friend;
				}
			}
		}
		else {
			$friendsPosts = $friends;
		}
        $friends = array_slice($friends, 20*($this->request['data']['page']-1), 20);
        $this->set('friendsPosts', $friendsPosts);
	}

	public function moreEvents() {
		$options = array('limit' => 20, 'page' => $this->request['data']['page']);
		if($this->request['data']['value'] !== '') {
			$options['conditions'] = array('Event.name LIKE' => '%'.$this->request['data']['value'].'%');
		}
		$events = $this->Event->find('all', $options);
        $this->set('eventsPosts', $events);
	}

}