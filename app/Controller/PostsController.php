<?php

class PostsController extends AppController
{

	public $uses = array('Post', 'Comment', 'Wine', 'User', 'Event');

	public function createPost() {
		$data = array(
				'author_id' => $this->user['id'], 
				'link_id' => $this->request['data']['link_id'],
				'link_object' => $this->request['data']['link_object'],
				'text' => $this->request['data']['text']
			);
		$attachObject = $this->request['data']['attach_object'];
		$attachId = $this->request['data']['attach_id'];
		if($attachObject != '') {
			$data['attach_'.$attachObject.'_id'] = intval($attachId);
		}
		$this->Post->save($data);
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
                        )
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
		$posts = $this->Post->find('all', array(
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
                        )
                ),
                'conditions' => array(
                        'Post.link_object' => $object,
                        'Post.link_id' => $id
                    ),
                'order' => array('Post.created' => 'DESC'),
                'limit' => 10,
                'page' => $this->request['data']['page']
            ));
		$this->set(compact('posts'));
	}

}