<!DOCTYPE html>
<html>
<?php 
    include "../util/mysql.php";
?>
<head lang="en">
    <meta charset="UTF-8">
    <title>本期所有行家</title>
    <link rel="stylesheet" href="/scss/main/admin.css"/>
</head>
<body>
    <div class="main">
        <p class="header">在线的行家</p>
        <div class="list-wrap">
            <?php 
            $res = mysql_query("select * from helper");   
            $num = mysql_num_rows($res);
            for($i=0;$i<$num;$i++){
                $msg = mysql_fetch_assoc($res);
                echo '<div class="li-item">
                        <span class="avatar">
                            <img src="'.$msg['avatar'].'" alt=""/>
                        </span>
                        <span  class="name">'.$msg['name'].'</span>
                        <span  class="title">'.$msg['title'].'</span>';
                        
                         $res1 = mysql_query("select * from baoming where help_id =".$msg['id']);
                         $see_num = mysql_num_rows($res1);
                        
                echo '<span  class="see_num">'.$see_num.'</span>';
                        
                echo'<span  class="price">￥'.$msg['skill_price'].'元/'.$msg['skill_time'].'小时</span>
                        <a href="detail.php?uid='.$msg['id'].'" class="right">详情</a>
                    </div>';
                }
        ?>
        </div>
    </div>
</body>
</html>