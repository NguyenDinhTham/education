<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {

    public function pickCurrentURL(){
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
            $url = "https://";
        }else{
            $url = "http://";
        }
        $url .= $_SERVER['SERVER_NAME'];
        if($_SERVER['SERVER_PORT'] != 80){
            $url .= ":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }else{
            $url .= $_SERVER["REQUEST_URI"];
        }
        $uri_parts = explode('?', $url, 2);

        return $uri_parts[0];
    }

    public function breadcrumbRender($arr) {
        $html = '<ol class="breadcrumb">';
        foreach ($arr as $key => $item) {
            $icon = '';
            if ($key == 0) {
                $icon = '<i class="fa fa-dashboard"></i> ';
            }

            if (count($arr) > $key + 1) {
                $html .= '<li><a href="' . $item['url'] . '">' . $icon . $item['name'] . '</a></li>';
            } else {
                $html .= '<li class="active">'.$item['name'].'</li>';
            }
        }
        $html .= '</ol>';

        return $html;
    }
}
