<?php
App::uses('Component','Controller');

class SeoComponent extends Component {

    public function beforeRender(Controller $controller){

        $url = $controller->request->here;
        $this->SeoUrl = ClassRegistry::init('SeoUrl');

        $result = $this->SeoUrl->find('first',array('conditions' => array('SeoUrl.url' => $url )));

        if($result == null){

            $this->SeoUrl->read(null, null);
            $this->SeoUrl->set('url', $url);
            $this->SeoUrl->save();

        }else{
            $controller->set('seo_keywords',$result['SeoUrl']['keywords']);
            $controller->set('seo_description',$result['SeoUrl']['description']);
        }

    }
}