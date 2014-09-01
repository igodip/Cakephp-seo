<?php
App::uses('Component','Controller');

class SeoComponent extends Component {

    public function startup(Controller $controller){
        $controller->helpers = array_merge($controller->helpers,array('Seo.Seo'));
    }

    public function beforeRender(Controller $controller){

        $url = $controller->request->here;
		
		//Admin check
		if (isset($controller->params['prefix']) && $controller->params['prefix'] == 'admin') {
			return;
		}
		
		if(strcmp($controller->name,'CakeError') == 0){
			return;
		}
		
		if(strcmp($url, '/sitemap.xml') == 0){
			return;
		}
		
		if(strcmp($url, '/robots.txt') == 0){
			return;
		}
		
        $this->SeoUrl = ClassRegistry::init('SeoUrl');

        $result = $this->SeoUrl->find('first',array('conditions' => array('SeoUrl.url' => $url )));

        if($result == null){

            $this->SeoUrl->read(null, null);
            $this->SeoUrl->set('url', $url);
            $this->SeoUrl->save();

        }else{
            //$controller->helpers[set('seo_keywords',$result['SeoUrl']['keywords']);
            $controller->helpers['Seo.Seo'] = $result['SeoUrl'];
        }

    }
}