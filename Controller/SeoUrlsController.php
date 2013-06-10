<?php
App::uses('SeoAppController', 'Seo.Controller');
/**
 * SeoUrls Controller
 *
 */
class SeoUrlsController extends SeoAppController {

	public $components = array('RequestHandler');
/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';
/**
 * 
 */
	public function beforeFilter(){
		parent::beforeFilter();
		
		if($this->RequestHandler->accepts('xml')){
			$this->RequestHandler->setContent('xml');
		}
		
	}
/**
 * show
 * 
 */
	public function show(){
		/**
		 * FIXME: Error ...
		 */
		//$this->RequestHandler->setContent('xml');
		/**
		 * 
		 * @var unknown_type
		 */
		$this->layout = 'Seo.xml';
		$this->set('urls',$this->SeoUrl->find('all'));
		
	}
	
}
