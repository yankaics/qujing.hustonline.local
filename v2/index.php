<?php
header("Content-type: text/html; charset=utf-8");
//url规则 单一入口 默认路径 index.php?controller=index&method=index
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('date.timezone', 'Asia/Shanghai');  //设置时区防止报错

require_once('config.php');
require_once('framework/entry.php');
Entry::run($config);

