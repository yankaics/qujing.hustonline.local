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
  <div class="detail-list-wrap">
   <?php 
            $uid = $_GET['uid'];
            $res = mysql_query("select * from helper where id =".$uid);   
            $msg = mysql_fetch_assoc($res);
            echo '<p class="header">想约见『'.$msg['name'].'』的人</p>';
            
            $res1 = mysql_query("select * from baoming where help_id =".$uid);
            $see_num = mysql_num_rows($res1);
            if($see_num<=0){
              echo "<p class='no-result'>暂时还没有人~</p>";
            }else{
              for($i=0;$i<$see_num;$i++){
                  $msg = mysql_fetch_assoc($res1);
                   echo '<div class="detail-li-item">
                          <p class="base-info">
                              <span class="text-left">'.($i+1).'</span>
                              <span>'.$msg['name'].'</span>
                              <span>'.$msg['sex'].'</span>
                              <span>'.$msg['grade'].'</span>
                              <span>'.$msg['phone'].'</span>
                              <span>'.$msg['wechat'].'</span>
                          </p>
                         <p class="detail-info">
                             <span class="word">先说的话</span>'.$msg['intro'].'
                         </p>
                        </div>';
            }
            }
        ?>
  </div>
</div>
</body>
</html>