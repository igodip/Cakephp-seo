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
	public $scaffold;

    public function sitemap(){

        $this->layout = 'xml';

        $result = $this->SeoUrl->find('all');
        $this->set('urls',$result);

        $this->RequestHandler->respondAs('xml');
    }
}
