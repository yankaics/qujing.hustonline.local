<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/16
 * Time: 下午8:33
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Index.php');

class Index extends MY_Index
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->set_helpers();
        $this->add_css('index');
        $this->add_js('index.entry');
        $this->display_template('index');
    }
    
    //具体行加信息页面
    public function helper($id){
        $this->get_helper_detail($id);
        $this->add_css('detail');
        $this->add_js('index.entry');
        $this->display_template('detail');
    }
    
    //平台页面信息展示页面
    public function intro()
    {
        $this->add_css('index');
        $this->display_template('intro');
    }

    //处理信息成功
    function success(){
        $this->add_css('success');
        $this->display_template('success');
    }
    
    //处理约见信息
    public function reserve($id){
        if($this->isGet()){
            $this->_data['id'] = $id;
            $this->add_css('register');
            $this->add_js('reserve.entry');
            $this->display_template('reserve');
            return ;
        }
        if($this->isPost()){
            if(!$this->input->post("name")||
                !$this->input->post("grade")||
                !$this->input->post("gender")||
                !$this->input->post("wechat")||
                !$this->input->post("intro")||
                !$this->input->post("phone"))
            {
                $this->response("params_miss");
            }else{
                $res = $this->m_baoming->insert(
                    array(
                        'help_id'=>$id,
                        'name'   =>$this->input->post("name"),
                        'sex'    =>$this->input->post("gender"),
                        'phone'  =>$this->input->post("phone"),
                        'wechat' =>$this->input->post("wechat"),
                        'intro'  =>$this->input->post("intro"),
                        'grade'  =>$this->input->post("grade")
                    ));
                if($res){
                    $this->response('success',array('id'=>$res));
                }
            }
        }
    }


    //获取所有行家的信息
    private function set_helpers(){
        $helper_list = $this->m_helper->gets();
        $this->_data['helper_list'] = $helper_list;
    }

    //获取单个行家的信息
    private function get_helper_detail($id){
        $this->_data['helper_detail'] = $this->m_helper->get(
                array('id' => $id)
            );
    }
    
}