<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('BaseController', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @property    Contact     $Contact
 * @property    User        $User
 * @property    Role        $role
 *
 * @property    AppServiceComponent        $AppService
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends BaseController {

    var $helpers = array('Html','Text','Session');
    var $uses    = array(
        'User',
        'role',
        'Contact'
    );

    public $components = array('RequestHandler',
        'AppService',
        'Session',
        'Cookie',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'auth',
                'action'     => 'login',
                'plugin'     => null
            ),
            'loginRedirect' => array(
                'controller' => 'test',
                'action'     => 'index',
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
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();

        $this->set('authUser', $this->authUser());
    }

    public function beforeRender() {
        parent::beforeRender();
    }

}
