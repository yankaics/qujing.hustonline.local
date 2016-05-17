<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/4/23
 * Time: 上午4:41
 */

class MY_Controller
{
    public $_data;

    public function __construct()
    {
       // TODO
    }

    public function add_js($js)
    {
        $this->_data['js_list'][] = $js.'.js';
    }

    public function add_css($css)
    {
        $this->_data['css_list'][] = $css.'.css';
    }
}