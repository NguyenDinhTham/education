<?php
/**
 * Created by thamd.
 * Date: 03/15/2018
 * Time: 03:01 PM
 */

App::uses('AppController', 'Controller');

class EducationController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow();
        $this->set('title_for_layout', __('Home Page'));
    }

    public function index() {

        $params = [
            'app_id' => APP_ID_DEFAULT,
            'user_name' => USER_NAME,
            'password' => PASS_WORD
        ];
        $url = 'RealEstateApi/getShopList';
        $result = json_decode($this->_curl($url, $params), true);

        $urlBrand = 'RealEstateApi/getShopList/'.APP_ID_DEFAULT;
        $resultBrand = json_decode($this->_curl($urlBrand, $params), true);;
        $listApartment = $result['data'];
//        $listBrand = $resultBrand['data'];
        $this->set('listApartment', $listApartment);
        $this->set('apartmentDefault', $listApartment ? $listApartment[0] : '');
//        $this->set('listBrand', $listBrand);
        $this->set('activeMenu', 'index');
    }

    public function about() {
        $this->set('activeMenu', 'about');
    }

    public function services() {
        $params = [
            'app_id' => APP_ID_DEFAULT,
            'user_name' => USER_NAME,
            'password' => PASS_WORD
        ];
        $url = 'RealEstateApi/getShopList';
        $result = json_decode($this->_curl($url, $params), true);
        $listApartment = $result['data'];

        $this->set('listApartment', $listApartment);
        $this->set('activeMenu', 'services');
    }

    public function gallery() {
        $this->set('activeMenu', 'gallery');
    }

    public function contact() {
        $this->set('activeMenu', 'contact');
    }

    public function single() {
        $this->set('activeMenu', 'single');
    }
}