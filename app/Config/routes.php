<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
	Router::connect('/about', array('controller' => 'home', 'action' => 'about'));
	Router::connect('/contact', array('controller' => 'home', 'action' => 'contact'));

	Router::connect('/me', array('controller' => 'compte', 'action' => 'feeds'));
	Router::connect('/me/inbox', array('controller' => 'compte', 'action' => 'inbox'));
	Router::connect('/me/profil', array('controller' => 'compte', 'action' => 'profils'));
	Router::connect('/me/friends', array('controller' => 'compte', 'action' => 'friends'));
	Router::connect('/me/settings', array('controller' => 'compte', 'action' => 'settings'));
	Router::connect('/me/calendar', array('controller' => 'compte', 'action' => 'calendar'));
	Router::connect('/me/cellar', array('controller' => 'compte', 'action' => 'cellar'));
	Router::connect('/me/wishlist', array('controller' => 'compte', 'action' => 'wishlist'));

	Router::connect('/me/addFriend', array('controller' => 'compte', 'action' => 'addFriend'));
	Router::connect('/me/removeFriend', array('controller' => 'compte', 'action' => 'removeFriend'));
	Router::connect('/me/add-cellar-wine', array('controller' => 'compte', 'action' => 'addCellarWine'));
	Router::connect('/me/add-wishlist-wine', array('controller' => 'compte', 'action' => 'addWishlistWine'));
	Router::connect('/me/remove-cellar-wine', array('controller' => 'compte', 'action' => 'removeCellarWine'));
	Router::connect('/me/remove-wishlist-wine', array('controller' => 'compte', 'action' => 'removeWishlistWine'));

	Router::connect('/users', array('controller' => 'users', 'action' => 'index'));
	Router::connect('/user/:pseudo', array('controller' => 'users', 'action' => 'feeds'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/user/:pseudo/cellar', array('controller' => 'users', 'action' => 'cellar'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/user/:pseudo/friends', array('controller' => 'users', 'action' => 'friends'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/user/:pseudo/about', array('controller' => 'users', 'action' => 'about'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/user/:pseudo/events', array('controller' => 'users', 'action' => 'events'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/user/:pseudo/wishlist', array('controller' => 'users', 'action' => 'wishlist'), array('pseudo' => '[a-zA-Z0-9\-]+'));
	Router::connect('/signin', array('controller' => 'users', 'action' => 'signin'));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout', '[method]' => 'POST'));

	Router::connect('/wines', array('controller' => 'wines', 'action' => 'index'));
	Router::connect('/wine/:name', array('controller' => 'wines', 'action' => 'feeds'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/wine/:name/about', array('controller' => 'wines', 'action' => 'about'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/wine/:name/cellars', array('controller' => 'wines', 'action' => 'cellars'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/wine/:name/wishlists', array('controller' => 'wines', 'action' => 'wishlist'), array('name' => '[a-zA-Z0-9\-]+'));

	Router::connect('/events', array('controller' => 'events', 'action' => 'index'));
	Router::connect('/event/:name', array('controller' => 'events', 'action' => 'feeds'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/event/:name/about', array('controller' => 'events', 'action' => 'about'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/event/:name/guests', array('controller' => 'events', 'action' => 'guests'), array('name' => '[a-zA-Z0-9\-]+'));
	Router::connect('/event/:name/likes', array('controller' => 'events', 'action' => 'likes'), array('name' => '[a-zA-Z0-9\-]+'));


	Router::connect('/post/create-post', array('controller' => 'posts', 'action' => 'createPost'));
	Router::connect('/post/comment-post', array('controller' => 'posts', 'action' => 'commentPost'));
	Router::connect('/post/more-posts', array('controller' => 'posts', 'action' => 'morePosts'));
	Router::connect('/post/more-events', array('controller' => 'posts', 'action' => 'moreEvents'));
	Router::connect('/post/more-friends', array('controller' => 'posts', 'action' => 'moreFriends'));
	Router::connect('/post/more-wines', array('controller' => 'posts', 'action' => 'moreWines'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
