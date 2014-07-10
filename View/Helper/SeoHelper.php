<?php
/**
 * Created by PhpStorm.
 * User: mw
 * Date: 10/07/14
 * Time: 20.52
 */
App::uses('AppHelper', 'View/Helper');

class SeoHelper extends AppHelper {

    public function __construct(View $view,$settings = array()){
        parent::__construct($view, $settings);

    }

    public function description(){
        if(isset($this->settings['description']) && strlen($this->settings['description']) != 0){
            return '<meta name="description" content="'.$this->settings['description'].'" />';
        }

    }

    public function keywords(){
        if(isset($this->settings['keywords']) && strlen($this->settings['keywords']) != 0){
            return '<meta name="keywords" content="'.$this->settings['keywords'].'" />';
        }
    }

}