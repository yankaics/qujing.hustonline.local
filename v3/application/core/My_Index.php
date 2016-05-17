<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/16
 * Time: 下午9:00
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'core/MY_Controller.php');

class MY_Index extends MY_Controller
{
    public $_user;
    public $_user_id;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_helper");
        $this->load->model("m_baoming");
    }

    public function display_template($tmp_path)
    {
        parent::display_template($tmp_path);
    }

    //向模板中添加js文件
    public function add_js($js)
    {
        $this->_data['js_list'][] = $js.'.js';
    }

    //向模板中添加CSS文件
    public function add_css($css)
    {
        $this->_data['css_list'][] = $css.'.css';
    }


    public function set_cookie($name, $value, $time = 0)
    {
        $domain = '.'.get_domain();
        $expire = time() + ($time ? $time : $this->config->item('cookie_expire_time'));
        setcookie($name, $value, $expire, '/', $domain);
    }

    public function cookie($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : false;
    }

    public function destory_cookie($name)
    {
        $value = '';
        $past  = time()-3600;
        setcookie($name, $value, $past, '/', '.'.get_domain());
    }

    public function response($status, $data = array())
    {
        $output = $this->config->item($status, 'status');
        $output['data'] = $data;
        $output = json_encode($output);
        echo $output;
        exit;
    }

    public function check_miss($param)
    {
        if (!isset($_GET[$param]) && !isset($_POST[$param]))
        {
            $this->response('params_miss');
        }
    }

    /**
     * 判断请求类型是否为POST
     * @return bool
     */
    public function isPost()
    {
        return $this->input->method(FALSE) === 'post';
    }

    /**
     * 判断请求类型是否为GET
     * @return bool
     */
    public function isGet()
    {
        return $this->input->method(FALSE) === 'get';
    }
}


