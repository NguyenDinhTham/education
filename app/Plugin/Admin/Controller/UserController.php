<?php

App::uses('Controller', 'Controller');

class UserController extends AdminAppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow();
    }

    public function index() {

    }

    public function edit($id) {
        $this->set('contentHeader', __('Chỉnh sửa'));

        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('Khách hàng'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'user', 'action' => 'index'])
        ];
        $breadcrumb[] = [
            'name' => __('Chỉnh sửa'),
        ];
        $this->set('breadcrumb', $breadcrumb);
    }

    public function add() {
        $this->set('contentHeader', __('Thêm mới'));

        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('Khách hàng'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'user', 'action' => 'index'])
        ];
        $breadcrumb[] = [
            'name' => __('Thêm mới'),
        ];
        $this->set('breadcrumb', $breadcrumb);
    }
}