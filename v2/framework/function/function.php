<?php
/*
 * 根据传入的 控制器的名称以及控制器中的方法名调用相关控制器文件中的具体方法
 * @params $name     具体控制器的名称
 *         $method   控制中具体的方法名
 */

function C($name, $method){
    require_once('application/controller/'.$name.'Controller.class.php');
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
}

/*
 * 根据传入的 Model的名称 实例化相应的模型
 * @params $name     具体Model的名称
 */
function M($name){
    require_once('application/model/'.$name.'Model.class.php');
    $model = $name.'Model';
    $obj = new $model();
    return $obj;
}

/*
 * 根据传入的 视图的名称 实例化相应的视图
 * @params $name     具体View的名称
 */
function V($name){
    require_once('application/view/'.$name.'View.class.php');
    $model = $name.'View';
    $obj = new $model();
    return $obj;
}

/*
 *  后面可能拓展的第三方类
 *
 */
function ORG($path, $name, $params=array()){//
    require_once('application/org/'.$path.$name.'.class.php');
    $obj = new $name();
    if(!empty($params)){
        foreach($params as $key=>$value){
            $obj->$key = $value;
        }
    }
    return $obj;
}

/*
 * 对特殊字符进行转移
 */
function slashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}

