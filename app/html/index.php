<!DOCTYPE html>
<html>
<?php 
    include "util/mysql.php";
?>
<head lang="en">
    <title>取经</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/scss/main/index.css"/>
</head>
<body id="body-pc-box">
<div class="main">
    <div class="hj-list">
        <?php 
            $res = mysql_query("select * from helper");   
            $num = mysql_num_rows($res);
            for($i=0;$i<$num;$i++){
                $msg = mysql_fetch_assoc($res);
                echo '<a href="detail.php?uid='.$msg['id'].'"><div class="hj-item">
                        <div class="hj-avatar-wrap">
                            <img class="hj-avatar" src="'.$msg['avatar'].'" alt="头像"/>
                        </div>
                        <p class="head">
                            <span class="hj-name">'.$msg['name'].'</span> <span class="hj-title">'.$msg['title'].'</span>
                        </p>
                        <p class="hj-skill">
                            '.$msg['skill_intro'].'
                        </p>
                        <p class="hj-info clf">
                            <span class="hj-num left">'.$msg['see_num'].'人见过</span>
                            <span class="hj-price-wrap right">
                                <span class="hj-price">￥'.$msg['skill_price'].'</span>
                                <span class="hj-time">/'.$msg['skill_time'].'小时</span>
                            </span>
                        </p>
                        <p class="hj-detail-wrap clf">
                            <span class="hj-detail right">查看详情</span>
                        </p>
                    </div></a>';
            }
        ?>

    </div>
    <div class="bottom-bar">
        <a href="index.php" class="bottom-button">
            <img src="/img/btn1_active.png" alt="取经">
        </a>
        <a href="share.php" class="bottom-button">
            <img src="/img/btn2.png" alt="分享经验">
        </a>
    </div>
</div>
<script src="/dist/lib/zepto.min.js"></script>
<script src="/dist/index.entry.js"></script>
</body>
</html>