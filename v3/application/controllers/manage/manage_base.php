<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午10:19
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Index.php');

class Manage_Base extends MY_Index
{
    public function __construct()
    {
        session_start();
        parent::__construct();
        $this->load->model('m_admins');
        $this->check_authorize();
    }

    private function check_authorize()
    {
        if (!isset($_SESSION['admin']))
        {
            header('location:/manage/login');
        }
    }
}

