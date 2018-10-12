<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('BaseController', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 *
 *
 * @property	AppServiceComponent				$AppService
 * @property	AdminAppServiceComponent		$AdminAppService
 */
class AdminAppController extends BaseController {

    var $helpers = array('Html','Text','Session');
    var $uses    = array(
        'User',
    );

    public $components = array('Session',
        'AppService',
        'Admin.AdminAppService',
        'Paginator',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'auth',
                'action'     => 'login',
                'plugin'     => null
            ),
            'loginRedirect' => array(
                'controller' => 'pages',
                'action'     => 'home',
                'plugin'=> null
            ),
            'logoutRedirect' => array(
                'controller' => null,
                'action'     => '/',
                'plugin'=> null
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'username'),
                    'scope' => array('status' => 1)
                )
            )
        ));

    public function beforeFilter() {
        //$this->permission();

        parent::beforeFilter();

        $authUser = $this->authUser();
        if(!empty($authUser)) {

            /*if($authUser['is_admin'] != 1) {

                throw new UnauthorizedException("You are not authorized to access this page.");

            }*/

        }

    }

    function beforeRender() {
        parent::beforeRender();
    }

    public function pager($table, $page = '', $att = array(), $pager = '') {

        if(!$att) {
            $att = array(
                'order' => array('id' => 'desc')
            );
        }

        if(!$pager) {
            $pager = Configure::read('PAGER');
        }

        if(!$page) {
            $page = Configure::read('START_PAGE');
        }

        $att['limit'] = $pager;
        $att['page']  = $page;

        $this->Paginator->settings = $att;

        return $this->Paginator->paginate($table);

    }

    public function getSession() {
        return $this->Session;
    }

    public function setFlash($mess, $key = null, $type = 'default') {
        if($key) {
            $this->getSession()->setFlash($mess, $type, array(), $key);
        } else {
            $this->getSession()->setFlash($mess);
        }
    }

    public function permission() {
        $authUser = $this->authUser();
        if ($authUser) {
            $controller = strtolower($this->params->controller);
            $action = strtolower($this->params->action);

            $routeAll = $controller . '.*';
            $route = $controller . '.' . $action;

            $arrRole = Configure::read('PERMISSION')[$authUser['is_admin']];
            if (!in_array('all.*', $arrRole) && !in_array($routeAll, $arrRole) && !in_array($route, $arrRole)) {
                $this->Session->setFlash(__('You are not authorized to access this page.'), 'flash_alert');
                return $this->redirect('/error404');
            }
            return true;
        }
    }

    public function breadcrumb() {
        $arr = [
            [
                'name' => __('Home'),
                'url' => Router::url(['plugin' => '', 'controller' => 'admin', 'action' => ''])
            ]
        ];

        return $arr;
    }

    public function element($name, $data = array(), $opts = array()) {
        $view = new View($this, false);
        return $view->element($name, $data, $opts);
    }
}
