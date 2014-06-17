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
class WinesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Wine', 'User', 'Post', 'Event', 'Review', 'News');

	public $apiUrl = "http://api.wine-searcher.com/wine-select-api.lml?Xkey=bchxjn531137&Xformat=J&Xversion=5Y&Xcurrencycode=eur&Xlocation=fr";

	public $vintage = "&Xvintage=";
	public $wineName = "&Xwinename=";
	public $autoExpand = "&Xautoexpand=Y";
	public $keywordModeWineList = "&Xkeyword_mode=A";
	public $keywordModeWineNamesList = "&Xkeyword_mode=X";
	public $keywordModeWineListExcludeAuctions = "&Xkeyword_mode=U";
	public $keywordModeWineListAuctionsOnly = "&Xkeyword_mode=T";
	public $limit = "&Xwinecount=";

	public $widesearchClosest = "&Xwidesearch=N";
	public $widesearchStrict = "&Xwidesearch=Y";
	public $widesearchValuation = "&Xwidesearch=V";

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	private function testWine($wine) {
		$user = $this->User->findById($this->user['id']);
		$bool = false;
		foreach ($user['WineCellar'] as $wineCellar) {
			if($wineCellar['id'] == $wine['Wine']['id']) {
				$bool = true;
				break;
			}
		}
		$this->set('isInCellar', $bool);
		$bool = false;
		foreach ($user['WineWishlist'] as $wineWishlist) {
			if($wineWishlist['id'] == $wine['Wine']['id']) {
				$bool = true;
				break;
			}
		}
		$this->set('isInWishlist', $bool);
	}

	public function index() {
		//echo '<pre>';
		//var_dump(file_get_contents($this->apiUrl . $this->wineName . 'Yquem+Sauternes+Bordeaux+France' . $this->vintage . $this->limit . 5 . $this->autoExpand . $this->keywordModeWineList));
		//echo '</pre>';
		$wines = $this->Wine->find('all');
		$this->set(compact('wines'));
		$this->render('/wines/index');
	}

	public function feeds() {
		$wine = $this->Wine->findBySlug($this->request->params['name']);
		$this->testWine($wine);
		parent::getNews('Wine', $wine);
		$this->set(compact('wine', 'posts'));
		$this->render('/wines/feeds');
		
	}

	public function about() {
		$wine = $this->Wine->findBySlug($this->request->params['name']);
		$this->testWine($wine);
		$this->set(compact('wine'));
		$this->render('/wines/about');
	
	}

	public function testimonials() {
		$wine = $this->Wine->find('first', array(
                'contain' => array(
                    'Reviews' => array(
                    	'Wine',
                    	'Author',
                    ),
                ),
                'conditions' => array(
                        'Wine.slug' => $this->request->params['name'],
                    ),
            ));
	
		$this->testWine($wine);
		$this->set(compact('wine'));
		$this->render('/wines/testimonials');
	
	}

	public function cellars() {
		$wine = $this->Wine->findBySlug($this->request->params['name']);
		$this->testWine($wine);
		$this->set(compact('wine'));
		$this->render('/wines/cellars');
		
	}

	public function wishlist() {
		$wine = $this->Wine->findBySlug($this->request->params['name']);
		$this->testWine($wine);
		$this->set(compact('wine'));
		$this->render('/wines/wishlists');
		
	}
}
