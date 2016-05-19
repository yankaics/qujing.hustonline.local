<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/16
 * Time: 下午8:52
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'core/MY_Smarty.php');

class MY_Controller extends CI_Controller
{
    public $_data;
    public $_smarty;

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html; charset=utf-8');
//        $this->load->library('my_encrypt');
        $this->_data['DEFAULT']  = 'layout/default.tpl';
        $this->_data['css_list'] = [];
        $this->_data['js_list']  = [];
        $this->_smarty = new MY_Smarty();
    }

    public function display_template($tmp_path)
    {
        $this->_data['CONTENT']  = $this->check_template($tmp_path);
        foreach ($this->_data as $key => $value)
        {
            $this->_smarty->assign($key, $value);
        }
        $this->_smarty->display('layout/default.tpl');
    }

    public function display_template_no_default($tmp_path)
    {
        foreach ($this->_data as $key => $value)
        {
            $this->_smarty->assign($key, $value);
        }
        $this->_smarty->display($this->check_template($tmp_path));
    }

    public function check_template($tmp_path = '')
    {
        return strpos($tmp_path, '.tpl') === false ? $tmp_path.'.tpl' : $tmp_path;
    }

    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        else if (method_exists($this, 'index'))
        {
            array_unshift($params, $method);
            return call_user_func_array(array($this, 'index'), $params);
        }
        show_404();
    }
}