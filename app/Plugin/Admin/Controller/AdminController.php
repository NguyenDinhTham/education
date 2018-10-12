<?php

App::uses('Controller', 'Controller');

class AdminController extends AdminAppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow();
    }

    public function dashboard() {
        $this->set('contentHeader', __('Bảng điều khiển'));

        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('Bảng điều khiển'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'user', 'action' => 'index'])
        ];
        $this->set('breadcrumb', $breadcrumb);
    }
}