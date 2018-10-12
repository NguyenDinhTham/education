<?php

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class BaseController extends Controller {

    public function beforeFilter() {
        $this->set('authUser', $this->authUser());

        //Get param language
        $lang = isset($this->params->query['lang']) ? $this->params->query['lang'] : '';
        if ($lang) {
            $this->Session->write('Lang.Key', $lang);
            Configure::write('Config.language', $lang);
        }

        if ($this->Session->check('Lang.Key')) {
            Configure::write('Config.language', $this->Session->read('Lang.Key'));
            $langKey = $this->Session->read('Lang.Key');
        } else {
            Configure::write('Config.language', DEFAULT_LANGUAGE);
            $langKey = DEFAULT_LANGUAGE;
        }
        $this->set('language', $langKey);
    }

    public function beforeRender() {
        $controller = $this->params->controller;
        $action = $this->params->action;
        $this->set('controller', $controller);
        $this->set('action', $action);
    }

    public function authUser() {
        return $this->Session->read('Auth.User');
    }

    public function apiJsonResponse($data = array()) {

        return $this->response->body(json_encode($data));
    }

    public function _curl($url, $postFields, $auth = null, $token = null) {
        $url = URL_API.$url;
        // PHP cURL  for https connection with auth
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        if($token) {
            $authenticate = array('Authorization: Bearer '.$token);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $authenticate);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        if ($auth) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth); // username and password - declared at the top of the doc. Ex: user:pass
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        }

        $response = curl_exec($ch);
        if($response === false) {
            echo 'Curl error: ' . curl_error($ch);die;
        }

        // Close handle
        curl_close($ch);

        return $response;
    }

}