<?php

App::uses('Controller', 'Controller');

class ShopsController extends AdminAppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow();
    }

    public function index() {

        $this->set('contentHeader', __('List Shop'));
        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('List of Shops'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'shops', 'action' => 'index'])
        ];
        $this->set('breadcrumb', $breadcrumb);
        $this->set('activeMenu', 'shop');


        if($this->request->is('ajax')) {
            $this->autoRender = false;
            $params = $this->request->query;

            $searchValue = isset($params['search']['value']) ? $params['search']['value'] : '';
            $fieldOrder = $params["columns"][$params["order"][0]["column"]]["name"];
            $orderType = $params["order"][0]["dir"];

            $params = [
                'app_id' => APP_ID_DEFAULT,
                'search_value' => $searchValue,
                'order' => $fieldOrder,
                'dir' => $orderType,
                'length' => $params['length'],
                'start' => $params['start']
            ];

            $url = 'RealEstateApi/getShopList';
            $result = $this->_curl($url, $params);
            return $result;
        }
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
        $this->set('activeMenu', 'shop');
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
        $this->set('activeMenu', 'shop');
    }
}