<?php

const DEFAULT_LANGUAGE = 'vie';
const LANG_VIE = 'vie';
const LANG_JPN = 'jpn';
const LANG_ENG = 'eng';

const GOOGLE_RECAPTCHA_API_KEY = '6LdxRTAUAAAAAMMYTfFr1jSfyKh02q1a--lslsau';

//Odder
const ORDER_ASC  = 'ASC';
const ORDER_DESC = 'DESC';

const STATUS_PENDING = 0;
const STATUS_ACTIVE = 1;
const STATUS_LOCKED = 3;

//User status
Configure::write('USER_STATUS_LIST', [
    STATUS_PENDING => 'Đang chờ', //Pending
    STATUS_ACTIVE => 'Hoạt động', //Active
    STATUS_LOCKED => 'Khóa' //Locked
]);

Configure::write('REDIRECT_ADMIN', array('plugin' => '', 'controller' => 'admin', 'action'));
Configure::write('REDIRECT_USER', array('plugin' => 'admin', 'controller' => 'shops', 'action' => 'index'));

const IS_USER = 0;
const IS_ADMIN = 1;

Configure::write('PERMISSION', [
    IS_USER => [
        'user.detail'
    ],
    IS_ADMIN => ['all.*']
]);

const MAX_FILE_SIZE_AVATAR = 250;

//Format image uploaded
const MAX_HEIGHT_SIZE = 500;
const MAX_WIDTH_SIZE = 500;
const IMAGE_RESIZE = 1024;

const URL_API = 'https://localhost/cms/mobile_module/';
//const URL_API = 'https://vtm-vn.com/mobile_module/';
const APP_ID_DEFAULT = 'LUXREALESTATE';
const USER_NAME = 'tuut@vtm.co.jp';
const PASS_WORD = 'vtm4test';
const ACCESS_TOKEN = 'f26cc4c73a4cb7e54abcdfe7a174f7304f01a8aac4719020c271490eeccb9b9e5625943b';
const GOOGLE_MAP_API_KEY = "AIzaSyA2WRtzfmB6fP0qdg9vUc-JlfTWlUQqQWY";

Configure::write('REDIRECT_ADMIN', array('plugin' => '', 'controller' => 'admin'));
Configure::write('REDIRECT_USER', array('plugin' => '', 'controller' => 'admin'));
