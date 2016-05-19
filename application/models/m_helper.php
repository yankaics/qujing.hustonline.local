<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/16
 * Time: 下午9:18
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_helper extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($where = array())
    {
        $this->db->select('*');
        $this->db->select("num");
        $this->db->from('helper');
        $this->db->join('(select help_id,COUNT(*) as num from baoming group by help_id) b','helper.id = b.help_id','left');
        $this->db->where($where);
        return $this->db->get()->row_array();
    }

    public function gets($where = array(), $limit = 0)
    {
        $this->db->select('*');
        $this->db->select("num");
        $this->db->from('helper');
        $this->db->join('(select help_id,COUNT(*) as num from baoming group by help_id) b','helper.id = b.help_id','left');
        if ($limit) {
            $this->db->limit($limit);
        }
        return $this->db->get()->result_array();
    }
    

    public function insert($data = array())
    {
        $this->db->insert('helper', $data);
        return $this->db->insert_id();
    }

    public function update($where, $update = array())
    {
        $this->db->where($where);
        $this->db->update('helper', $update);
    }
}

