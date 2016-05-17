<?php

/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/16
 * Time: 下午8:46
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'third_party/smarty/Smarty.class.php');

class MY_Smarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->compile_dir  = APPPATH . 'cache';
        $this->template_dir = APPPATH . 'views';
    }
}