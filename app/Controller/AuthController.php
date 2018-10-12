<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class AuthController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'RequestHandler');
    var $uses = array();

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('login', 'logout', 'signup');
    }

    public function login() {
        $this->set('title_for_layout', __('Page Login'));

        $authUser = $this->Session->read('Auth.User');
        if($authUser){

            if($authUser['is_admin'] == IS_ADMIN) {

                return $this->redirect(Configure::read('REDIRECT_ADMIN'));

            } else {

                return $this->redirect(Configure::read('REDIRECT_USER'));

            }

        }

        if ($this->request->is('post')) {

            $params = $this->request->data['User'];
            $params['app_id'] = APP_ID_DEFAULT;
            $url = 'RealEstateApi/signIn?access_token='.ACCESS_TOKEN;
            $result = json_decode($this->_curl($url, $params), true);
            if ($result['success']) {
                $userInfo = $result['profile'];
                $this->Session->write('Auth.User', $userInfo);

                $authUser = $this->Session->read('Auth.User');

                if($authUser['is_admin'] == IS_ADMIN) {

                    return $this->redirect(Configure::read('REDIRECT_ADMIN'));

                } else {

                    return $this->redirect(Configure::read('REDIRECT_USER'));

                }

            } else {

                $message = isset($result['error']) ? $result['error'] : '';
                $this->Session->setFlash($message, 'flash_alert');
                return $this->redirect($this->Auth->loginAction);

            }

        }
    }

    public function signup() {

        if ($this->request->is('post')) {
            $email = $this->request->data['User']['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $this->Session->setFlash(__('Invalid email'), 'flash_alert');

            } else {

                if (!isset($this->request->data['g-recaptcha-response']) || $this->request->data['g-recaptcha-response'] == null || $this->request->data['g-recaptcha-response'] == '') {

                    $this->Session->setFlash(__('Captcha is incorrect!'), 'flash_alert');

                } else {

                    $this->request->data['User']['status'] = 1;
                    $this->User->create();

                    if ($this->User->validates($this->request->data)) {

                        if ($this->User->save($this->request->data, true)) {

                            $this->Session->setFlash(__('Your account has been created successful!'), 'flash_success');
                            return $this->redirect(['controller' => 'test', 'action' => 'index']);

                        } else {

                            //$this->Session->setFlash(__('Invalid username or password, try again'), 'flash_alert');
                            foreach ($this->User->validationErrors as $error) {
                                $this->Session->setFlash(__($error[0]), 'flash_alert');
                            }

                        }

                    } else {
                        foreach ($this->User->validationErrors as $error) {
                            $this->Session->setFlash(__($error[0]), 'flash_alert');
                        }

                    }
                }
            }

            $this->set('user', $this->request->data['User']);
        } else {
            $authUser = $this->Session->read('Auth.User');

            if(isset($authUser) && count($authUser) > 0){

                if($authUser['is_admin'] == IS_ADMIN) {

                    return $this->redirect(array('plugin' => 'admin', 'controller' => 'user', 'action' => 'index'));

                } else {

                    return $this->redirect(array('plugin' => 'admin', 'controller' => 'user', 'action' => 'index'));

                }

            }
        }

        $this->set('aselected', 6);
    }

    public function logout() {
        echo 123;die;
        $this->Session->destroy();

        return $this->redirect($this->Auth->logout());
    }

}