<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午10:36
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Admins extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($where = array())
    {
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where($where);

        return $this->db->get()->row_array();
    }
}