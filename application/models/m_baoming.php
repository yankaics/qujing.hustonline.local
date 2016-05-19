<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午1:42
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_baoming extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($where = array())
    {
        $this->db->select('*');
        $this->db->from('baoming');
        $this->db->where($where);
        return $this->db->get()->row_array();
    }

    //根据help_id找所有报名者的信息
    public function getsByHelpId($id){
        $this->db->select('*');
        $this->db->from('baoming');
        $this->db->where(
            array('help_id'=>$id)
        );
        return $this->db->get()->result_array();
    }

    public function insert($data = array())
    {
        $this->db->insert('baoming', $data);
        return $this->db->insert_id();
    }

    public function update($where, $update = array())
    {
        $this->db->where($where);
        $this->db->update('baoming', $update);
    }
}

