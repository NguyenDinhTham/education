<?php

class ErrorsController extends Controller{

    public function beforeFilter() {
        $this->layout = 'my_error';
    }

    public function error404() {

    }

}