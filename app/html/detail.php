<!DOCTYPE html>
<html>
<?php 
    include "util/mysql.php";
    $uid = $_GET['uid'];
    $res = mysql_query("select * from helper where id =".$uid);   
    $msg = mysql_fetch_assoc($res);
    $see_num = mysql_num_rows(mysql_query("select * from baoming where help_id =".$uid));
?>
<head lang="en">
    <title><?php echo "【取经】".$msg['skill_intro'].",一对一经验交流" ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="/scss/main/detail.css"/>
    <div style="display:none">
      <?php echo "<img src=".$msg['avatar']." height='302px' width='302px' alt=".$msg['name']." >"; ?>
    </div>
</head>
<body id="body-pc-box">
<div class="main">   
     <?php 
            echo '<div class="hj-item">
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
                            <span class="hj-num left">'.$see_num.'人想见</span>
                            <span class="hj-price-wrap right">
                                <span class="hj-price">￥'.$msg['skill_price'].'</span>
                                <span class="hj-time">/'.$msg['skill_time'].'小时</span>
                            </span>
                        </p>
                        <p class="hj-detail-wrap clf"> </p>
                    </div>
                    <div class="intro-content">
                        <p class="detail-header">个人简介</p>
                        <p>'.$msg['person_intro'].'</p>
                        <p class="detail-header">主题简介</p>
                        <p>'.$msg['subject_intro'].'</p>
                        <p class="warn-word">关注公众号【华科学习帝】，查看更多主题。</p>
                    </div>
                    <a href="register.php?uid='.$uid.'"><div class="bottom-bar">报名约见</div></a>';    
        ?>
</div>
<script src="/dist/lib/zepto.min.js"></script>
<script src="/dist/index.entry.js"></script>
<div style="display:none">
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258124905'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1258124905' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>
</html>