<?php
    
	$CURRENT_DIR = dirname(__FILE__);
	include_once($CURRENT_DIR.'/include.list.php');
	foreach($paths as $path_item){
		include_once($CURRENT_DIR.'/'.$path_item);
	}


	class Entry{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbConfig']);
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewConfig']);
		}
		private static function init_controller(){
			self::$controller = isset($_GET['controller'])?slashes($_GET['controller']):'index';
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?slashes($_GET['method']):'index';
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controller();
			self::init_method();
			C(self::$controller, self::$method);
		}
	}
