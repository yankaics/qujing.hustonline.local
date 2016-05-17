<?php

class VIEW {
	public static $view;

	public static function init($name,$config){
		self::$view = new $name();
		foreach($config as $key=>$value){
			self::$view -> $key = $value;
		}
	}

	private static function assign($data){
        foreach($data as $key=>$value){
			self::$view->assign($key, $value);
		}
	}

	public static function display($data){
        self::assign($data);
		self::$view->display("layout/default.tpl");
	}

    public function check_template($tmp_path = '')
    {
        return strpos($tmp_path, '.tpl') === false ? $tmp_path.'.tpl' : $tmp_path;
    }
}