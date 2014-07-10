<?php
App::uses('SeoAppController', 'Seo.Controller');
/**
 * RobotTxtControllers Controller
 *
 */
class RobotTxtController extends SeoAppController {

    public $components = array('RequestHandler');

    public function show(){

        $this->layout = 'txt';
        $this->RequestHandler->respondAs('txt');
    }

}
