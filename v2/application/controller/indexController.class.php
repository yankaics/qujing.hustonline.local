<?php

require_once('My_Controller.php');

class indexController extends MY_Controller
{
    public function __construct(){
        //ToDo
    }

    public function index(){
        $this->_data['data'] = $this->getAllExperts();
        $this->add_css("index");
        $this->add_js("index.entry");
        $this->_data['CONTENT'] = "index.tpl";
        VIEW::display($this->_data);
    }

    //显示个人详情页
    public function detail(){
        if(isset($_GET['id'])){
            $id = intval($_GET['id']);
            $this->_data["data"] = $this->getExpertInfo($id);
        }else{
            $this->_data["data"] = array();
        }
        $this->add_css("detail");
        $this->add_js("index.entry");
        $this->_data['CONTENT'] = "detail.tpl";
        VIEW::display($this->_data);
    }

    //显示预约界面
    public function reserve(){
        if(isset($_GET['id'])){
            $id = intval($_GET['id']);
            $this->_data["data"] = $id;
        }else{
            $this->_data["data"] = "";
        }
        $this->add_css("register");
        $this->add_js("register.entry");
        $this->_data['CONTENT'] = "reserve.tpl";
        VIEW::display($this->_data);
    } 
    

    //处理预约
    public function delReserve(){
        extract($_POST);
        if(empty($name)||empty($grade)||empty($gender)||empty($phone)||empty($wechat)||empty($intro)||empty($help_id)){
            echo "EMPTY";
            return ;
        }
        $name = slashes($name);
        $grade = slashes($grade);
        $sex = slashes($gender);
        $phone = slashes($phone);
        $wechat = slashes($wechat);
        $intro = slashes($intro);

        $data = array(
            'name'=>$name,
            'grade'=>$grade,
            'help_id'=>slashes($help_id),
            'sex'=>$sex,
            'phone'=>$phone,
            'wechat'=>$wechat,
            'intro'=>$intro
        );
        $obj = M("seeker");
        if($obj ->insert($data)){
            echo 1;
            return ;
        }
    }
    

    //显示成功页
    public  function success(){
        $this->add_css("success");
        $this->add_js("index.entry");
        $this->_data['CONTENT'] = "success.tpl";
        VIEW::display($this->_data);
    }

    //显示intro界面
    public function intro(){
        $this->add_css("index");
        $this->add_js("index.entry");
        $this->_data['CONTENT'] = "intro.tpl";
        VIEW::display($this->_data);
    }

    //获取所有行家的函数
    private function getAllExperts(){
        return M('experts')->findAllByRandom();
    }

    //获取某个行家的详细信息
    private function getExpertInfo($id){
        return M('experts')->findOneById($id);
    }

    

}

