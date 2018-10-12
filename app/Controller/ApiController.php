<?php

App::uses('AppController', 'Controller');

class ApiController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow();
    }


}