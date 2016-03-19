<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="/scss/main/register.css"/>
</head>
<body id="body-pc-box">
<div class="main">
    <div class="input-header">
        填写资料
    </div>
    <div class="input-info" id="input-info">
        <div class="input-label">
            <label for="name">姓名</label><input type="text" id="name" placeholder="如：张三" name="nickname"/>
        </div>
        <div class="input-label">
            <label for="gender">性别</label><input type="text" id="gender" placeholder="如：男" name="contact"/>
        </div>
        <div class="input-label">
            <label for="grade">专业年级</label><input type="text" id="grade" placeholder="如：社会学大二" name="grade"/>
        </div>
        <div class="input-label">
            <label for="phone">手机号</label><input type="text" id="phone" placeholder="如：13476179904" name="hometown"/>
        </div>
        <div class="input-label">
            <label for="wechat">微信号</label><input type="text" id="wechat" placeholder="如：cmm020304" name="hometown"/>
        </div>
        <div class="input-label text-area">
            <label for="intro">补充说明</label><textarea id="intro" placeholder="自我介绍与遇到的问题等" name="condition"></textarea>
        </div>
    </div>
    <div class="input-warn text-center">
        此次约见为『有偿』约见
    </div>
    <?php 
        echo '<div class="bottom-bar" id="register-button" data-id="'.$_GET['uid'].'">确定报名</div>'
    ?>
    
</div>
<script src="/dist/lib/zepto.min.js"></script>
<script src="/dist/register.entry.js"></script>
</body>
</html>