<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午10:26
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Index.php');
//require_once(APPPATH.'core/MY_Account.php');

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admins');
    }

    public function index()
    {
        $this->display_template_no_default('admin/login');
    }


    public function sigin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'email'=>$username,
            'password'=>$password,
        );
        if (!$this->m_admins->get($where))
        {
            //redirect('/manage/login');
            header('location:/manage/index');

        }
        //redirect('/manage/index');
        //header('location:/manage/index');
        session_start();
        $_SESSION['admin'] = 1;
        header('location:/manage/index');
    }
}