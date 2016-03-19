<?php
    error_reporting (E_ALL & ~E_NOTICE);
    /***连接本地的数据库**/
    mysql_connect("localhost","root","Hustonline87542701");
    mysql_select_db("qujing");
    mysql_query("set names utf8");
?>
