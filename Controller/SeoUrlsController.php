<?php
App::uses('SeoAppController', 'Seo.Controller');
/**
 * SeoUrls Controller
 *
 */
class SeoUrlsController extends SeoAppController {
/**
 * Components
 * 
 * @var mixed
 */
	public $components = array('RequestHandler');
/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';
/**
 * beforeFilter
 */
	public function beforeFilter(){
		parent::beforeFilter();
		
		if(strcmp($this->action,'show') == 0 ){
			$this->RequestHandler->setContent('xml');
		}
		
	}
/**
 * show
 * 
 * Show the sitemap!
 * 
 */
	public function show(){
		/**
		 * Empty Layout
		 */
		$this->layout = 'Seo.xml';
		
		$this->set('urls',$this->SeoUrl->find('all'));
		
	}
	
}
