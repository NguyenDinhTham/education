<?php

App::uses('Controller', 'Controller');

class ProductsController extends AdminAppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow();
    }

    public function index() {

        $this->set('contentHeader', __('List Product'));
        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('List of Product'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'Products', 'action' => 'index'])
        ];
        $this->set('breadcrumb', $breadcrumb);
        $this->set('activeMenu', 'product');

        if($this->request->is('ajax')) {
            $this->autoRender = false;
            $params = $this->request->query;

            $searchValue = isset($params['search']['value']) ? $params['search']['value'] : '';
            $fieldOrder = $params["columns"][$params["order"][0]["column"]]["name"];
            $orderType = $params["order"][0]["dir"];

            $params = [
                'search_value' => $searchValue,
                'order' => $fieldOrder,
                'dir' => $orderType,
                'length' => $params['length'],
                'start' => $params['start']
            ];

            $url = 'RealEstateApi/getProductListOfShop/'.APP_ID_DEFAULT;
            $result = $this->_curl($url, $params);
            return $result;
        }
    }

    public function edit($id) {
        $this->set('contentHeader', __('Edit'));

        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('Product'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'Products', 'action' => 'index'])
        ];
        $breadcrumb[] = [
            'name' => __('Edit'),
        ];
        $this->set('breadcrumb', $breadcrumb);
        $this->set('activeMenu', 'product');
    }

    public function add() {
        $this->set('contentHeader', __('Create'));

        $breadcrumb = $this->breadcrumb();
        $breadcrumb[] = [
            'name' => __('Product'),
            'url' => Router::url(['plugin' => 'admin', 'controller' => 'user', 'action' => 'index'])
        ];
        $breadcrumb[] = [
            'name' => __('Create'),
        ];
        $this->set('breadcrumb', $breadcrumb);
        $this->set('activeMenu', 'product');
    }
}