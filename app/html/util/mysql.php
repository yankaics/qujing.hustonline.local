<?php
    /***连接本地的数据库**/
    @mysql_connect("127.0.0.1","root","Hustonline87542701");
    // mysqli_connect("127.0.0.1", 'root', 'Hustonline87542701', 'qujing');
    mysql_select_db("qujing");
    mysql_query("set names utf8");
?>