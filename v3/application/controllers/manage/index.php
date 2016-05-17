<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/5/17
 * Time: 下午3:45
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'controllers/manage/manage_base.php');

class Index extends Manage_Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->set_helpers();
        $this->add_css('admin');
        $this->display_template('admin/index');
    }

    public function detail($id)
    {
        $this->set_detail($id);
        $this->add_css('admin');
        $this->display_template('admin/detail');
    }

    public function add()
    {
        if($this->isGet()){
            $this->add_css('register');
            $this->add_js('add.entry');
            $this->display_template('admin/add');
            return ;
        }else if($this->isPost()){
            $avatar_url = '';
            $name = $this->input->post('name');
            if(!isset($name)){
                $this->response('params_miss');
            }
            //处理图片上传
            $File_config = $this->config->item('upload');
            $File_config['file_name'] = $name;
            $this->upload->initialize($File_config);
            if(!$this->upload->do_upload('img_data')) {
                $error = array('error' => $this->upload->display_errors());
                $this->response('upload_error',array('data'=>$error));
            }else{
                $avatar_url = '/img/avatar/'.$this->upload->data()['file_name'];
            }

            //获取其他的参数
            $posts = $this->input->post(NULL, TRUE);
            $personData = array(
              'name'  => $posts['name'],
              'title' => $posts['title'],
              'person_intro' => $posts['person_intro'],
              'subject_intro' => $posts['subject_intro'],
              'skill_intro' => $posts['skill_intro'],
              'skill_price' => $posts['skill_price'],
              'skill_time' => $posts['skill_time'],
              'see_num' => 0,
              'avatar' => $avatar_url
            );
            $res = $this->m_helper->insert($personData);
            if($res){
                $this->response('success',array('data'=>$res));
            }else{
                $this->response('upload_error');
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

    private function set_detail($id){
        $this->get_helper_detail($id);

        $this->_data['baoming_list'] = $this->m_baoming->getsByHelpId($id);
    }

}